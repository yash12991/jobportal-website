<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file is uploaded without errors
    if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] == 0) {
        $targetDir = "uploads/"; // Directory where the file will be uploaded
        $targetFile = $targetDir . basename($_FILES["resume"]["name"]); // Path to save the uploaded file

        // Check if the file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, the file already exists.";
        } else {
            // Try to upload the file
            if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile)) {
                echo "The file " . htmlspecialchars(basename($_FILES["resume"]["name"])) . " has been uploaded.";
                // Here you can perform additional actions like saving the file path to a database
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file uploaded or there was an error uploading the file.";
    }
} else {
    // If the form is not submitted, redirect to the upload form page
    header("Location: upload_form.php");
    exit();
}
?>
