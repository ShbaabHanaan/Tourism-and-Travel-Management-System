<?php
require '../base/config.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    
    $sql = "DELETE FROM t1_destination WHERE tid='$id'";

    if ($con->query($sql)) {
        header("Location: read_destination.php");
        exit;
    } else {
        echo "Error deleting record: " . $con->error;
    }
}
?>
