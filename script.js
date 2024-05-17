document.addEventListener('DOMContentLoaded', function() {
    // Get the logout link element
    var logoutLink = document.getElementById('logout-link');

    // Add a click event listener to the logout link
    logoutLink.addEventListener('click', function(event) {
        // Prevent the default behavior of the link
        event.preventDefault();

        // Show a confirmation popup
        var confirmLogout = confirm("Are you sure you want to logout?");

        // If the user confirms logout, redirect to the logout page
        if (confirmLogout) {
            window.location.href = "logout.php";
        }
    });
});
