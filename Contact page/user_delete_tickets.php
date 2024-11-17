<?php
require '../config.php';


if (isset($_GET['id'])) {
    // get the id of the record for delete
    $id = $_GET['id'];

    $sql = "DELETE FROM contact_form WHERE id=$id";

    if ($con->query($sql) === TRUE) {
      
        header("location: user_read_tickets.php");
    } else {
        echo "Error deleting record: " . $con->error;
    }

    $con->close();
} else {
    echo "No ID provided.";
}
?>
