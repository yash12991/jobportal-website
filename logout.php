<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Optional: You can include CSS for styling the message -->
    <style>
        .message {
            text-align: center;
            margin-top: 100px;
            font-size: 24px;
            color: green;
        }
    </style>
</head>
<body>
    <div class="message">Successfully logged out.</div>

    <script>
        // Wait for 3 seconds before redirecting
        setTimeout(function() {
            // Redirect the user to google.com
            window.location.href = "https://www.google.com";
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>
</body>
</html>
