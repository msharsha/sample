<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname="intern";
$tablename="cartable";
$conn = new mysqli($servername, $username, $password, $dbname);
$id=$_POST["id2"];
$sql = "DELETE FROM $tablename WHERE id=$id";
$conn->query($sql) ;
header('Location:cars.php');
?>
