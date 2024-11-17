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
    
    <head>
    <title>All Destinations</title>
    <link rel="stylesheet" href="destination_crud_styles.css">
    </head>
    <body>

    <div id="box">
    <button class="back-button" onclick="redirectToPHP()">Go Back</button>
    <script>

    function redirectToPHP() {
    // Redirect to the desired PHP file
    window.location.href = "../admin_dashboard_page/admin_dashboard.php";
    }

    </script>

        <h2>All Destinations</h2>
        <a class="add-new-btn" href="add_destination.php">Add New Destination</a><br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Location</th>
                    <th>Add Date</th>
                    <th>Destination Type</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'config.php';

                $sql = "SELECT * FROM t1_destination";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['tid']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['location']}</td>
                            <td>{$row['date']}</td>
                            <td>{$row['type']}</td>
                            <td>{$row['description']}</td>
                            <td>
                            <div class='action-btn'>
                                <a class='update-btn' href='update_destination.php?updateid={$row['tid']}'>Update</a> |
                                <a class='delete-btn' href='delete_destination.php?deleteid={$row['tid']}' onclick='return confirmDelete();'>Delete</a>
                            </div>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No destinations found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div> 


    <script src="destination_crud.js"></script>

            </body>
            </html>


            <?php
    require '../includes/admin_footer2.php';
    ?>

   
