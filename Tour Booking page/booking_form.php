<?php

session_start();

require '../base/user_header.php';

?>

<link rel="stylesheet" href="booking_form.css">

 
    <div id="popup" class="popup">
        <div class="popup-content">
            <span id="close-popup" class="close">&times;</span>
            <h3>Notification</h3>
            <p id="popup-message"></p>
            <button id="popup-ok">OK</button>
        </div>
    </div>

  
    <section class="booking-form">
        <h2>Book Your Tour</h2>
        <form id="bookingForm" action="create_bookings.php" method="post">
            <label for="name">Full Name</label>
            <input name="name" type="text" id="name" placeholder="Your Full Name">

            <label for="email">Email</label>
            <input name="email" type="email" id="email" placeholder="Your Email">

            <label for="phone">Phone</label>
            <input name="phone" type="text" id="phone" placeholder="Your Phone Number">

            <label for="address">Address</label>
            <input name="address" type="text" id="address" placeholder="Your Address">
            
            <label for="travelers">Number of Travelers</label>
            <input name="travelers" type="number" id="travelers" placeholder="Number of Travelers">
            
            <label for="date">Travel Dates</label>
            <input name="tour_date" type="date" id="date">

            <label for="Tour Destination">Tour Destination</label>
            <select name="travel_destination" >
                <option value="text" disable selected>Destination</option>
                <option value="Ella">Ella</option>
                <option value="Polonnaruwa">Polonnaruwa</option>
                <option value="Sigiriya">Sigiriya</option>
                <option value="Galle">Galle</option>
                <option value="Yala">Yala</option>
                <option value="Kandy">Kandy</option>
            </select>


            <label for="tour-plan">Tour Package</label>
            <select name="tour_plan" id="tour-plan">
                <option value="" disabled selected>Select a Plan</option>
                <option value="light">Light Plan</option>
                <option value="basic">Basic Plan</option>
                <option value="premium">Premium Plan</option>
            </select>
            
            <label for="special-requests">Special Requests</label>
            <textarea name="special_requests" id="special-requests" placeholder="Any special requests?" rows="4"></textarea>
            
            <input type="reset" value="Reset">
            <input type="submit" name="submit" value="Confirm Booking">
        </form>
    </section>


    <script>

        function showPopup(message, type) {

            const popupMessageElement = document.getElementById("popup-message");
            const popupHeadingElement = document.querySelector(".popup-content h3");

  
            popupMessageElement.innerHTML = message;

   
            switch (type) {
                case 'error':
                    popupHeadingElement.innerHTML = "Error";
                    popupMessageElement.style.color = "#d9534f";
                    break;
                case 'success':
                    popupHeadingElement.innerHTML = "Success";
                    popupMessageElement.style.color = "#5cb85c";
                    break;
                default:
                    popupHeadingElement.innerHTML = "Notification";
                    popupMessageElement.style.color = "#000";
                    break;
            }


            document.getElementById("popup").style.display = "flex";
            history.replaceState(null, document.title, window.location.pathname);
        }


        document.getElementById("popup-ok").onclick = function () {
            document.getElementById("popup").style.display = "none";
        }


        document.getElementById("close-popup").onclick = function () {
            document.getElementById("popup").style.display = "none";
        }

        const urlParams = new URLSearchParams(window.location.search);
        const popupMessage = urlParams.get('popupMessage');
        const popupType = urlParams.get('popupType');

        if (popupMessage) {
            showPopup(popupMessage, popupType);
        }
    </script>
    <script src="booking_crud.js"></script>
</body>
</html>
