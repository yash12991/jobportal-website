<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

// Check if file was uploaded without errors
if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] == 0) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["resume"]["name"]);

    // Move uploaded file to the uploads directory
    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["resume"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Error: No file uploaded or file upload error occurred.";
}
?>
