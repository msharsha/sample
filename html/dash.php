<?php 
		if(!isset($_SESSION)) {
		session_start();}
		
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href ="dashcss.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<?php 
		include 'chooseheader.php';
		$name="user";
		if(!empty($_SESSION[$name])){
			if($_SESSION[$name]=="guest"){
				//$carsnames=[["Audi",[['Audi A3',"audi1.jpg"]]],[""],[]];
				$servername = "localhost";
				$username = "root";
				$password = "password";
				$dbname="intern";
				$tablename="users";
				$tablename1="models";
				$model="";
				$name=$_SESSION["name"];
				$i=0;
				$conn = new mysqli($servername, $username, $password, $dbname);
				$sql = "SELECT * FROM $tablename where email=\"$name\"";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$company= $row["company"];
						$model=$row["model"];
					}
					$model=explode(',', $model);
					foreach ($model as $key => $value){
						$sql = "SELECT * FROM $tablename1 where name=\"$value\"";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()) {
						if($i%4==0)
						{	
							if($i!=0)
								echo '</div>';
							echo '<div class="box">';
						}
						$src= $row["img"];
						echo '<div class="boxf">
						<div class="imgbox"><img src="'.$src.'" alt="" class="timage"></div>
						<div class="downbox">'.$value.'</div>
						</div>';
						$i=$i+1;
						}
					}
					echo '</div>';
				}
			}
		}
?>

<?php include 'footer.php'?>
</html>