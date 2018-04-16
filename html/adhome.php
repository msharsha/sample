<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname="intern";
$tablename="cartable";
echo '<h1 id="fheading">Old Arrivals</h1>';
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM $tablename ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$i=0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($i>=4)
		{	
			if($i%4==0)
			{	
				if($i!=0)
					echo '</div>';
				echo '<div class="box">';
			}
			$name=$row["name"];
			echo '<div class="boxf" >
				<div class="upbox">'.$name.'</div>
				<div class="imgbox"><img src="'.$row["image"].'" alt="" class="timage"></div>
				<div class="downbox">'.$row["price"].'</div></div>';
			}
		$i=$i+1;
	}
}
echo '</div>';
?>
