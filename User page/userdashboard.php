<?php
  session_start();
$username;
if(isset($_SESSION["username"])){
  
  $username = $_SESSION["username"];
}else{
  header("Location: ../logins/client-login.php");
}
?>

<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> User Dashboard </title>
    <link rel="stylesheet" href="userdashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body >


   <div class="sidebar">
     <div class="logo_content">
       <div class="logo">
         <div class="logo_name">DESTINEX</div>
       </div>
       <i class='bx bx-menu' id="btn"></i>
     </div>
     <ul class="nav_list">
       
       <li>
        <a href="../home.php">
         <i class='bx bx-grid-alt'></i>
         <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
       <li>
         <a href="../user-crud/user-details.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Profile</span>
         </a>
         <span class="tooltip">Profile</span>
       </li>
      
      <li>
        <a href="../pages/reviews.php">
         <i class='bx bx-pie-chart-alt-2'></i>
         <span class="links_name">Reviews</span>
        </a>
        <span class="tooltip">Reviews</span>
      </li>
      <li>
        <a href="../payment_crud/paymentread.php">
         <i class='bx bx-wallet'></i>
         <span class="links_name">Payment</span>
        </a>
        <span class="tooltip">Payment</span>
      </li>
      <li>
        <a href="../package_page/packages.php">
         <i class='bx bx-cart-alt'></i>
         <span class="links_name">Book A Tour</span>
        </a>
        <span class="tooltip">Book A Tour</span>
      </li>
      <li>
        <a href="../tour_booking_crud/user_read_bookings.php">
         <i class='bx bx-book'></i>
         <span class="links_name">Your Bookings</span>
        </a>
        <span class="tooltip">Your Bookings</span>
      </li>
      <li>
        <a href="../contact_page/contactus.php">
         <i class='bx bx-support'></i>
         <span class="links_name">Help/Support</span>
        </a>
        <span class="tooltip">Support</span>
      </li>
      <li>
        <a href="../contact_page/user_read_tickets.php">
         <i class='bx bx-cog'></i>
         <span class="links_name">Your Tickets</span>
        </a>
        <span class="tooltip">Your Tickets</span>
      </li>
      <li>
        <a href="../logins/logout.php">
         <i class='bx bx-user'></i>
         <span class="links_name">Logout</span>
        </a><form >
        <span class="tooltip">Logout</span></form>
      </li>
     </ul>
     
   </div>
   <div class="home_content">
     <div class="text"><?php
        echo "Welcome to the Dashboard, ".($username) . "!";
        ?>
      </div>

</div>      <div class="transparent-box">
      <div class="slideshow">
        <div class="quote active">"The journey of a thousand miles begins with a single step."          – Lao Tzu</div>
        <div class="quote">"Not all those who wander are lost."               – J.R.R. Tolkien</div>
        <div class="quote">"Travel makes one modest. You see what a tiny place you occupy in the world."             – Gustave Flaubert</div>
        <div class="quote">"The real voyage of discovery consists not in seeking new landscapes, but in having new eyes."            – Marcel Proust</div>
        <div class="quote">"Take only memories, leave only footprints."        – Chief Seattle</div>
    </div>
     
   </div>
   <script>
    // JavaScript for the slideshow
    let slideIndex = 0;
    const quotes = document.querySelectorAll('.quote');
    const totalQuotes = quotes.length;

    function showNextQuote() {
        quotes[slideIndex].classList.remove('active');
        slideIndex = (slideIndex + 1) % totalQuotes; // Loop back to the first quote
        quotes[slideIndex].classList.add('active');
    }

    // Change quote every 5 seconds
    setInterval(showNextQuote, 5000);
</script>
<script src="userdashboard.js"></script>
</body>
</html>

