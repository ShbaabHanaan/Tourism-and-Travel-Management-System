<?php
require '../base/config.php';
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: ../logins/client-login.php");
    exit(); 
}

include "../includes/admin_header2.php";

// Fetching all data from the user_data table
$sql = "SELECT id, username, email, phone_no, addressline1, addressline2, zipcode, province, created_at FROM user_data";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <link rel="stylesheet" href="manage-user.css">
    <link rel="stylesheet" href="loading-animation.css">
    <style>
        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: brown; 
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

       
        .delete {
            text-decoration: none;
            padding: 6px 12px;
            color: #dc3545; 
            border: 1px solid #dc3545;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .delete:hover {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>

<?php
if ($result->num_rows > 0) {
    echo "<table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>Zipcode</th>
            <th>Province</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone_no']."</td>
                <td>".$row['addressline1']."</td>
                <td>".$row['addressline2']."</td>
                <td>".$row['zipcode']."</td>
                <td>".$row['province']."</td>
                <td>".$row['created_at']."</td>
                <td>
                    <div style='display:flex; justify-content:space-around;'>
                        <a href='user_delete.php?deleteid={$row['id']}' onclick='return confirmDelete();' class='delete'>Delete</a>
                    </div>
                </td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No users found.</p>";
}
?>
<script>
   function confirmDelete() {
    return confirm("Are you sure you want to delete this User?");
} 
</script>

</body>
</html>

<?php
    require '../includes/admin_footer2.php';
 ?>
