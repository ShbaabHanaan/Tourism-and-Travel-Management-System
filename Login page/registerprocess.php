<?php 
require 'config.php';

// Capture form data from POST request
$username  = $_POST["user_name"];
$firstname  = $_POST["first_Name"];
$lastname  = $_POST["last_Name"];
$gender  = $_POST["gender"];
$password  = $_POST["password"];
$addressline1  = $_POST["addressline1"];
$addressline2  = $_POST["addressline2"];
$zipcode  = $_POST["zip"];
$province  = $_POST["province"];
$phone_no  = $_POST["phone"];
$email  = $_POST["email"];


$sql_check = "SELECT username FROM user_data WHERE username = '$username'";
$result = $con->query($sql_check);

if($result->num_rows > 0) {
    
    echo '<script>alert("Username already exists. Enter a different username.");</script>';
    header("location: register.php");
} else {
 
    $sql = "INSERT INTO user_data (username, first_name, last_name, gender, password, addressline1, addressline2, zipcode, province, phone_no, email)
            VALUES ('$username', '$firstname', '$lastname', '$gender', '$password', '$addressline1', '$addressline2', '$zipcode', '$province', '$phone_no', '$email')";

    if($con->query($sql) === TRUE) {
        echo "Inserted successfully";
        header("location: logins/client-login.php");
    } else {
        echo "Error: " . $con->error;
    }
}


$con->close();
?>
