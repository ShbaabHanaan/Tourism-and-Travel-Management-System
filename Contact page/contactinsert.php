<?php
require '../config.php';
session_start();

$uname = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $contactMethod = $_POST['contactMethod'];

    $sql = "INSERT INTO contact_form (date, name, email, phone, gender, age, address, message, contactmethod , username)
            VALUES ('$date', '$name', '$email', '$phone', '$gender', '$age', '$address', '$message', '$contactMethod', '$uname')";

    if ($con->query($sql) === TRUE) {
        echo "<script>
                alert('Message sent successfully!');
                window.location.href = '../user_dashboard_page/userdashboard.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>
