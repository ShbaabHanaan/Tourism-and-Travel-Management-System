
function showHome() {
    document.getElementById('about-container').style.display = 'none';
    document.getElementById('services-placeholder').style.display = 'none';
    document.getElementById('reviews-placeholder').style.display = 'none';
    document.getElementById('gallery-placeholder').style.display = 'none';
    document.getElementById('contact-placeholder').style.display = 'none';

    const videos = document.querySelectorAll('.video-slide');
    videos.forEach((video, index) => {
        video.style.display = index === 0 ? 'block' : 'none'; // Show the first video
    });

    window.scrollTo(0, 0);
}


function showHome() {
    hideAllSections();
    const videos = document.querySelectorAll('.video-slide');
    videos.forEach((video, index) => {
        video.style.display = index === 0 ? 'block' : 'none'; // Show the first video
    });
    window.scrollTo(0, 0);
}

function hideAllSections() {
    document.getElementById('about-container').style.display = 'none';
    document.getElementById('services-placeholder').style.display = 'none';
    document.getElementById('reviews-placeholder').style.display = 'none';
    document.getElementById('gallery-placeholder').style.display = 'none';
    document.getElementById('contact-placeholder').style.display = 'none';
}

function loadContent(containerId, url) {
    hideAllSections();
    document.getElementById(containerId).style.display = 'block';
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById(containerId).innerHTML = data;
            window.scrollTo(0, document.body.scrollHeight);
        })
        .catch(error => console.error(`Error loading ${containerId}:`, error));
}

function loadAboutUs() {
    loadContent('about-container', 'pages/about.html');
}

function loadServices() {
    loadContent('services-placeholder', 'pages/services.html');
}

function loadReviews() {
    loadContent('reviews-placeholder', 'pages/reviews.php');
}



