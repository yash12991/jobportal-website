<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Connect to MySQL database
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "employee";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve the hashed password from the database
    $sql = "SELECT * FROM signup WHERE name = ?";
    $stmt = $conn->prepare($sql);
    
    if(!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    
    $stmt->bind_param("s", $name);
    $stmt->execute();
    
    if($stmt->error) {
        die("Error executing statement: " . $stmt->error);
    }
    
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Fetch the hashed password from the result
        $row = $result->fetch_assoc();
        $password = $row['password']; // Assuming password is in column 4 (index starts from 0)

        // Verify the entered password against the hashed password
        if (password_verify($password, $password)) {
            // Login successful
            $_SESSION['name'] = $name;
            header("Location: resume.html");
            exit();
        }
    }

    // If no matching user or invalid password, display error message
    echo "<script>alert('Invalid username or password');</script>";

    $stmt->close();
    $conn->close();
}
?>
