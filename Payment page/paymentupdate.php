

   

<?php
require 'config.php';

session_start();


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $bank_name = $_POST['bank_name'];
    $fname = $_POST['fname'];
    $card_number = $_POST['card_number'];
    $expire_date = $_POST['expire_date'];
    $phone_number = $_POST['phone_number'];
    $cvv = $_POST['cvv'];

    $sql = "UPDATE payment SET bank_name='$bank_name', fname='$fname', card_number='$card_number', expire_date='$expire_date', phone_number='$phone_number', cvv='$cvv' WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        $_SESSION['message'] = "Record updated successfully!";
        header('Location: paymentread.php');
        exit();
    } else {
        echo "Error updating record: " . $con->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM payment WHERE id = $id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
    } else {
        echo "No record found.";
        exit();
    }
} else {
    echo "No ID provided.";
    exit();
}

$con->close();
//show alert msg
if (isset($_SESSION['message'])) {
    echo "<script>showAlert('" . $_SESSION['message'] . "', 'paymentread.php');</script>";
    unset($_SESSION['message']); }
?>
 <link rel="stylesheet" type="text/css" href="paymentupdatestyle.css"> 
    <title>Edit Payment Record</title>
    <script>
        
        function showAlert(message, redirectUrl) {
            alert(message);
            window.location.href = redirectUrl; 
        }
    </script>
    <div><?php include "../base/user_header.php";
?></div>
<div class="body-content">
<form action="paymentupdate.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <h2>Edit Payment Details</h2>
    <label for="bank_name">Bank Name:</label>
    <input type="text" id="bank_name" name="bank_name" value="<?php echo $row['bank_name']; ?>" required><br><br>

    <label for="fname">Name:</label>
    <input type="text" id="fname" name="fname" value="<?php echo $row['fname']; ?>" required><br><br>

    <label for="card_number">Card Number:</label>
    <input type="text" id="card_number" name="card_number" value="<?php echo $row['card_number']; ?>" required><br><br>

    <label for="expire_date">Expiry Date:</label>
    <input type="text" id="expire_date" name="expire_date" value="<?php echo $row['expire_date']; ?>" required><br><br>

    <label for="phone_number">Phone number:</label>
    <input type="number" id="phone_number" name="phone_number" value="<?php echo $row['phone_number']; ?>" required><br><br>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" value="<?php echo $row['cvv']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>
</div>

<div><?php include "../base/user_footer.php";?>
