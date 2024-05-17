<?php
session_start();

// Mock user data (replace with database queries)
$users = [
    ['username' => 'user1', 'password' => 'password1', 'email' => 'user1@example.com'],
    ['username' => 'user2', 'password' => 'password2', 'email' => 'user2@example.com']
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Check if user exists and credentials match
        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
                exit();
            }
        }
        echo "Invalid username or password.";
    } elseif (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])) {
        // Register new user (not implemented in this example)
        echo "User registration not implemented.";
    }
}
?>
