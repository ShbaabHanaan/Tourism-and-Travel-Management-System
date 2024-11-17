<?php
require '../base/config.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    
    $sql = "DELETE FROM user_data WHERE id='$id'";

    if ($con->query($sql)) {
        header("Location: manage-user.php");
        exit();
    } else {
        echo "Error deleting record: " . $con->error;
    }
}
?>
