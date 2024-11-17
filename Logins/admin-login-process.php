<?php
// session Start
session_start();
require '../base/config.php';

// Check the admin is already logged in
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: ../admin_dashboard_page/admin_dashboard.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){       
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $username); // "s" means string type for username
    $stmt->execute();
    $result = $stmt->get_result();
    

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();
        // Checking if the details are same
        if ($password == $user['password']) {
            $_SESSION['username'] = $username;
            header("Location: ../admin_dashboard_page/admin_dashboard.php");

        } else { //show a popup message and redirect the login page
            echo "<script>
            alert('Invalid User name or password.');
            window.location.href = 'admin-login.php'; 
            </script>";
        }
    } else { //show a popup message and redirect the login page
        echo "<script>
            alert('Invalid User Name or Password.');
            window.location.href = 'admin-login.php'; 
            </script>";
    }

    // Close connection
    $stmt->close();
    $con->close();
}
?>