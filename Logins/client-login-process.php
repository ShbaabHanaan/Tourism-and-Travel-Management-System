<?php 
require '../base/config.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){       
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_data WHERE username = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $username); // "s" means string type for username
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Directly compare the plain-text password (insecure)
        if ($password == $user['password']) {
            $_SESSION['username'] = $username;
            header("Location: ../user_dashboard_page/userdashboard.php");
        } else {
            echo "Error: Invalid password.";
        }
    } else {
        echo "Error: Invalid username.";
    }

    // Close the connection
    $stmt->close();
    $con->close();

}




?>