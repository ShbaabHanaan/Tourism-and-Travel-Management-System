<!DOCTYPE html>
<head>
    <title>Destinex</title>
    <link rel="stylesheet" href="user_header_footer_styles.css">
    <!-- Font Awesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <style>

/* Navbar Styling */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem 2rem;
    background-color: #444;
    flex-wrap: wrap;
    position: relative;
    z-index: 10;
}

.logo {
    font-size: 2.5rem;
    font-weight: bold;
    text-decoration: none;
    color: rgb(102, 136, 40);
    padding: 0.5rem 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.logo i {
    font-size: 2.2rem;
    color: #FFD54F;
}

.logo:hover {
    background: linear-gradient(45deg, #4CAF50, #FFD54F, #FF6F61);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.nav-links {
    display: flex;
    gap: 1rem; /* Space between boxes */
}

.nav-links a {
    display: block; /* Make links block elements */
    padding: 10px 20px; /* Add padding inside the box */
    text-decoration: none; /* Remove underline */
    color: white; /* Text color */
    background-color: #444; /* Box background color */
    border-radius: 5px; /* Rounded corners */
    transition: background-color 0.3s; /* Smooth transition for hover effect */
}

.nav-links a:hover {
    background-color: #555; /* Change color on hover */
}

.right-side {
    display: flex;
    gap: 1rem;
}

.btn-signin,
.btn-signup {
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
}

.btn-signin {
    background-color: #1E88E5; /* Sign In button color */
    color: white;
}

.btn-signin:hover {
    background-color: #1565C0; /* Sign In hover color */
}



/* Home Section */
.home {
    position: relative;
    overflow: hidden;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}


/* Footer Styling */
footer {
    background-color: #444;
    color: white;
    padding: 15px 0;
    margin-bottom: 0;
    position: ;
    bottom: 0;
    width:100%;
}

/* Footer Content Layout */
.footer-content {
    display: flex;
    justify-content: space-around; /* Evenly distribute the content */
    flex-wrap: wrap; /* Allow content to wrap on smaller screens */
    text-align: center; /* Center the text in each section */
}

/* Footer Sections */
.footer-left, 
.footer-center, 
.footer-right {
    margin: 1rem; /* Add space around each section */
    flex: 1; /* Allow each section to take up equal space */
    text-align: center;
}

/* Footer Links */
.footer-links {
    list-style: none; /* Remove bullet points */
    padding: 0; /* Remove padding */
}

.footer-links li {
    margin: 0.5rem 0; /* Space between links */
}

.footer-links a {
    color: white; /* Link color */
    text-decoration: none; /* Remove underline */
}

.footer-links a:hover {
    text-decoration: underline; /* Underline on hover */
}

/* Social Media Links */
.social-media a {
    color: white; /* Social media link color */
    margin: 0 5px; /* Space between social icons */
}

.social-media a:hover {
    text-decoration: underline; /* Underline on hover */
}
</style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="#" class="logo">
            <i class="fas fa-plane-departure"></i> DESTINEX
        </a>
        <div class="nav-links">
            <a href="index.php" >Home</a>
            <a href="../pages/about.html" >About Us</a>
            <a href="../pages/services.html" >Services</a>
            <a href="#" >Gallery</a>
            <a href="#" >Reviews</a>
            <a href="#" >Contact Us</a>
        </div>
        <div class="right-side">
            <button class="btn-signin" id="signin-btn">Sign In</button>
          
        </div>
    </nav>



    

