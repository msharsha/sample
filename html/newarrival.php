
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="cartable";
echo '<h1 id="fheading">New Arrivals</h1><div class="box box1">';
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM $tablename ORDER BY id DESC LIMIT 4";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<div class="boxf" >
<div class="upbox">'.$row["name"].'</div>
<div class="imgbox nimg"><img src="'.$row["image"].'" alt="" class="timage"></div>
<div class="downbox">'.$row["price"].'</div></div>';
	}
}
echo '</div>';
?>





