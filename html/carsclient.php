<?php
session_start();
$_SESSION["edit"]="no";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>AllCars</title>
<link rel="stylesheet" type="text/css" href ="carcss.css">
<script src="jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(){
	$(".form1").click(function(){
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
	$password = "1234567";
	$dbname="intern";
	$tablename="cartable";
	echo "<table class=\"abc\"><th class=\"abc\">Id</th><th class=\"abc\">name</th><th class=\"abc\">source</th><th class=\"abc\">price</th><th class=\"abc\">Actions</th>";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM $tablename";
	$result = $conn->query($sql);
	$total=$result->num_rows;
	$page=1;
	$adjacents = 3;
	$limit = 2; 
	
	if(isset( $_GET['page'])){
	$page=$_GET['page'];
	}
	$prev=$page-1;
	$next=$page+1;
	if($page>1)
		$start = ($prev)* $limit;
	else
		$start = 0;	
	$lastpage=ceil($total/$limit);
	$targetpage = "cars.php";
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a class=\"span1\"  href=\"$targetpage?page=$prev\">&lt</a>";
		else
			$pagination.= "<span class=\"disabled\">&lt</span>";	

		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"activepage\">$counter</span>";
				else
					$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"activepage\">$counter</span>";
					else
						$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=$lastpage-1\">$lastpage-1</a>";
				$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"activepage\">$counter</span>";
					else
						$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=$lastpage-1\">$lastpage-1</a>";
				$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"activepage\">$counter</span>";
					else
						$pagination.= "<a class=\"pagebut\"  href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a class=\"span1\"  href=\"$targetpage?page=$next\">&gt</a>";
		else
			$pagination.= "<span class=\"disabled\">&gt</span>";
		$pagination.= "</div>\n";		
	}
	$sql = "SELECT * FROM $tablename LIMIT $start, $limit";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$id1=$row["id"];
			echo "<tr ><td>".$row["id"]."</td><td>". $row["name"]."</td><td>".  $row["image"]."</td><td>".$row["price"].
			"</td><td class='action1'><form action=\"addcar.php\" class='form1' method=\"post\"><input type=\"hidden\" name=\"id1\" value=$id1><input type=\"submit\"  class=\"but\" value=\"Edit\"></form>".
			"<form action=\"delcar.php\" onclick=\"return check()\" method=\"post\"><input type=\"hidden\" name=\"id2\" value=$id1><input type=\"submit\" class=\"but\"  value=\"Delete\"></form>"."</td></tr> ";
		}
	} else {
	}
	echo "</table>";
	echo $pagination;
?>
<form action="addcar.php"  method="post"><input type="submit"  class="but1" value="Add a car"></form>"

<?php include 'footer.php'?>
</html>
