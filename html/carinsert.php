
<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
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
print_r($_FILES);
 /*   foreach ($_FILES as $key => $value) {
		echo "dkbsds";
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }*/
$im2=$_FILES["fileToUpload"]["name"];
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check == false) {
	
}
echo $im2;
$sql = "INSERT INTO $tablename (id,name,price,im1)VALUES($id,'$name','$price','$im2')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

/*$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table class=\"abc\">";
	echo "<th>Id</th><th>Firstname</th><th>Lastname</th><th>address</th><th>gender</th><th>language</th><th>company</th><th>email</th><th>password</th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr ><td>".$row["id"]."</td><td>". $row["firstname"]."</td><td>".  $row["lastname"]."</td><td>".$row["address"]."</td><td>"
		. $row["gender"]."</td><td>". $row["language"]."</td><td>". $row["company"]."</td><td>". $row["email"] ."</td><td>". $row["password"] ."</td></tr> ";
    }echo "</table>";
} else {
    echo "0 results <br>";
}*/

$conn->close();
?>
