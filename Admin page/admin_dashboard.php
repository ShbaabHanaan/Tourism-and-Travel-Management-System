<?php
session_start();
require '../includes/config.php';
require '../includes/admin_header2.php';

$username;
if(isset($_SESSION["username"])){
  
  $username = $_SESSION["username"];
}else{
  header("Location: ../logins/admin-login.php");
  exit();
}


$sql = "SELECT Count(tid) FROM t1_destination ";

$result = $con->query($sql);
// Fetch the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $row_count1 = $row['Count(tid)'];
    
} else {
    $row_count1 = 0; 
}

$sql = "SELECT Count(id) FROM bookings";

$result = $con->query($sql);
// Fetch the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $row_count2 = $row['Count(id)'];
    
} else {
    $row_count2 = 0; 
}

$sql = "SELECT Count(id) FROM contact_form ";

$result = $con->query($sql);
// Fetch the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $row_count3 = $row['Count(id)'];
    
} else {
    $row_count3 = 0; 
}

$sql = "SELECT Count(id) FROM user_data ";

$result = $con->query($sql);
// Fetch the result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $row_count4 = $row['Count(id)'];
    
} else {
    $row_count4 = 0; 
}
$con->close();
?>


<!DOCTYPE html>
<head>



    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_dashboard.css">
    <link rel="stylesheet" href="../includes/admin_header_footer_styles2.css">    
</head>
<body>
    <div class="side-box">
        <aside class="menu">
                <img src="profile2.png" alt="Rounded Image" class="profile">
            <nav>
                <ul>
                    <li><a href="../destination_crud/read_destination.php">Manage Destination</a></li>
                    <li><a href="manage-user.php">Manage Users</a></li>
                    <li><a href="../tour_booking_crud/read_bookings.php">Bookings</a></li>
                    <li><a href="../contact_page/contactread.php">View Tickets</a></li>
                </ul>
            </nav>
        </aside>

        <div class="main">
            <header class="topbar">
                <h1>Dashboard</h1>
                <div class="admin-info">
                    <?php
                    echo "Welcome to the Dashboard, ".($username). "!";
                    ?>
                </div>
            </header>

            <section id="overview" class="section overview">
                <h2>Overview</h2>
                <div class="card-box1" >
                    <div class="card1" onclick="read_destinations()">      
                        <h3><?php echo $row_count1; ?></h3>
                        <a class="text">Total Destinations</a>
                    </div>
                    <div class="card2" onclick="bookings()">
                        <h3><?php echo $row_count2; ?></h3>
                        <a class = "text">Active Bookings</a>
                    </div>
                </div>
                <br>
                <div class="card-box2">
                    <div class="card3" onclick="user_tickets()">
                        <h3><?php echo $row_count3; ?></h3>
                        <a class="text">Total User Tickets</a>
                    </div>
                    <div class="card4" onclick="active_users()">
                        <h3><?php echo $row_count4; ?></h3>
                        <a class="text">Total Active Users</a>
                    </div>
                </div>
            </div>
            </section>

           
    </div>
    
 <script src ="admin_dashboard.js"></script>
</body>

<?php
    require '../includes/admin_footer2.php';
?>


<script>

    function read_destinations() {
    // Redirect to the desired PHP file
    window.location.href = "../destination_crud/read_destination.php";
    }


    function bookings(){
        window.location.href= "../tour_booking_crud/read_bookings.php";
    }

    function user_tickets(){
        window.location.href= "../contact_page/contactread.php";
    }

    function active_users(){
        window.location.href="../admin_dashboard_page/manage-user.php";
    }
    
    
    

</script>
