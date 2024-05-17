<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection
    include("index.php");

    // Check if the form is for login
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Dummy authentication for demonstration purposes
        if ($username === "user" && $password === "password") {
            // Set session variables
            $_SESSION['username'] = $username;
            // Redirect to member page upon successful login
            header("Location: member.html");
            exit();
        } else {
            $loginError = "Invalid username or password";
        }
    } 
}
?>
