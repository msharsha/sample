<?php
		include 'create.php'; 
		if(!isset($_SESSION))
			session_start();
?>
<!DOCTYPE html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href ="tempcss.css">
</head>

<body>
<?php 
include 'chooseheader.php'
?>
<div class="full">

<div class="topleft">
<img src="car1.png" alt="car"  class="image1">
</div>
<div class="top1">
<h1 class="carheading">Cars</h1>
</div>
<div class="rightdiv">
<p id="para">A car is a wheeled, self-powered motor vehicle used for transportation and a product of the automotive industry. Most definitions of the term specify that cars are designed to run primarily on roads, to have seating for one to eight people, to typically have four wheels with tyres, and to be constructed principally for the transport of people rather than goods.</p>
</div>
</div>

<table id="t1">
<tr >
<td class="td2"><a href="" class="al2">model1</a></li></td>
<td class="td2"><a href="" class="al2">model2</a></li></td>
<td class="td2"><a href="" class="al2">model3</a></li></td>
<td class="td2"><a href="" class="al2">model4</a></li></td>
<td class="td2"><a href="" class="al2">model5</a></li></td>
</tr>
<tr >
<td class="td2"><a href="" class="al2">model1</a></li></td>
<td class="td2"><a href="" class="al2">model2</a></li></td>
<td class="td2"><a href="" class="al2">model3</a></li></td>
<td class="td2"><a href="" class="al2">model4</a></li></td>
<td class="td2"><a href="" class="al2">model5</a></li></td>
</tr>
<tr >
<td class="td2"><a href="" class="al2">model1</a></li></td>
<td class="td2"><a href="" class="al2">model2</a></li></td>
<td class="td2"><a href="" class="al2">model3</a></li></td>
<td class="td2"><a href="" class="al2">model4</a></li></td>
<td class="td2"><a href="" class="al2">model5</a></li></td>
</tr>
</table>
<!--<h1 id="fheading">New Arrivals</h1>
<div id="box">
<div class="boxf" >
<div class="upbox">car1</div>
<div class="imgbox"><img src="car2.jpg" alt="" class="timage"></div>
<div class="downbox">rs 50</div>
</div>
<div class="boxf" >
<div class="upbox">car2</div>
<div class="imgbox"><img src="car3.jpg" alt="" class="timage"></div>
<div class="downbox">rs 40</div>
</div>
<div class="boxf" >
<div class="upbox">car3</div>
<div class="imgbox"><img src="car4.jpg" alt="" class="timage"></div>
<div class="downbox">rs 30</div>
</div>
<div class="boxf" >
<div class="upbox">car4</div>
<div class="imgbox"><img src="car5.jpg" alt="" class="timage"></div>
<div class="downbox">rs 20</div>
</div>
</div>-->
<?php 
		include 'newarrival.php';
		if(!empty($_SESSION[$name]))
		{
			if($_SESSION[$name]=="admin")
			{	
		
				include 'adhome.php';
			}
		}
		include 'footer.php'
?>
</body>
</html>