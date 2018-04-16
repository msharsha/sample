<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="users";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: <br> " . $conn->connect_error);
} 
$email=$_POST["email"];
$sql="SELECT * FROM $tablename where email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "Email is already taken";
	}
	else
		echo "Available";
	$conn->close();
?>	