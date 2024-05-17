<?php
session_start();
// Include database connection file
include("db_connection.php");

// Function to sanitize user inputs
function sanitize_input($input) {
    // Sanitize input data to prevent SQL injection
    return htmlspecialchars(stripslashes(trim($input)));
}

// Function to handle user login
function login($conn, $username, $password) {
    $username = sanitize_input($username);
    $password = sanitize_input($password);

    // Query the database to check if the username and password match
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Authentication successful, set session variables and redirect
        $_SESSION['username'] = $username;
        header("Location: resume_upload.php"); // Redirect to resume upload page
        exit();
    } else {
        $loginError = "Invalid username or password";
        return $loginError;
    }
}

// Function to handle user registration
function register($conn, $name, $email, $mobile, $password) {
    $name = sanitize_input($name);
    $email = sanitize_input($email);
    $mobile = sanitize_input($mobile);
    $password = sanitize_input($password);

    // Insert user data into the database
    $query = "INSERT INTO users (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
    if (mysqli_query($conn, $query)) {
        // Registration successful, set session variables and redirect
        $_SESSION['username'] = $username;
        header("Location: resume_upload.php"); // Redirect to resume upload page
        exit();
    } else {
        $registerError = "Registration failed";
        return $registerError;
    }
}

// Check if the form is submitted for login or registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        // Process login form
        $loginError = login($conn, $_POST['username'], $_POST['password']);
    } elseif (isset($_POST['signup'])) {
        // Process signup form
        $registerError = register($conn, $_POST['name'], $_POST['email'], $_POST['mobile'], $_POST['new-password']);
    }
}
?>
