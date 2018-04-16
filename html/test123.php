<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname="intern";
$tablename="abcd";
$conn = new mysqli($servername, $username, $password, $dbname);
$last_id = $conn->insert_id;
echo $last_id;
?>
