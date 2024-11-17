<?php
  require 'config.php';


  session_start();
  
  $uname = $_SESSION['username'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $travelers = $_POST['travelers'];
        $tour_date = $_POST['tour_date'];
        $travel_destination = $_POST['travel_destination'];
        $tour_plan = $_POST['tour_plan'];
        $special_requests = $_POST['special_requests'];

        $popupMessage = "";
        $popupType = "";
    
        $sql = "INSERT INTO bookings (name, email,phone,address,travelers, travel_date , travel_destination, tour_plan,special_requests,username) 
                VALUES ('$name', '$email','$phone','$address','$travelers', '$tour_date','$travel_destination' , '$tour_plan','$special_requests','$uname')";
    
        if ($con->query($sql) === true) {
            $popupMessage = "Your booking has been confirmed successfully!";
            $popupType = "success";
            
        } else {
            $popupMessage = "Error: " . $stmt->error;
            $popupType = "error";
        }
        $con->close();

        header("Location: booking_form.php?popupMessage=" . urlencode($popupMessage) . "&popupType=" . $popupType);
        exit();
    }
?>