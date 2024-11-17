<?php
session_start();
require 'config.php'; 


$BA_NAME = isset($_POST["bname"]) ? $_POST["bname"] : '';
$C_NAME = isset($_POST["namee"]) ? $_POST["namee"] : '';
$C_CARDNUMBER = isset($_POST["cardnumber"]) ? $_POST["cardnumber"] : '';
$C_EXPIREDATE = isset($_POST["day"]) ? $_POST["day"] : '';
$C_PHONENUMBER = isset($_POST["phonenumber"]) ? $_POST["phonenumber"] : '';
$C_CVV = isset($_POST["cvv"]) ? $_POST["cvv"] : '';


$sql = "INSERT INTO payment (bank_name, fname, card_number, expire_date, phone_number, cvv) 
        VALUES ('$BA_NAME', '$C_NAME', '$C_CARDNUMBER', '$C_EXPIREDATE', '$C_PHONENUMBER', '$C_CVV')";


if ($con->query($sql) === TRUE) {
    
    echo "<script>
            alert('Submitted successfully');
            window.location.href = 'paymentread.php';
          </script>";
} else {
    echo "<script>
            alert('Error: " . $con->error . "');
            window.location.href = 'payment.php';
          </script>";
}


$con->close();
?>
