<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	

	// Connect to MySQL database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "contact";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO info (name, email, message)
            VALUES (?, ?, ?)";


	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sss", $name, $email, $message);


	if ($stmt->execute()) {

		$stmt->close();
		$conn->close();

		echo "<script>alert('Your Data is Submitted Successfully'); window.location.href = 'contacted.html';</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>