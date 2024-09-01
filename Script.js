document.addEventListener('DOMContentLoaded', function() {
    // Get the "Shop Now" button by its ID
    const shopButton = document.querySelector('#hero button');

    // Add a click event listener to the button
    shopButton.addEventListener('click', function() {
        alert('Welcome to TechTrendZ! Happy shopping!');
    });
});
// Set data in local storage
localStorage.setItem("username", "JohnDoe");

// Get data from local storage
var username = localStorage.getItem("username");
console.log("Username:", username);

setTimeout(function() {
    alert("Welcome to our website!");
}, 3000); 
