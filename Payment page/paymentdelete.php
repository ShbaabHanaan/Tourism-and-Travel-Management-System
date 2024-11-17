<?php
require 'config.php';

session_start();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $sql = "DELETE FROM payment WHERE id = $id";

    if ($con->query($sql) === TRUE) {
  
        $_SESSION['message'] = "Record deleted successfully";
        header('Location: paymentread.php');
    } else {
        // Handle error (optional)
        $_SESSION['message'] = "Error deleting record: " . $con->error;
    }
}


header("Location: payment.php");
exit();

$con->close();
?>
