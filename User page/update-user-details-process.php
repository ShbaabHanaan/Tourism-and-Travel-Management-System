<?php 
require '../config.php';

session_start();

    $uname = $_SESSION['username'];
    $firstname  = $_POST["firstName"];
    $lastname  = $_POST["lastName"];
    $password  = $_POST["password"];
    $phone_no  = $_POST["phone"];
    $email  = $_POST["email"];

    $sql = "UPDATE user_data 
    SET first_name = '$firstname', last_name = '$lastname', password = '$password', phone_no = '$phone_no', email = '$email'
    WHERE username = '$uname'";

    if($con->query($sql)){
        echo "Inserted successfully";
        header("Location:user-details.php");
    }
    else{
        echo "Error :" .$con -> error;
    }
    
$con -> close();
    