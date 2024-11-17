<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    
<style>* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #eef2f5;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  background-color: white;
  padding: 40px;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  width: 390px;
  text-align: center;
  transition: transform 0.3s ease;
}

.login-container:hover {
  transform: scale(1.05);
}

h2 {
  margin-bottom: 30px;
  color: #333;
  font-weight: bold;
  font-size: 28px;
}

.input-group {
  margin-bottom: 20px;
  position: relative; /* Ensure proper positioning of the password icon */
}

.input-group label {
  display: block;
  margin-bottom: 8px;
  color: #555;
  font-size: 14px;
}

.input-group input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ddd;
  border-radius: 6px;
  font-size: 15px;
  background-color: #f9f9f9;
}

.input-group input:focus {
  outline: none;
  border-color: #007bff;
  background-color: #fff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.input-group .toggle-password {
position: absolute;
right: 12px;
top: calc(50% + 10px); /* Move the icon 4px down */
transform: translateY(-50%);
cursor: pointer;
}


.button-group {
  margin-top: 15px;
}

button {
  width: 100%;
  padding: 12px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

/* Line and "or" after the login button */
.separator {
  display: flex;
  align-items: center;
  margin: 20px 0;
  color: #888;
  font-size: 14px;
}

.separator::before,
.separator::after {
  content: '';
  flex: 1;
  border-top: 1px solid #ddd;
}

.separator::before {
  margin-right: 10px;
}

.separator::after {
  margin-left: 10px;
}

/* Additional buttons */
.button-group + .button-group {
  margin-top: 15px;
}

button[type="button"] {
  background-color: #28a745;
}

button[type="button"]:hover {
  background-color: #218838;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
  .login-container {
      width: 90%;
  }
}</style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="tourguide-login-process.php" method="POST">
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
                <button type="button" onclick="window.location.href='client-login.php'">Login as a Client</button>
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

</body>
</html>
