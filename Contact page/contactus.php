

    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="contactus.css"> 

<?php include '../base/user_header.php'; ?>
<section class="Contact">
    <div class="container">
        <h2>Contact Us</h2>
        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Send us a message</h3>
                <form action="contactinsert.php" method="post">
                    <div class="form-group">
                        <input type="date" name="date" placeholder="Select Date" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Your number" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Your Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="" disabled selected>Select Your Gender:</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                            <option value="prefer-not-to-say">Prefer Not to Say</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" name="age" placeholder="Your age" required>
                    </div>
                    <div class="form-group">
                        <textarea name="address" placeholder="Your address" required></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your message" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="contactMethod">Preferred Contact Method:</label>
                        <div>
                            <div style="display: inline-block; margin-right: 10px;">
                                <label for="contact-email">Email</label>
                            </div>
                            <div style="display: inline-block;">
                                <input type="radio" id="contact-email" name="contactMethod" value="email" required>
                            </div>

                            <div style="display: inline-block; margin-right: 10px;">
                                <label for="contact-email">Phone</label>
                            </div>
                            <div style="display: inline-block;">
                                <input type="radio" id="contact-email" name="contactMethod" value="email" required>
                            </div>

                        </div>
                    </div>
                    <button type="submit">Send message</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><b>Working Time:</b><br> 
                   Monday to Friday: 9:00 AM - 6:00 PM<br>
                   Saturday: 10:00 AM - 4:00 PM<br>
                   Sunday: Closed</p>
                <p><i class="fas fa-phone"></i> Main: +1-234-567-890</p>
                <p><i class="fas fa-phone"></i> Support: +1-234-567-891</p>
                <p><i class="fas fa-envelope"></i> destinex@info.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Matara, Sri Lanka</p>
            </div>
        </div>
    </div>
</section>


<?php include '../base/user_footer.php'; ?>