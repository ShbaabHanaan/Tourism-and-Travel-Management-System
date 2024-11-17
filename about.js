
const headers = document.querySelectorAll('.accordion-header');
headers.forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none"; 
        } else {
          
            document.querySelectorAll('.accordion-content').forEach(c => c.style.display = 'none');
            content.style.display = "block";
        }
    });
});

let index = 0;
const testimonials = document.querySelectorAll('.testimonial');

function showTestimonials() {
    testimonials.forEach((testimonial, i) => {
        testimonial.classList.remove('active');
    });
    testimonials[index].classList.add('active'); 
    index = (index + 1) % testimonials.length; 
}

setInterval(showTestimonials, 3000); 
showTestimonials(); 
