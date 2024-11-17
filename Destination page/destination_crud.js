

function confirmDelete() {
    return confirm("Are you sure you want to delete this destination?");
}


document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    // Check if all the fields are filled
    form.addEventListener('submit', function (event) {
        let name = form.querySelector('input[name="name"]').value;
        let email = form.querySelector('input[name="email"]').value;
        let location = form.querySelector('input[name="location"]').value;

        if (name === '' || email === '' || location === '') {
            alert('Please fill in all the fields.');
            event.preventDefault();  // Prevent form submission
        }
    });
});

function validateName() {
    var nameInput = document.getElementById('name');
    if (nameInput.value.length < 5) {
        nameInput.style.border= '3px solid red';
    } else {
        nameInput.style.border = '3px solid green';
    }}

function validateEmail() {
    var emailInput = document.getElementById('email');
    if (emailInput.value.includes('@')) {
        emailInput.style.border = '3px solid green';
    } else {
        emailInput.style.border = '3px solid red';
    }
}

function validateLocation() {
    var locationInput = document.getElementById('location');
    if (locationInput.value.length < 4) {
        locationInput.style.border = '3px solid red';
    } else {
        locationInput.style.border = '3px solid green';
    }
}
    
