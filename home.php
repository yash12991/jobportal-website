<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to the Job Portal</h1>
        <nav>
            <ul>
                <li><a href="C:\xampp\htdocs\ecom\home.php">Home</a>Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Explore Job Listings</h2>
        <div id="job-listings">
            <!-- Job listings will be dynamically generated here -->
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
