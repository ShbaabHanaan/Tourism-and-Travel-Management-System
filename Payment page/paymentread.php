
   

<?php
session_start();
require 'config.php';

// Check if there is a message to display
if (isset($_SESSION['message'])) {
    echo "<script>alert('" . $_SESSION['message'] . "');</script>";
    unset($_SESSION['message']); // Clear the message after displaying
}
include "../base/user_header.php";
?>
<div class="body-content">
 <link rel="stylesheet" type="text/css" href="paymentreadstyle.css"> 
 <title>Payment Records</title>

<div class="add-button-container">
    <button onclick="window.location.href='payment.php'">Add New Payment Card</button>
</div>

<?php
     
    
$sql = "SELECT * FROM payment";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Bank Name</th><th>Name</th><th>Card Number</th><th>Expiry Date</th><th>Phone number</th><th>CVV</th><th>Edit</th><th>Delete</th></tr>";
    
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["bank_name"]."</td>";
        echo "<td>".$row["fname"]."</td>";
        echo "<td>".$row["card_number"]."</td>";
        echo "<td>".$row["expire_date"]."</td>";
        echo "<td>".$row["phone_number"]."</td>";
        echo "<td>".$row["cvv"]."</td>";
        echo "<td><a href='paymentupdate.php?id=" . $row["id"] . "'>Update</a></td>";
        echo "<td><a href='paymentdelete.php?id=" . $row["id"] . "' onclick='return confirmDelete()'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}

$con->close();


?>

<div class="pay-now-button-container">
    <button onclick="window.location.href='../pages/thankyou.html'">Pay Now</button>
</div>
</div>

<?php  include "../base/user_footer.php"; ?>

