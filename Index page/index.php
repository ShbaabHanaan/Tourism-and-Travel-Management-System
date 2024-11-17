<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinex</title>
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</head>
<body>
   
    <nav class="navbar">
        <a href="#" class="logo">
            <i class="fas fa-plane-departure"></i> DESTINEX
        </a>
        <div class="nav-links">
            <a href="#" onclick="showHome()">Home</a>
            <a href="#" onclick="loadAboutUs()">About Us</a>
            <a href="#" onclick="loadServices()">Services</a>
            <a href="gallery/gallery.php" >Gallery</a>
            <a href="#" onclick="loadReviews()">Reviews</a>
            <a href="contact_page/contactus.php" >Contact Us</a>
        </div>
        <div class="right-side">
        <a  href="logins/client-login.php"><button class="btn-signin" id="signin-btn" >Sign In</button></a>
            <a  href="register.php"><button class="btn-signup" id="signup-btn">Sign Up</button></a>
        </div>
    </nav>

    <section class="home" id="home">
        <video class="video-slide" src="videos/1.mp4" autoplay muted loop></video>
        <video class="video-slide" src="videos/2.mp4" autoplay muted loop></video>
        <div class="content">
            <h1>Travel With.<br>Us</h1>
            <p>Experience the beauty of nature and the adventure of travel.</p>
            <a href="register.php">Get Started</a>
        </div>
    </section>
    <div id="about-container" style="display: none;"></div>
    <div id="services-placeholder" style="display: none;"></div>
    <div id="reviews-placeholder" style="display: none;"></div>
    <div id="gallery-placeholder" style="display: none;"></div>
    <div id="contact-placeholder" style="display: none;"></div>

    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <h3>DESTINEX</h3>
                <p>&copy; 2024 DESTINEX. All rights reserved.</p>
            </div>
            <div class="footer-center">
                <ul class="footer-links">
                    <li><a href="pages/privacypolicy.html">Privacy Policy</a></li>
                    <li><a href="pages/terms&condition.html">Terms of Service</a></li>
                    <li><a href="pages/FAQ.html">FAQ</a></li>
                    <li><a href="contact_page/contactus.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <p>Follow us:</p>
                <div class="social-media">
                    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
