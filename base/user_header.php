<!DOCTYPE html>
<head>
    <title>Destinex</title>
    <link rel="stylesheet" href="user_header_footer_styles.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <nav class="navbar">
        <a href="#" class="logo">
            <i class="fas fa-plane-departure"></i> DESTINEX
        </a>
        <div class="nav-links">
            <a href="../home.php" >Home</a>
            <a href="../base/pages/about.html" >About Us</a>
            <a href="../base/pages/services.html" >Services</a>
            <a href="../gallery/gallery.php" >Gallery</a>
            <a href="../base/pages/reviews.php" >Reviews</a>
            <a href="../contact_page/contactus.php" >Contact Us</a>
        </div>
        <div class="right-side">
            <a href="../logins/logout.php"><button class="btn-signin" id="signin-btn">Log Out</button></a>
          
        </div>
    </nav>
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
    display: block; 
    padding: 10px 20px; 
    text-decoration: none; 
    color: white; 
    background-color: #444; 
    border-radius: 5px; 
    transition: background-color 0.3s; 
}

.nav-links a:hover {
    background-color: #555; 
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
    background-color: #1E88E5; 
    color: white;
}

.btn-signin:hover {
    background-color: #1565C0; 
}



/* home section */
.home {
    position: relative;
    overflow: hidden;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}


/* footer bar */
footer {
    background-color: #444;
    color: white;
    padding: 15px 0;
    margin-bottom: 0;
    position: ;
    bottom: 0;
    width:100%;
}


.footer-content {
    display: flex;
    justify-content: space-around; 
    flex-wrap: wrap; /* Allow content to wrap on smaller screens */
    text-align: center; 
}


.footer-left, 
.footer-center, 
.footer-right {
    margin: 1rem; /* Add space around each section */
    flex: 1; /* Allow each section to take up equal space */
    text-align: center;
}


.footer-links {
    list-style: none; 
    padding: 0; 
}

.footer-links li {
    margin: 0.5rem 0; /* space between list items */
}

.footer-links a {
    color: white; 
    text-decoration: none; 
}

.footer-links a:hover {
    text-decoration: underline; 
}


.social-media a {
    color: white; 
    margin: 0 5px; /* Space between social icons */
}

.social-media a:hover {
    text-decoration: underline; 
}
</style>


    

