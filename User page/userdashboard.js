let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");

let logOutLink = document.querySelector("#log_out_link");

btn.onclick = function() {
    sidebar.classList.toggle("active");
}

searchBtn.onclick = function() {
    sidebar.classList.toggle("active");
}

logOutLink.onclick = function(event) {
    event.preventDefault(); // Prevent the default link behavior

    // Confirm logout
    if (confirm("Are you sure you want to logout?")) {
        // If user clicks OK, redirect to login page
        window.location.href = "login.html";
    } else {
        // If user clicks Cancel, remove the profile image
        let profileImage = document.querySelector(".user_details img");
        if (profileImage) {
            profileImage.remove();
        }
    }
}
