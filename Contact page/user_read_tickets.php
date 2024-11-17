
    <link rel="stylesheet" type="text/css" href="contactreadstyle.css"> <!-- Linking the CSS file -->
    <title>Contact Form Data</title>

<?php
require '../config.php';
session_start();
if(!isset($_SESSION['username'])){
    header("Location: ../logins/client-login.php");
    exit();
}

include '../base/user_header.php';

$uname = $_SESSION['username'];

$sql = "SELECT id ,date ,name,email , phone , gender , age , address , message , contactmethod FROM contact_form
        where username = '$uname'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Address</th>
                <th>Message</th>
                <th>Contact Method</th>
                <th>Edit</th> <!-- Added for Edit option -->
                <th>Delete</th>
            </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . ($row['id']) . "</td>
                <td>" . ($row['date']) . "</td>
                <td>" . ($row['name']) . "</td>
                <td>" . ($row['email']) . "</td>
                <td>" . ($row['phone']) . "</td>
                <td>" . ($row['gender']) . "</td>
                <td>" . ($row['age']) . "</td>
                <td>" . ($row['address']) . "</td>
                <td>" . ($row['message']) . "</td>
                <td>" . ($row['contactmethod']) . "</td>
                <td>
                    <a href='user_update_tickets.php?id=" . $row['id'] . "'>Edit/Update</a> 
                </td>
                <td>
                    <a href='user_delete_tickets.php?id=" . $row['id'] . "'>Delete</a> 
              </tr>";
    }
    echo "</table>";
} else {
    echo "No messages found.";
}


$con->close();
?>
</body>
</html>