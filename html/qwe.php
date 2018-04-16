<?php
		if(!isset($_SESSION)) 
			session_start();
		$servername = "localhost";
		$username = "root";
		$password = "password";
		$dbname="intern";
		$tablename="cartable";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: <br> " . $conn->connect_error);
		} 
		$id=$_POST["id"];
		$name=$_POST["name"];
		$price=$_POST["price"];
		$cookie_name="edit";
		$im2=$_FILES["fileToUpload"];
		if($_SESSION["edit"]=="yes"){
			$sql = "update $tablename set name='$name',price='$price' where id=$id";
			$conn->query($sql);
			$a=4;
			$im2=$_FILES["fileToUpload"]["name"];
			if($im2!='')
			{
				echo 'notempty';
				$sql = "update $tablename set image='$im2'where id=$id";
				$conn->query($sql);
			}
		}
		else{
			$im2=$_FILES["fileToUpload"]["name"];
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$sql = "INSERT INTO $tablename (id,name,price,image)VALUES($id,'$name','$price','$im2')";
				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully <br>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
		header('Location:cars.php');
?>