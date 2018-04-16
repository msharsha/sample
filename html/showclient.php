<!DOCTYPE html>
<html>
<html>
<head>
<title>AllCars</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href ="showcss.css">
<link rel="stylesheet" type="text/css" href ="datatablecss.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#myTable').DataTable();
});
function check(){
    return confirm('Are you sure?');
}
</script>
</head>
<?php include 'adminheader.php';?>
<h1 id="tab">Registered Users</h1>
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="users";
echo "<table class=\"abc\" id='myTable'>";
	echo "<thead><th class=\"abc\">Id</th><th class=\"abc\">firstname</th><th class=\"abc\">lastname</th><th class=\"abc\">address</th><th class=\"abc\">gender</th>
	<th class=\"abc\">language</th><th class=\"abc\">company</th><th class=\"abc\">model</th><th class=\"abc\">email</th><th class=\"abc\">
	password</th><th class=\"abc\">Actions</th></thead><tbody>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id1=$row["id"];
        echo "<tr ><td>".$row["id"]."</td><td>". $row["firstname"]."</td><td>".  $row["lastname"]."</td><td>".$row["address"]."</td><td>"
		. $row["gender"]."</td><td>". $row["language"]."</td><td>". $row["company"]."</td><td>". $row["model"]."</td><td>".
		$row["email"] ."</td><td>". $row["password"] ."</td><td><form action=\"form.php\" method=\"post\"><input type=\"hidden\" name=\"id1\" value=$id1><input type=\"submit\"  class=\"but\" value=\"Edit\"></form>".
		"<form action=\"del.php\" onclick=\"return check()\" method=\"post\"><input type=\"hidden\" name=\"id2\" value=$id1><input type=\"submit\" class=\"but\"  value=\"Delete\"></form>"."</td></tr> ";
    }
} else {
}
echo "</tbody></table>";
?>
<!--<body>
<form align="center" action="edit.php" method="post">
<div class="box">
<label>Id:</label>
<input type="number" name="id"/>
</div>
<br>
<div class="box">
<label>Update:</label>
<select name="field" id="sel" >
<option selected disabled>choose</option>
<option value="firstname">firstname</option>
<option value="lastname">lastname</option>
<option value="address">address</option>
<option value="gender">gender</option>
<option value="language">language</option>
<option value="branch">branch</option>
<option value="email">email</option>
<option value="password">password</option>
</select>

</div>
<br>
<div class="box">
<label>Value:</label>
<input type="text" name="value"/>
</div>
<br>
<div class="box">
<input type="submit"  value="Edit">
</div>
</form>
</body>-->
<?php include 'footer.php'?>
</html>