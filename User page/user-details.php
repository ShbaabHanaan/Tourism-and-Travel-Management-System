<?php 
session_start();
$username;

if (isset($_SESSION["username"])) {
    // User is logged in
} else {
    header("Location: ../logins/client-login.php");
    exit(); // Stop script execution after redirect
}

require '../config.php';

$uname = $_SESSION['username'];
$sql = "SELECT ID, first_name, last_name, password, email, phone_no FROM user_data WHERE username = '$uname'";
$result = $con->query($sql);
$user = $result->fetch_assoc();

if (!$result) {
    die("Invalid query: " . $con->error);
}




if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove_account'])) {
    $password = $_POST['password'];
        //delete account
    if ($password === $user['password']) {
        $delete_sql = "DELETE FROM user_data WHERE username = '$uname'";
        if ($con->query($delete_sql) === TRUE) {
            session_destroy();
            header("Location: ../index.php");
            
            exit(); 
        } else {
            echo "Error deleting account: " . $con->error;
        }
    } else {
        echo "<script>alert('Incorrect password. Please try again.');</script>";
    }
}
include '../base/user_header.php';
?>
<link rel="stylesheet" href="user-details.css">
<section class="body-section">
    <div>
        <h2>User Details</h2>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $user['first_name'] ?></td>
                    <td><?php echo $user['last_name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>
                        <div class="password-container">
                            <input type="password" value="<?php echo $user['password'] ?>" class="password-field" readonly>
                            <span class="tick-icon">✔</span>
                        </div>
                    </td>
                    <td><?php echo $user['phone_no'] ?></td>
                    <td>
                        <a href="update-user-details.php"><button class="update-btn">Update</button></a>
                        <button class="remove-btn" onclick="showRemovePopup()">Remove Account</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- pop up box -->
        <div id="remove-popup" class="popup">
            <div class="popup-content">
                <span class="close-popup" onclick="closeRemovePopup()">&times;</span>
                <h2>Remove Account</h2>
                <p>Enter your password to confirm account deletion:</p>
                <form method="POST" id="remove-form">
                    <input type="password" name="password" required placeholder="Your Password">
                    <button type="submit" class="remove-btn" name="remove_account">Confirm Delete</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include '../base/user_footer.php'; ?>
<script>
    // toggle password visibility
    document.querySelectorAll('.tick-icon').forEach(function(tickIcon) {
        tickIcon.addEventListener('click', function() {
            const passwordField = this.parentElement.querySelector('.password-field');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    });

 
    function showRemovePopup() {
        document.getElementById('remove-popup').style.display = 'block';
    }

    
    function closeRemovePopup() {
        document.getElementById('remove-popup').style.display = 'none';
    }

  
    window.onclick = function(event) {
        const popup = document.getElementById('remove-popup');
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    }
</script>
