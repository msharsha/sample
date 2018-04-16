<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$id=$_POST["id"];
$field=$_POST["field"];
$value=$_POST["value"];
$sql = "UPDATE $tablename set $field='$value' where id=$id";
if ($conn->query($sql) === TRUE) {
    //echo "updated successfully";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location:show.php');
?>