<!DOCTYPE html>
<html>
<html>
<head>
<title>AllCars</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href ="showcss.css">
<link rel="stylesheet" type="text/css" href ="datatablecss.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="datatablejs.js"></script>
<script>
$(document).ready(function(){
    $('#myTable').DataTable({
	"processing": true,
        "serverSide": true,
		"lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
        "ajax": "users.php"
	});

});
function check(){
    return confirm('Are you sure?');
}
</script>
</head>
<?php include 'chooseheader.php';?>
<h1 id="tab">Registered Users</h1>
<?php

echo "<table class=\"abc\" id='myTable'>";
	echo "<thead><th class=\"abc\">Id</th><th class=\"abc\">firstname</th><th class=\"abc\">lastname</th><th class=\"abc\">address</th><th class=\"abc\">gender</th>
	<th class=\"abc\">language</th><th class=\"abc\">company</th><th class=\"abc\">model</th><th class=\"abc\">email</th><th class=\"abc\">
	password</th><th class=\"abc\">Actions</th></thead><tbody>";
	 
?>
<?php echo"</tbody></table>";
include 'footer.php'?>
</body>

</html>