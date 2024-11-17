<?php
$con = new mysqli('localhost', 'root', '', 'travel_ms');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
