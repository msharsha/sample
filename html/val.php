<?php
	// Start the session
	session_start();
?>
<?php
		$servername = "localhost";
		$username = "root";
		$password = "1234567";
		$dbname="intern";
		$tablename="users";
		$admin="manishabachu1@gmail.com";
		$adpass="abcd";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: <br> " . $conn->connect_error);
		} 
		$email=$_POST["email"];
		$password=$_POST["password"];
		if(strcmp($admin,$email)==0 && strcmp($password,$adpass)==0){
			$_SESSION["user"]="admin";
			$_SESSION["name"]=$admin;
			header('Location:home.php');
		}
		else{
			$sql="SELECT * FROM $tablename where email='$email' and password='$password'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()){
					if($row["status"]==1){
						$cookie_value = "guest";
							$_SESSION["user"]="guest";
							$_SESSION["name"]=$email;
						header('Location:dash.php');
					}
					else{
					 $cookie_value = "not";
						$_SESSION["user"]="not";
					header('Location:verifyfirst.php');
					}
				}
			}
			 else {
				header('Location:login.php');
			}
		}
		$conn->close();
?>
