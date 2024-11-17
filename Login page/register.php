<?php   'include base/user_header.php' ?>
<link rel="stylesheet" href="register.css">
<div class="body-content" >
    <form id="registrationForm" action="registerprocess.php" method="post">
    <div class="form-container">
    
        <div class="form-section">
            <h3>Personal Details</h3>
            
                <label for="username">Username</label>
                <input type="text" id="username" name="user_name" placeholder="Your username" required>

                <div class="horizontal-group">
                    <div>
                        <label >First Name</label>
                        <input type="text" id="firstName" name="first_Name" placeholder="Your first name" required>
                    </div>
                    <div>
                        <label >Last Name</label>
                        <input type="text" id="lastName" name="last_Name" placeholder="Your last name" required>
                    </div>
                </div>

                <label >Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label >Email</label>
                <input type="email" id="email" name="email" placeholder="Your email" required>

                <div class="input-container">
                    <label >Password</label>
                    <input type="password" id="password" name="password" placeholder="Your password" required>
                    <span class="toggle-password" id="togglePassword">&#128065;</span>
                </div>

                <div class="input-container">
                    <label >Re-enter Password</label>
                    <input type="password" id="rePassword" name="rePassword" placeholder="Re-enter your password" required>
                    <span class="toggle-password" id="toggleRePassword">&#128065;</span>
                </div>
           
        </div>

        <div class="form-section">
            <h3>Contact Details</h3>
            
            <div class="horizontal-group">
                <div>
                    <label >Address Line 1</label>
                    <input type="text" id="address1" name="addressline1" placeholder="Address line 1" required>
                </div>
            </div>
            <div class="horizontal-group">
                <div>
                    <label >Address Line 2</label>
                    <input type="text" id="address2" name="addressline2" placeholder="Address line 2">
                </div>
            </div>

            <div class="horizontal-group">
                <div>
                    <label >Zip Code</label>
                    <input type="number" id="zip" name="zip" placeholder="Zip code" required>
                </div>
                <div>
                    <label >Province</label>
                    <input type="text" id="province" name="province" placeholder="Enter your province" required>
                </div>
            </div>

            <label>Phone No.</label>
            <input type="tel" id="phone" name="phone" placeholder="Your phone number" required>

            <div class="button-container">
                <button type="submit" form="registrationForm">Sign Up</button>
                <div class="notice">Already have an account? <a href="logins/client-login.php" style="color: #00796b; text-decoration: underline;">Sign In</a></div>
            </div>
        </div>
    </div>
</form>
</div class="body-content">
<script>document.getElementById('registrationForm').addEventListener('submit', function (e) {
    const password = document.getElementById('password').value;
    const rePassword = document.getElementById('rePassword').value;

    if (password !== rePassword) {
        e.preventDefault();
        alert('Passwords do not match. Please re-enter the passwords.');
    }
});

document.querySelectorAll('.toggle-password').forEach(function (toggle) {
    toggle.addEventListener('click', function () {
        const input = this.previousElementSibling;
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);
        this.textContent = type === 'password' ? '\u{1F441}' : '\u{1F576}';
    });
});</script>


</body>
</html>
