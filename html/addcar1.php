<?php include 'adminheader.php';
$cookie_name="edit";
$name=$image=$price=$id="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="cartable";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: <br> " . $conn->connect_error);
} 
  $id=$_POST["id"];
$name=$_POST["name"];
$price=$_POST["price"];
$im2=$_FILES["fileToUpload"]["name"];
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
	$sql = "INSERT INTO $tablename (id,name,price,im1)VALUES($id,'$name','$price','$im2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
?>
<!DOCTYPE html>
<head>
<title>Add Cars</title>
<link rel="stylesheet" type="text/css" href ="formcss.css">
</head>
<body>
<div class="container"  >
<h1>Add A Car</h1>
<form method="post" name="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" onsubmit="return (formjs())"  align="center"  >
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
<div class="pr">
<input type="file" name="fileToUpload"></div>
</div>
<div class="more" id="afname">
</div><div class="tab">
<div class="p1">
<label >Price:</label></div>
<div class="pr">Rs<input type="Number" name="price" class="tex" value="<?php echo $price?>"></div>
</div>
<div class="more" id="afname">
</div>

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