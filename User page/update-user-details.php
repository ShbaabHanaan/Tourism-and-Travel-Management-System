<?php 


session_start();

if(isset($_SESSION["username"])){
  
  
}else{
  header("Location: ../logins/client-login.php");
}

require '../config.php';

$uname = $_SESSION['username'];
$sql = "SELECT ID ,first_name, last_name,password , email, phone_no From user_data where username = '$uname'";

    $result = $con->query($sql);
    $user = $result->fetch_assoc();

if(!$result){
  die("Invalid query: ".$connection->error);

}
?>


    <link rel="stylesheet" href="update-user-details.css">

    <div class="form-container">
        <h2>Update Your Details</h2>
        <form id="registrationForm" method="POST" action="update-user-details-process.php">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName" value="<?php echo $user['first_name'] ?>" required>

            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName" value="<?php echo $user['last_name'] ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $user['email'] ?>" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" value="<?php echo $user['phone_no'] ?>" required pattern="[0-9]{10}">

            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="<?php echo $user['password'] ?>" required>
                <span class="toggle-password" id="togglePassword">&#128065;</span> <!-- eye icon -->
            </div>

            <div class="input-container">
                <label for="rePassword">Re-enter Password</label>
                <input type="password" id="rePassword" name="rePassword" placeholder="Re-enter your password" required>
                <span class="toggle-password" id="toggleRePassword">&#128065;</span> <!-- eye icon -->
            </div>

            <div class="button-container">
                <button type="submit" class="save-btn">Save</button>
                <button type="button" class="cancel-btn" onclick="window.location.href='user-details.php'">Cancel</button>
            </div>
        </form>
    </div>

    <script>
document.getElementById('registrationForm').addEventListener('submit', function (e) {
    // check re password
    const password = document.getElementById('password').value;
    const rePassword = document.getElementById('rePassword').value;

    if (password !== rePassword) {
        e.preventDefault(); 
        alert('Passwords do not match. Please re-enter the passwords.');
        return;
    }

    // confirmation box for submitting
    const confirmation = confirm('Are you sure you want to save the changes?');
    if (!confirmation) {
        e.preventDefault(); 
    }
});

// password visibility
document.querySelectorAll('.toggle-password').forEach(function (toggle) {
    toggle.addEventListener('click', function () {
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        this.textContent = type === 'password' ? '\u{1F441}' : '\u{1F576}'; //change eye icon
    });
});

        
    </script>

</body>
</html>
