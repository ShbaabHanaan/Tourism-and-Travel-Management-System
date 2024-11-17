
<?php 

session_start();


include '../base/user_header.php' ?>
    
    <title>Payment Form</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="payment.js"></script>
<div class="body-content">
  <form action="paymentinsert.php" method="POST">
  <fieldset>
    <legend>
        Payment Details
    </legend>
        Bank name : <input type="text" name="bname" required><br>
        Name : <input type="text" name="namee"><br>
        Card number: <input type="text" name="cardnumber" maxlength="16"><br>
        Expiry date:<input type="text" id="day" name="day" placeholder="MM/YYYY" oninput="formatExpiryDate(this)" maxlength="7" required><br>
        Phone number: <input type="text" name="phonenumber" maxlength="10" required><br><br>
        CVV: <input type="text" name="cvv" maxlength="3" required><br>
       <input type="submit" name="sup" value="Submit">
    
  </fieldset> 
  </form>
</div>
<?php include "../base/user_footer.php"; ?>