<?php
require '../config.php';


if (isset($_GET['id'])) {
    
    $id = $_GET['id'];

    
    $sql = "DELETE FROM contact_form WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        echo "<script>
        alert('Record deleted successfully!');
        window.location.href = 'contactread.php';
      </script>";
    } else {
        echo "Error deleting record: " . $con->error;
    }

    
    $con->close();
} else {
    echo "No ID provided.";
}
?>
