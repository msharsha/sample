
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="users";
$tablename1="cartable";
$tablename2="company";
$tablename3="models";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE DATABASE $dbname";
$row=$conn->query($sql) ;

$conn = new mysqli($servername, $username, $password,$dbname);
$sql = "create table $tablename (
id INT(32) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname varchar(50)NOT NULL,lastname varchar(50)NOT NULL,address varchar(250)NOT NULL,
gender varchar(50)NOT NULL,language varchar(50)NOT NULL,company varchar(50)NOT NULL,model varchar(50) NOT NULL,
email varchar(50)NOT NULL,password varchar(50)NOT NULL)";
$row=$conn->query($sql) ;

$sql = "create table $tablename1 (id INT(32) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name varchar(50)NOT NULL,image varchar(50)NOT NULL,price varchar(20)NOT NULL)";
$row=$conn->query($sql) ;
$sql = "create table $tablename3 (name varchar(50)NOT NULL,comid varchar(20)NOT NULL)";
$row=$conn->query($sql) ;

$conn->close();
?>




