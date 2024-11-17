
<?php
require '../includes/admin_header2.php';
?>

<?php
        session_start();
        require '../includes/config.php';
        
        $username;
        if(isset($_SESSION["username"])){
          
          $username = $_SESSION["username"];
        }else{
          header("Location: ../logins/admin-login.php");
          exit();
        }
?>
    
<?php

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    // get current destination info
    $sql = "SELECT * FROM t1_destination WHERE tid='$id'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        die("Destination not found!");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $add_name = $_POST["name"];
    $add_email = $_POST["email"];
    $add_gender = $_POST["gender"];
    $add_location = $_POST["location"];
    $add_date = $_POST["date"];
    $add_type = $_POST["type"];
    $add_description = $_POST["description"];

    $sql = "UPDATE t1_destination 
            SET name='$add_name', email='$add_email', gender='$add_gender', location='$add_location', date='$add_date', type='$add_type', description='$add_description'
            WHERE tid='$id'";

    if ($con->query($sql)) {
        header("Location: read_destination.php");
        exit;
    } else {
        echo "Error updating record: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="destination_crud_styles.css">
    <title>Update Destination</title>
</head>
<body>
    <div class="update">

    <button class="add-to-read_and_update-to-read" onclick="redirectToPHP()">Go Back</button>
    <script>

    function redirectToPHP() {
    // Redirect to the desired PHP file
    window.location.href = "read_destination.php";
    }

    </script>

    <h2>Update Destination</h2>
    </div>
    <fieldset class="form-box">
    <form method="post" action="">
    




    <div class="form">
                <label for="name"><a>Name:</a></label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            
                <label for="email"><a>Email:</a></label>
                <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
            </div>   

            <div class="form2">
                <label for="gender"><a>Gender:</a></label>
                <input type="radio" name="gender" value="male" <?php if ($row['gender'] == 'male') echo 'checked'; ?>> Male
                <input type="radio" name="gender" value="female" <?php if ($row['gender'] == 'female') echo 'checked'; ?>> Female
            </div>

            <div class="form"> 
                <label for="location"><a>Location:</a></label>
                <input type="text" name="location" value="<?php echo $row['location']; ?>"><br>

                <label for="date"><a>Add Date:</a></label>
                <input type="date" name="date" value="<?php echo $row['date']; ?>"><br>
                
                <label for="type"><a>Destination Type:</a></label>
                <select id="type" name="type">
                    <option <?php if ($row['type'] == 'Adventurous') echo 'selected'; ?>>Adventurous</option>
                    <option <?php if ($row['type'] == 'Cultural') echo 'selected'; ?>>Cultural</option>
                     <option <?php if ($row['type'] == 'Luxury Tours') echo 'selected'; ?>>Luxury Tours</option>
                    <option <?php if ($row['type'] == 'Honeymoon and Romantic') echo 'selected'; ?>>Honeymoon and Romantic</option>
            </select><br>

                <label for="description"><a>Description:</a></label>
                <textarea name="description"><?php echo $row['description']; ?></textarea><br>
                
                <button class="Update-destination-btn" type="submit">Update Destination</button>
            </div>  
            
        </form>
    </fieldset>
    <script src="destination_crud.js"></script>
</body>
</html>

<?php
    require '../includes/admin_footer2.php';
    ?>
