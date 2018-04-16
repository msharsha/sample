<?php
if(!isset($_SESSION)) 
	session_start();
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname="intern";
$tablename="users";
$cookie_name = "user";
$email=$_POST["email"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: <br> " . $conn->connect_error);
} 
$email="manishabachu2@gmail.com";
$sql="UPDATE $tablename set status=1 where email='$email' ";
if($conn->query($sql)===TRUE){
	$_SESSION["user"]="guest";
	include 'chooseheader.php';
	include'footer.php';
	header('refresh: 100; url=dash.php');
}
$conn->close();
?>
