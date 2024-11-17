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

<html>
    <head> 
        <link rel="stylesheet" href="destination_crud_styles.css">
    </head>
    <body>

    <button class="add-to-read_and_update-to-read" onclick="redirectToPHP()">Go Back</button>
    <script>

    function redirectToPHP() {
    // Redirect to the desired PHP file
    window.location.href = "read_destination.php";
    }

    </script>

            <h2>Add New Destination</h2>

        <fieldset class="form-box">
            <form method="post" action="add_destination_process.php">
                <div class="form">
                    <label for="name"><a>Name:</a></label>
                    <input type="text" id="name" name="name" oninput="validateName()"><br>
                
                    <label for="email"><a>Email:</a></label>
                    <input type="email" id="email" name="email" oninput="validateEmail()"><br>
                </div>   

                <div class="form2">
                    <label for="gender"><a>Gender:</a></label>
                    <input type="radio" id="gender_male" name="gender" value="male" required> <b style="padding-right:50px;">Male</b>
                    <input type="radio" id="gender_female" name="gender" value="female" required> <b>Female</b>
                </div>

                <div class="form"> 
                    <label for="location"><a>Location:</a></label>
                    <input type="text" id="location" name="location" oninput="validateLocation()"><br>

                    <label for="date"><a>Add Date:</a></label>
                    <input type="date" id="date" name="date" required>
                    
                    <label for="type"><a>Destination Type:</a></label>
                    <select id="type" name="type" required>
                        <option disabled selected>Select tour type</option>
                        <option value="Adventurous">Adventurous</option>
                        <option value="Cultural">Cultural</option>
                        <option value="Luxury Tours">Luxury Tours</option>
                        <option value="Wild Life">Wild Life</option>
                        <option value="Spiritual and Wellness Tours">Spiritual and Wellness Tours</option>
                    </select><br> 

                    <label for="description"><a>Description:</a></label>
                    <textarea id="description" name="description" placeholder="Briefly explain Location Details?" required></textarea><br>
                    
                    <button class="reset-btn" type="reset">Reset</button>
                    <button class="submit-btn" type="submit">Add Destination</button>
                </div>  
            </form>
        </fieldset>

        <script src="destination_crud.js"></script>
    </body>
</html>

<?php
    require '../includes/admin_footer2.php';
    ?>
