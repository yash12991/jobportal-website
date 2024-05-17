<?php
// Database configuration
$servername = "localhost";
$username = "yash";
$password = "yps1299";
$dbname = "MYSQL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
