<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href ="dashheader.css">
<meta name="viewport" content="width=device-width,initial-scale=1">
<script rel="text/javascript" src="jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(){
	var count=0;
	$("#logoutbut").click(function(){
		return confirm('Do you want to Logout?Press \'OK\' to logout');
	});
	$("#appear").click(function(){
		count++;
		if(count%2!=0){
			$('#appear1').css({
					'color': '#4285f4'
				});
			$('.dropdown-content').css({
			'display': 'block'
			});
			$('.dropdown-content a').mouseover(function(){
				$(this).css({
					'background-color': '#4285f4',
					'color': 'white'
				});
			});
			$('.dropdown-content a').mouseout(function(){
				$(this).css({
					
					'background-color': 'white',
					'color': '#4285f4'
				});
			});
		}
		else
		{
			$('#appear1').css({
					'color': '#576569'
				});
			$('.dropdown-content').css({
			'display': 'none'
			});
		}			
	});
	
});
</script>
</head>
<body>
<li id="appear" class="l1 dropdown"><a href="#" id="appear1" class="al1" >&nbsp&nbspMy Account</a>
  <div class="dropdown-content">
    <a disabled><?php
if(!empty($_SESSION["user"]))
{
	echo $_SESSION["name"];
}
?>
    <a id="logoutbut" href="logout.php">Logout</a>
  </div>
</li>
</body>
</html>