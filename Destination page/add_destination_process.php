<?php
require '../base/config.php';

    $add_name = $_POST["name"];
    $add_email = $_POST["email"];
    $add_gender = $_POST["gender"];
    $add_location = $_POST["location"];
    $add_date = $_POST["date"];
    $add_type = $_POST["type"];
    $add_description = $_POST["description"];



$sql = "INSERT INTO t1_destination (name, email, gender, location , date, type , description) VALUES ('$add_name', '$add_email', '$add_gender', '$add_location','$add_date','$add_type', '$add_description')";

if ($con->query($sql)) {
    header("Location: read_destination.php");
    exit;
} else {
    echo "Error: " . $con->error;
}
?>
