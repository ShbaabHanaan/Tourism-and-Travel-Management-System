<?php
session_start();
include '../base/user_header.php';

if(!isset($_SESSION["username"])){
  
    header("Location: ../logins/client-login.php");
}
?>


    <title>Packages - Destinex</title>
    <link rel="stylesheet" href="packages.css">
    <script src="packages.js"></script>




    <section class="packages" id="packages">
        <div class="rectangle-box">
            <h1>Discover Our Exclusive Travel Packages</h1>
            <h3>Curated experiences tailored to your adventure</h3>
        </div>

        <div class="packages-container">
            <!-- Light Plan -->
            <div class="package-box">
                <h3>Light Plan</h3>
                <p style="text-align:justify;hyphens: auto;">Perfect for budget-conscious travelers, our Light Plan offers all the essential services you need for a simple and enjoyable trip.</p>
                
                <div class="buttons">
                    <button class="btn" id="view-btn" onclick="openPopup('popup1')">View</button>
                    </div><br>
                    <div class="buttons">
                    <a href="/destinex/tour_booking_crud/booking_form.php" class="btn book-btn">Book Now</a>
                </div>
            </div>
            <!-- The Popup -->
            <div id="popup1" class="popup">
                <div class="popup-content">
                    <h4>Features</h4>
                    
                    <ul type="square">
                        <li>Affordable accommodations and transportation.</li>
                        <li>Preplanned itineraries with group tours.</li>
                        <li>Basic meal options and standard support.</li>
                    </ul>
                    
                    <p><strong>Ideal For:</strong> Budget travelers, solo travelers, students, and backpackers.</p>
                    <button class="close-btn" onclick="closePopup('popup1')">Close</button>
                </div>
            </div>

             <!-- Basic Plan -->
             <div class="package-box">
                <h3>Basic Plan</h3>
                <p style="text-align:justify;hyphens: auto;">Our Basic Plan strikes a balance between comfort and cost, offering additional amenities and more flexibility for your travels.</p>           
                
                <div class="buttons">
                    <button class="btn" id="view-btn" onclick="openPopup('popup2')">View</button>
                    </div><br>
                    <div class="buttons">
                    <a href="/destinex/tour_booking_crud/booking_form.php" class="btn book-btn">Book Now</a>
                </div>
            </div>
            <!-- The Popup -->
            <div id="popup2" class="popup">
                <div class="popup-content">
                    <h4>Features</h4>
                    <ul type="square">
                        <li>Comfortable mid-range accommodations.</li>
                        <li>Semi-customizable itineraries with select guided tours.</li>
                        <li>Breakfast and some dinners included.</li>
                    </ul>
                    <p><strong>Ideal For:</strong> Families, couples, and travelers seeking more comfort without luxury pricing.</p>
                    <button class="close-btn" onclick="closePopup('popup2')">Close</button>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="package-box">
                <h3>Premium Plan</h3>
                <p style="text-align:justify;hyphens: auto;">Experience the best with our Premium Plan, designed for those who desire luxury, exclusivity, and personalized service throughout their journey.</p>
                
                <div class="buttons">
                    <button class="btn" id="view-btn" onclick="openPopup('popup3')">View</button>
                    </div><br>
                    <div class="buttons">
                    <a href="/destinex/tour_booking_crud/booking_form.php" class="btn book-btn">Book Now</a>
                </div>
            </div>
            <!-- The Popup -->
            <div id="popup3" class="popup">
                <div class="popup-content">
                    <h4>Features</h4>
                    <ul type="square">
                        <li>Luxurious accommodations and premium transportation.</li>
                        <li>Fully customizable itineraries with private tours.</li>
                        <li>All-inclusive meals and 24/7 concierge support.</li>
                    </ul>
                    <p><strong>Ideal For:</strong> Luxury travelers, honeymooners, business executives, and those celebrating special occasions.</p>
                    <button class="close-btn" onclick="closePopup('popup3')">Close</button>
                </div>
            </div>

        
        </div>
    </section>
<?php  include 'user_footer.php'?>