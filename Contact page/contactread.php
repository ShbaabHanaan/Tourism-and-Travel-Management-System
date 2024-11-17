
    
<?php
    require '../includes/admin_header2.php';
 ?>
    
    
    <link rel="stylesheet" type="text/css" href="contactreadstyle.css"> 
    <title>Contact Form Data</title>

<?php
require '../config.php';


$sql = "SELECT * FROM contact_form";
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
                    <a href='contactupdate.php?id=" . $row['id'] . "'>Edit/Update</a> <!-- Link to the edit page -->
                </td>
                <td>
                    <a href='contactdelete.php?id=" . $row['id'] . "'>Delete</a> <!-- Link to the edit page -->
                </td>
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

<?php
    require '../includes/admin_footer2.php';
 ?>

