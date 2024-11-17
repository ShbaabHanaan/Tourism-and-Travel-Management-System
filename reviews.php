<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinex - Reviews</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <section class="reviews" id="reviews-section">
        <h1><b><center>Customer Reviews</center></b></h1>
        
        <div class="rating-overview">
            <h2>Star Ratings</h2>
            <div class="rating-summary">
                <div class="rating-item">
                    <span>5 Stars</span>
                    <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                    <span class="rating-count">(50)</span>
                </div>
                <div class="rating-item">
                    <span>4 Stars</span>
                    <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                    <span class="rating-count">(30)</span>
                </div>
                <div class="rating-item">
                    <span>3 Stars</span>
                    <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> 
                    <span class="rating-count">(15)</span>
                </div>
                <div class="rating-item">
                    <span>2 Stars</span>
                    <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                    <span class="rating-count">(5)</span>
                </div>
                <div class="rating-item">
                    <span>1 Star</span>
                    <i class="fas fa-star"></i>
                    <span class="rating-count">(3)</span>
                </div>
            </div>
        </div>

        <div class="sort-options">
            <label for="sort">Sort by:</label>
            <select id="sort" name="sort">
                <option value="relevant">Most Relevant</option>
                <option value="recent">Most Recent</option>
            </select>
        </div>

        <div class="review-container">
            <div class="review-item">
                <img src="pages/images/profile1.jpg" alt="Alex Khan" class="profile-pic">
                <div class="review-content">
                    <p class="review-text">"Had an amazing experience! The tours were well organized and the guides were friendly."</p>
                    <p class="review-author">- John Doe</p>
                </div>
            </div>
            <div class="review-item">
                <img src="pages/images/profile2.jpg" alt="Jane Smith" class="profile-pic">
                <div class="review-content">
                    <p class="review-text">"Affordable prices and great customer service. Will definitely book again!"</p>
                    <p class="review-author">- Jane Smith</p>
                </div>
            </div>
            <div class="review-item">
                <img src="pages/images/profile3.jpg" alt="Emily Johnson" class="profile-pic">
                <div class="review-content">
                    <p class="review-text">"A fantastic adventure! Everything exceeded my expectations."</p>
                    <p class="review-author">- Emily Johnson</p>
                </div>
            </div>
            <div class="review-item">
                <img src="pages/images/profile4.jpg" alt="Michael Brown" class="profile-pic">
                <div class="review-content">
                    <p class="review-text">"I loved the food and drinks included in the package. Highly recommend!"</p>
                    <p class="review-author">- Michael Brown</p>
                </div>
            </div>
            <div class="review-item">
                <img src="pages/images/profile5.jpg" alt="Anna White" class="profile-pic">
                <div class="review-content">
                    <p class="review-text">"The hotel selection was excellent, and the excursions were unique."</p>
                    <p class="review-author">- Anna White</p>
                </div>
            </div>
            <div class="review-item">
                <img src="pages/images/profile6.jpg" alt="David Green" class="profile-pic">
                <div class="review-content">
                    <p class="review-text">"Customer support was very helpful in planning our itinerary."</p>
                    <p class="review-author">- David Green</p>
                </div>
            </div>
        </div>

        <div class="pagination">
            <a href="#" class="page-number active">1</a>
            <a href="#" class="page-number">2</a>
        </div>


        <div class="review-container" style="display:none;">
            <div class="review-item">
                <img src="images/profile7.jpg" alt="Sara Blue" class="profile-pic">
                <div class="review-content">
                    <p class="review-text">"The booking process was smooth and the trip was unforgettable."</p>
                    <p class="review-author">- Sara Blue</p>
                </div>
            </div>
            <div class="review-item">
                <img src="images/profile8.jpg" alt="James Black" class="profile-pic">
                <div class="review-content">
                    <p class="review-text">"Best travel experience I've ever had. Will recommend to everyone!"</p>
                    <p class="review-author">- James Black</p>
                </div>
            </div>
            <div class="review-item">
                <img src="images/profile9.jpg" alt="Another User" class="profile-pic">
                <div class="review-content">
                    <p class="review-text">"A great way to explore new places. Highly satisfied!"</p>
                    <p class="review-author">- Another User</p>
                </div>
            </div>
        </div>

        <div class="submit-review">
            <h2>Submit Your Review</h2>
            <form action="#" method="post">
                <label for="review-text">Review:</label>
                <textarea id="review-text" placeholder="Write your review here..." required></textarea>
                <label for="review-name">Your Name:</label>
                <input type="text" id="review-name" placeholder="Your Name" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
<style>.rating-overview {
    margin: 2rem auto;
    text-align: center;
    background-color: #f9f9f9;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.1);
    max-width: 500px;
}

.rating-summary {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-top: 1rem;
}

.rating-item {
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 0.5rem 0;
}

.rating-item span {
    font-size: 1.2rem;
    transition: color 0.3s ease;
}

.rating-item span:hover {
    color: #28a745;
}

.rating-count {
    font-size: 1.2rem;
    color: #777;
    margin-left: auto;
    padding-left: 1rem;
}

.sort-options {
    text-align: right;
    margin: 1rem 0;
    padding: 0 1rem;
}

.sort-options label {
    font-weight: bold; 
}

.sort-options select {
    padding: 0.5rem;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #ddd;
    transition: background-color 0.3s ease;
}

.sort-options select:hover {
    background-color: #e9ecef; 
}

.review-container {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    margin-top: 2rem;
    padding: 1rem;
}

.review-item {
    background-color: #f9f9f9;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.1);
}

.review-text {
    font-size: 1.2rem;
    color: #333;
    transition: color 0.3s ease, transform 0.3s ease;
}

.review-text:hover {
    color: #28a745; 
    transform: scale(1.05); 
}

.review-author {
    font-size: 1rem;
    color: #777;
    text-align: right;
    margin-top: 0.5rem;
    transition: font-weight 0.3s ease;
}

.review-author:hover {
    font-weight: bold; 
}

.submit-review {
    margin-top: 3rem;
    padding: 1rem;
    background-color: #f1f1f1;
    border-radius: 10px;
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.1);
    max-width: 600px;
    margin: 3rem auto;
}

.submit-review h2 {
    text-align: center;
    margin-bottom: 1rem;
}

.submit-review form {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.submit-review textarea,
.submit-review input {
    width: 100%;
    padding: 0.75rem;
    border-radius: 5px;
    border: 1px solid #ddd;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.submit-review textarea:hover,
.submit-review input:hover {
    border-color: #28a745;
}

.submit-review button {
    padding: 0.75rem;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 1rem;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.submit-review button:hover {
    background-color: #0056b3; 
    transform: scale(1.05); 
}

.pagination {
    text-align: center;
    margin-top: 2rem;
}

.pagination .page-number {
    display: inline-block;
    padding: 0.5rem 1rem;
    margin: 0 0.25rem;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    border: 2px solid #0056b3; 
    text-decoration: none;
    transition: background-color 0.3s, border-color 0.3s;
}

.pagination .page-number:hover {
    background-color: #0056b3;
    border-color: #003f7f; 
}
.profile-pic {
    width: 70px; 
    height: 70px;
    border-radius: 50%; 
    object-fit: cover; 
}
.pagination .page-number.active {
    background-color: #0056b3;
    border-color: #003f7f; 
}

</style>
    <script>
        const reviewContainers = document.querySelectorAll('.review-container');
        const paginationLinks = document.querySelectorAll('.page-number');

        let currentPage = 0;

        function showPage(page) {
            reviewContainers.forEach((container, index) => {
                container.style.display = index === page ? 'flex' : 'none';
            });
        }

        paginationLinks.forEach((link, index) => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                currentPage = index;
                showPage(currentPage);
                paginationLinks.forEach((l) => l.classList.remove('active'));
                link.classList.add('active');
            });
        });

    </script>
</body>
</html>
