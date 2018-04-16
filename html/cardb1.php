<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="models";
$conn = new mysqli($servername, $username, $password, $dbname);
$company=$_GET["company"];
$sql = "SELECT name FROM $tablename where comid='$company' ";

$result = $conn->query($sql);	
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);
	/*if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$id1=$row["name"];
		echo '<option value=$id1>'.$id1.'</option>';
    }
}
echo 'dcsfedz';
echo 'sdefsd';*/
echo json_encode($outp);

/*$doc = new DOMDocument();
$doc->load("formajq.php");
	echo'succes';
else
	echo 'uwefs'; 
$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
	if(strcmp($item,'select')==0)
  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
echo $doc->getElementById('sel1')->tagName;*/
?>