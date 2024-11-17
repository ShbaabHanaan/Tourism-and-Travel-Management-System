

<?php
    require 'admin_header1.php';
 ?>

 
    <title>Admin Login</title>
    <style>
        .Body-content {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #72bf6a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #276221;
        }
        .contact-link {
            margin-top: 15px;
            display: block;
            color: #007bff;
            text-decoration: none;
        }
        .contact-link:hover {
            text-decoration: underline;
        }
    </style>

<section class="Body-content">
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="admin-login-process.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="../contact_page/contactus.php" class="contact-link">Contact Us</a>
    </div>
</section>

<?php
    require 'admin_footer1.php';
 ?>


