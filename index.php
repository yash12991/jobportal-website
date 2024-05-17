<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "employee";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO signup (name, email, phone, password)
            VALUES (?, ?, ?, ?)";


	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ssss", $name, $email, $phone, $password);


	if ($stmt->execute()) {

		$stmt->close();
		$conn->close();

		echo "<script>alert('Your Data is Submitted Successfully'); window.location.href = 'resume.html';</script>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
?>