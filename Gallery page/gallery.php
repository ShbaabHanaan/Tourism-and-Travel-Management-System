<!DOCTYPE html>
<html>
<head>
    <title>Destination</title>
    <link rel="stylesheet" type="text/css" href="gallery.css">
    <script src="home.js"></script>
</head>
<body>
<?php include '../base/user_header.php'; ?>
    <div class="heading">
        <h1>Gallery</h1>
        <p>See what's waiting for you on your next island getaway. Savour the unique experiences this island treasure has to offer.</p>
    </div>

    <div class="wrapper">
        <div class="parent">
            <div class="child bg-one" id="openGalleModal">
                <center>Galle</center>
            </div>
        </div> 

        <div class="parent">
            <div class="child bg-two" id="openEllaModal">
                <center>Ella</center>
            </div>
        </div> 
        
        <div class="parent">
            <div class="child bg-three" id="openSigiriyaModal">
                <center>Sigiriya</center>
            </div>
        </div>

        <div class="parent">
            <div class="child bg-four" id="openPollonaruwaModal">
                <center>Pollonaruwa</center>
            </div>
        </div>
        
        <div class="parent">
            <div class="child bg-five" id="openKandyModal">
                <center>Kandy</center>
            </div>
        </div>
        
        <div class="parent">
            <div class="child bg-six" id="openYalaModal">
                <center>Yala</center>
            </div>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modal-body">
                <!-- Dynamic Content from PHP files will be loaded here -->
            </div>
        </div>
    </div>

    <script>
        // Common modal element and close button
        var modal = document.getElementById("modal");
        var span = document.getElementsByClassName("close")[0];
        var modalBody = document.getElementById("modal-body");

        // Function to open the modal and load content dynamically
        function openModal(contentUrl) {
            modal.style.display = "block";
            fetch(contentUrl)
                .then(response => response.text())
                .then(data => {
                    modalBody.innerHTML = data;
                })
                .catch(error => {
                    console.error('Error loading content:', error);
                    modalBody.innerHTML = "<p>Sorry, the content could not be loaded.</p>";
                });
        }

        // Attach click events to each modal trigger
        document.getElementById("openGalleModal").onclick = function() {
            openModal("Galle.php");
        };
        
        document.getElementById("openEllaModal").onclick = function() {
            openModal("Ella.php");
        };

        document.getElementById("openSigiriyaModal").onclick = function() {
            openModal("Sigiriya.php");
        };

        document.getElementById("openPollonaruwaModal").onclick = function() {
            openModal("Pollonaruwa.php");
        };

        document.getElementById("openKandyModal").onclick = function() {
            openModal("Kandy.php");
        };

        document.getElementById("openYalaModal").onclick = function() {
            openModal("Yala.php");
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
