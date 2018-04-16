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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#myTable').DataTable( {
		"processing": true,
        "serverSide": true,
		"lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
        "ajax": "serverfetch.php"
	} );

	$(".form1").click(function(){
		$.get("startcaredit.php");
	});
});
function check(){
    return confirm('Are you sure?');
}

</script>
</head>
<?php include 'adminheader.php';
echo "<h1 id='tab'>All Cars</h1>
<table id=\"myTable\"class=\"abc\"><thead><th class=\"abc\">Id</th><th class=\"abc\">name</th><th class=\"abc\">source</th><th class=\"abc\">price</th><th class=\"abc\">Actions</th></thead><tbody>";
echo "</tbody></table>";

?>
<form action="addcar.php" onclick="return check2()" method="post"><input type="submit"  class="but1" value="Add a car"></form>"
<?php 
include 'footer.php'?>