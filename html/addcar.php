<?php include 'adminheader.php';
session_start();
$cookie_name="edit";
$name=$im2=$price=$id="";
echo $_SESSION["edit"];
//if(isset($_COOKIE[$cookie_name])){
	if ($_SESSION["edit"]=="yes"){	
		$id=$_POST["id1"];
		$servername = "localhost";
		$username = "root";
		$password = "password";
		$dbname="intern";
		$tablename="cartable";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT * FROM $tablename where id=$id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$id=$row["id"];$name=$row["name"];$im2=$row["image"];$price=$row["price"];
			}
		}
	}
//}
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Add Cars</title>
<link rel="stylesheet" type="text/css" href ="formcss.css">
</head>
<body>
<div class="container"  >
<h1>Add A Car</h1>
<form method="post" name="form1" action="qwe.php" enctype="multipart/form-data" onsubmit="return (formjs())"  align="center"  >
<div class="tab">
<div class="p1">
<label >Id:</label></div>
<div class="pr"><input type="number" name="id" class="tex" value="<?php echo $id?>"></div>
</div>
<div class="more" id="afname">
</div>
<div class="tab">
<div class="p1">
<label >Carname:</label></div>
<div class="pr"><input type="text" name="name" class="tex" value="<?php echo $name?>"></div>
</div>
<div class="more" id="afname">
</div>
<div class="tab">
<div class="p1">
<label >Image:</label></div>
<div class="pr" id="filesel">
<p id="filesel1">Select files</p>
<input id="opa" type="file" name="fileToUpload" value="<?php echo $im2?>"></div>
</div>
<div class="more" id="afname">
</div><div class="tab">
<div class="p1">
<label >Price:</label></div>
<div class="pr">&nbsp&nbsp&nbsp&nbspRs<input type="Number" name="price" class="tex" value="<?php echo $price?>"></div>
</div>
<div class="more" id="afname">
</div>
<div class="tab">
<div class="p1">
</div>
<div class="pr">
<input type="submit" id="con"></div>
</div>
</div>

</form>
</div>

<?php include 'footer.php'?>
</body>
</html>