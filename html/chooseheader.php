<?php if(!isset($_SESSION)) {
session_start();}
?>
<?php 
$name="user";
if(!empty($_SESSION[$name]))
{
	if($_SESSION[$name]=="admin")
	{	
		include 'adminheader.php';
	}
	else if($_SESSION[$name]=="guest"){
		include 'userheader.php';}
	else
		include 'header.php';
}
else
{
	include 'header.php';
}
?>