<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="abcd";
$conn = new mysqli($servername, $username, $password, $dbname);
$last_id = $conn->insert_id;
echo $last_id;
?>