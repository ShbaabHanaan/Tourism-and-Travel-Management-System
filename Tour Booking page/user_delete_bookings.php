<?php
require 'config.php';
session_start();

$id = $_GET['id'];
$sql = "DELETE FROM bookings WHERE id='$id'";

if ($con->query($sql) === TRUE) {
    
    header('Location: user_read_bookings.php');
    exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>