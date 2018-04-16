
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="cartable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: <br> " . $conn->connect_error);
} 


$name=$_POST["name"];
$image=$_POST["image"];
$price1=$_POST["add"];
$sql = "INSERT INTO $tablename (name,image,price )VALUES('$name','$image','$price1')";
$conn->query($sql);
/*if ($conn->query($sql) === TRUE) {
	echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header('Location:show.php');*/
$conn->close();
header('Location:home.php');
?>