
<link rel="stylesheet" href="client-login.css">
<div class="body-content">
    <div class="login-container">
        <h2>Login</h2>
        <form action="client-login-process.php" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <!-- Toggle password visibility icon -->
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>
            <div class="button-group">
                <button type="submit">Login</button>
            </div>
            <!-- Separator with "or" -->
            <div class="separator">or</div>

            <div class="button-group">
                <button type="button" onclick="window.location.href='admin-login.php'">Login as Admin</button>
            </div>
            <div class="button-group">
                <button type="button" onclick="window.location.href='../register.php'">Register</button>
            </div>

        </form>
    </div>

    <script>
        // Toggle password visibility function
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var icon = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.textContent = "🙈"; // Change icon to hide
            } else {
                passwordField.type = "password";
                icon.textContent = "👁️"; // Change icon back to show
            }
        }
    </script>
</div>
</body>
</html>
