<?php
session_start();
$_SESSION["edit"]="no";
?>
<!DOCTYPE html>
<html>
<head>
<title>AllCars</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href ="car12css.css">
<link rel="stylesheet" type="text/css" href ="datatablecss.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="datatablejs.js"></script>
<script>
$(document).ready(function(){
    $('#myTable').DataTable();
});
$(document).ready(function(){
	$(".form1").click(function(){
		alert("The paragraph was clicked.");
		$.get("startcaredit.php");
	});
});
function check(){
    return confirm('Are you sure?');
}
function check1(){
	var d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
	document.cookie = "edit=yes;" + expires + ";";
    return true;
}
function check2(){
	var d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
	document.cookie = "edit=no;" + expires + ";";
    return true;
}
</script>
</head>
<?php include 'adminheader.php';?>
<h1 id="tab">All Cars</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="cartable";
echo "<table id=\"myTable\"class=\"abc\"><thead><th class=\"abc\">Id</th><th class=\"abc\">name</th><th class=\"abc\">source</th><th class=\"abc\">price</th><th class=\"abc\">Actions</th></thead><tbody>";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$id1=$row["id"];
        echo "<tr ><td>".$row["id"]."</td><td>". $row["name"]."</td><td>".  $row["image"]."</td><td>".$row["price"].
		"</td><td><form action=\"addcar.php\" class='form1' method=\"post\"><input type=\"hidden\" name=\"id1\" value=$id1><input type=\"submit\"  class=\"but\" value=\"Edit\"></form>".
		"<form action=\"delcar.php\" class='fright1' onclick=\"return check()\" method=\"post\"><input type=\"hidden\" name=\"id2\" value=$id1><input type=\"submit\" class=\"but\"  value=\"Delete\"></form>"."</td></tr> ";
    }
} else {
}
echo "</tbody></table>";
?>
<form action="addcar.php" onclick="return check2()" method="post"><input type="submit"  class="but1" value="Add a car"></form>"
