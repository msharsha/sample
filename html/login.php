
<!DOCTYPE html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href ="logincss.css">
</head>

<body>
<!--<div id="header1">

<ul id="li1">
<li class="l1"><a href="temp.html" class="al1">Home</a></li>
<li class="l1"><a href="" class="al1">About</a></li>
<li class="l1"><a href="" class="al1">Contact</a></li>
<li class="l1"><a href="" class="al1">Signup</a></li>
<li class="l1"><a href="login.html" class="al1">Login</a></li>
</ul>

</div>-->
<?php include 'header.php';?>
<h1 id="head">Login</h1>
<div class="cen">
<img src="loginimg.png" alt="hdj">
<form action="val.php" method="POST">
<div class="inp" id="em">
<input class="hei" type="email" name="email" placeholder="Email"/>
</div>
<div class="inp" id="pas">
<input class="hei" type="password" name="password" placeholder="Password"/>
</div>
<div  id="sin">
<input type="submit" class="inp-but" name="signin" value="Sign-in"/>
</div>
</form>
<div class="inp below">
<input type="checkbox"  name="signedin" value="Signin" id="chkbox"/>Stay signedin
<span id="ri8"><a href="contact.php">Need help?</a></span>
</div>
</div>
<div class="tran">
<span class="tran1">Not a Member?<a href="form.php" class="tran1">Register Here</a></span>
</div>
<?php include 'footer.php'?>
</body>