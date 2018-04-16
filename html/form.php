
<?php
session_start();
$fname=$lname=$add=$gender=$email=$pass="";
$company="choose";
$langu=[];$Audi=[];$BMW=[];$Mercedes=[];
$id=0;
$name="user";
if(!empty($_SESSION[$name]))
{
	if ($_SESSION["user"]=="admin")
	{	
		$id=$_POST["id1"];
		$servername = "localhost";
		$username = "root";
		$password = "1234567";
		$dbname="intern";
		$tablename="users";
		$model="";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT * FROM $tablename where id=$id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$fname=$row["firstname"];$lname=$row["lastname"];
				$add=$row["address"];
				$gender=$row["gender"];
				$string=$row["language"];$company= $row["company"];
				$model=$row["model"];$email=$row["email"]; $pass=$row["password"];
			}
			if($company=="Audi")
			{
				$Audi=explode(',', $model);
			}
			if($company=="BMW")
			{
				$BMW=explode(',', $model);
			}
			if($company=="Mercedes")
			{
				$Mercedes=explode(',', $model);
			}		
			$langu = explode(',', $string);
		}
	}
}
include 'chooseheader.php';
?>
<!DOCTYPE html>

<head>
<title>Registration form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href ="form1css.css">
<script src="jquery-3.2.1.min.js"></script>
<script >
function choose1(val)
{
	var x=val;
	document.getElementById(x).checked=true;
	/*switch(val)
	{
		case 'Audi A3':document.getElementById('Audi A3').checked=true;break;
		case 'Audi Q3':document.getElementById('Audi Q3').checked=true;break;
		case 'Audi A4':document.getElementById('Audi A4').checked=true;break;
		case 'BMW X1':document.getElementById('BMW X1').checked=true;break;
		case 'BMW X3':document.getElementById('BMW X3').checked=true;break;
		case 'BMW X5':document.getElementById('BMW X5').checked=true;break;
		case 'E-Class':document.getElementById('E-Class').checked=true;break;
		case 'S-Class':document.getElementById('S-Class').checked=true;break;
		case 'C-Class':document.getElementById('C-Class').checked=true;break;
	}*/
}
function checkemail(){
		var emailid=document.getElementById("mail").value;
		if(emailid){
        $.ajax({
		  type: 'post',url: 'checkemail.php',data: {email:emailid,},
		  success: function (response) {
		   $( '#emailavail' ).html(response);
		   if(response=="Available")
			   return true;
		  return true;//false;
		  }
		  })
		}
		else
		{
			$( '#emailavail' ).html("");return false;
		}			
}
function choose(val)
{
	var div;var container1,container,c3;
	var checkbox ;
	var image;
	container=document.getElementById('mod');
	c3=container;
	if(container==null)
	{
		div = document.createElement("div");
		div.className="tab";
		div.id="mod";
		var form=document.getElementById('form1');
		form.appendChild(div);
	}		
	else
	{
		while (container.firstChild) {
		container.removeChild(container.firstChild);
		}
	}
	container=document.getElementById('mod');
	switch(val)
	{
		case "Audi":
					div = document.createElement("div");
					div.className="imagecheckbox";
					div.id="idiv1";
					container.appendChild(div);
					checkbox= document.createElement('input');
					checkbox.type = "checkbox";
					checkbox.name = 'Audi[]';
					checkbox.value = 'Audi A3';
					checkbox.id = 'Audi A3';
					image=document.createElement('img');
					image.src="audi1.jpg";
					image.className="checkimage";
					container1=document.getElementById('idiv1');
					container1.appendChild(checkbox);
					container1.appendChild(image);
					div = document.createElement("div");
					div.className="imagecheckbox";
					div.id="idiv2";
					container.appendChild(div);
					checkbox= document.createElement('input');
					checkbox.type = "checkbox";
					checkbox.name = 'Audi[]';
					checkbox.value = 'Audi Q3';
					checkbox.id = 'Audi Q3';
					image=document.createElement('img');
					image.src="audi2.jpg";
					image.className="checkimage";
					container1=document.getElementById('idiv2');
					container1.appendChild(checkbox);
					container1.appendChild(image);
					div = document.createElement("div");
					div.className="imagecheckbox";
					div.id="idiv3";
					container.appendChild(div);
					checkbox= document.createElement('input');
					checkbox.type = "checkbox";
					checkbox.name = 'Audi[]';
					checkbox.value = 'Audi A4';
					checkbox.id = 'Audi A4';
					image=document.createElement('img');
					image.src="audi3.jpg";
					image.className="checkimage";
					container1=document.getElementById('idiv3');
					container1.appendChild(checkbox);
					container1.appendChild(image);
					
					break;
		case "BMW":
					div = document.createElement("div");
					div.className="imagecheckbox";
					div.id="idiv1";
					container.appendChild(div);
					checkbox= document.createElement('input');
					checkbox.type = "checkbox";
					checkbox.name = 'BMW[]';
					checkbox.value = 'BMW X1';
					checkbox.id='BMW X1';
					image=document.createElement('img');
					image.src="bmw1.jpg";
					image.className="checkimage";
					container1=document.getElementById('idiv1');
					container1.appendChild(checkbox);
					container1.appendChild(image);
					div = document.createElement("div");
					div.className="imagecheckbox";
					div.id="idiv2";
					container.appendChild(div);
					checkbox= document.createElement('input');
					checkbox.type = "checkbox";
					checkbox.name = 'BMW[]';
					checkbox.value = 'BMW X3';
					checkbox.id='BMW X3';
					image=document.createElement('img');
					image.src="bmw2.jpg";
					image.className="checkimage";
					container1=document.getElementById('idiv2');
					container1.appendChild(checkbox);
					container1.appendChild(image);
					div = document.createElement("div");
					div.className="imagecheckbox";
					div.id="idiv3";
					container.appendChild(div);
					checkbox= document.createElement('input');
					checkbox.type = "checkbox";
					checkbox.name = 'BMW[]';
					checkbox.value = 'BMW X5';
					checkbox.id='BMW X5';
					image=document.createElement('img');
					image.src="bmw3.jpg";
					image.className="checkimage";
					container1=document.getElementById('idiv3');
					container1.appendChild(checkbox);
					container1.appendChild(image);
					break;
		case "Mercedes":
					div = document.createElement("div");
					div.className="imagecheckbox";
					div.id="idiv1";
					container.appendChild(div);
					checkbox= document.createElement('input');
					checkbox.type = "checkbox";
					checkbox.name = 'Mercedes[]';
					checkbox.value = 'E-Class';
					checkbox.id='E-Class';
					image=document.createElement('img');
					image.src="mercedes1.jpg";
					image.className="checkimage";
					container1=document.getElementById('idiv1');
					container1.appendChild(checkbox);
					container1.appendChild(image);
					div = document.createElement("div");
					div.className="imagecheckbox";
					div.id="idiv2";
					container.appendChild(div);
					checkbox= document.createElement('input');
					checkbox.type = "checkbox";
					checkbox.name = 'Mercedes[]';
					checkbox.value = 'C-Class';
					checkbox.id='C-Class';
					image=document.createElement('img');
					image.src="mercedes2.jpg";
					image.className="checkimage";
					container1=document.getElementById('idiv2');
					container1.appendChild(checkbox);
					container1.appendChild(image);
					div = document.createElement("div");
					div.className="imagecheckbox";
					div.id="idiv3";
					container.appendChild(div);
					checkbox= document.createElement('input');
					checkbox.type = "checkbox";
					checkbox.name = 'Mercedes[]';
					checkbox.value = 'S-Class';
					checkbox.id='S-Class';
					image=document.createElement('img');
					image.src="mercedes3.jpg";
					image.className="checkimage";
					container1=document.getElementById('idiv3');
					container1.appendChild(checkbox);
					container1.appendChild(image);
					break;
	}
}
function formjs()
{	var rf=0;
	var x=document.forms["form1"]["fname"].value;
	var y=document.forms["form1"]["lname"].value;
	var z=document.forms["form1"]["add"].value;
	var e=document.forms["form1"]["chec"].checked;
	var t=document.forms["form1"]["tel1"].checked;
	var h=document.forms["form1"]["hin1"].checked;	
	var opt=document.forms["form1"]["sel"].value;
	if( x== ""){
	document.getElementById("afname").innerHTML="please fill your first name";
	rf=1;
	}
	else 
	{
		document.getElementById("afname").innerHTML="";
		if(!/^[a-zA-Z]*$/g.test(x)){
			document.getElementById("afname").innerHTML="please fill first name with only alphabets";
		rf=1;
		}
		else
			document.getElementById("afname").innerHTML="";
	}
	if( y== ""){
	document.getElementById("alname").innerHTML="please fill your last name";
	rf=1;
	}
	else
	{
		document.getElementById("alname").innerHTML="";
		if(!/^[a-zA-Z]*$/g.test(y)){
			document.getElementById("alname").innerHTML="please fill last name with only alphabets";
		rf=1;
		}
		else
			document.getElementById("alname").innerHTML="";
	}
	if( z== "")
	{
	document.getElementById("aadd").innerHTML="please fill your address";
	rf=1;
	}
	else
		document.getElementById("aadd").innerHTML="";
	if(document.forms["form1"]["gender"].value == "")
	{
	document.getElementById("agen").innerHTML="please fill your gender";
	rf=1;
	}
	else
		document.getElementById("agen").innerHTML="";
	if(e==false && t==false && h==false)
	{
		document.getElementById("alang").innerHTML="please select atleast one language";
		rf=1;
	}
	else
	{
		document.getElementById("alang").innerHTML="";
	}
	if(opt=="choose"){
	document.getElementById("abr").innerHTML="choose a company";
	rf=1;
	}
	else
	{	
		document.getElementById("abr").innerHTML="";
		var ch1,ch2,ch3;
		if(opt=="Audi")
		{
			ch1=document.getElementById("Audi A3").checked;
			ch2=document.getElementById("Audi Q3").checked;
			ch3=document.getElementById("Audi A4").checked;
			if(ch1 || ch2 || ch3)
				rf=0;
			else{
				document.getElementById("abr1").innerHTML="choose a model";
			rf=1;}
		}
		else if(opt=="BMW")
		{
			ch1=document.getElementById("BMW X1").checked;
			ch2=document.getElementById("BMW X3").checked;
			ch3=document.getElementById("BMW X5").checked;
			if(ch1 || ch2 || ch3)
				rf=0;
			else{
				document.getElementById("abr1").innerHTML="choose a model";
			rf=1;} 
		}
		else
		{
			ch1=document.getElementById("E-Class").checked;
			ch2=document.getElementById("C-Class").checked;
			ch3=document.getElementById("S-Class").checked;
			if(ch1 || ch2 || ch3)
				rf=0;
			else{
				document.getElementById("abr1").innerHTML="choose a model";
			rf=1;}
		}
	}	
	var passwo=document.forms["form1"]["pass"].value;
	if(passwo.length<8)
	{
		document.getElementById("apass").innerHTML="pass atleast 8 characters";
		rf=1;
	}
	else
	{
		if(/^(?=.*?[0-9])(?=.*?[a-z])(?=.*?[A-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]*$/g.test(passwo))
						document.getElementById("apass").innerHTML="";

		else
			{
			document.getElementById("apass").innerHTML="password must contain 1 capital,1 small,1number and 1specialcharacter";
		rf=1;
		}
	}		
	if(rf==1)
		return false;
	return true;
}


 </script>

</head>

<body>

<div class="container"  >
<h1>Registration Form</h1>
<form id="form1" method="post" name="form1" action="insert.php"  onsubmit="return (formjs())"  align="center"  >
<input type="number" name="id" value="<?php echo $id?>" hidden> 
<div class="tab">
<div class="p1">
<label >Firstname:</label></div>
<div class="pr"><input type="text" name="fname" value="<?php echo $fname;?>" class="tex" "/></div>
</div>
<div class="more" id="afname">
</div>
<div class="tab">
<div class="p1"><label>Lastname:</label></div>
<div class="pr"><input type="text" name="lname" value="<?php echo $lname;?>" class="tex" "/> </div>
</div>
<div class="more" id="alname">
</div>
<div class="tab"><div class="p1"><label >Address:</label></div>
<div class="pr"><textarea rows="5" cols="40" name="add" id="add" ><?php echo $add?></textarea></div>
</div>
<div class="more" id="aadd">
</div>
<div class="tab"><div class="p1"><label>Gender:</label></div>
<div class="pr" id="radi"><input type="radio" name="gender" value="Male" id="rad" <?php if (isset($gender) && $gender=="Male") echo "checked";?> />Male
<input type="radio" name="gender" id="rad1" value="Female" <?php if (isset($gender) && $gender=="Female") echo "checked";?>/>Female
</div>
</div>
<div class="more" id="agen">
</div>
<div class="tab"><div class="p1" ><label >Languages:</label></div>
<div class="pr" id="chec11"><input type="checkbox" name="langu[]" value="eng" id="chec" <?php  
{	foreach ($langu as $key => $value) {
if($value=="eng")
echo "checked";}}?> />English
<input type="checkbox" id="hin1" name="langu[]" value="hin" <?php  
{	foreach ($langu as $key => $value) {
if($value=="hin")
echo "checked";}}?> />Hindi
<input type="checkbox" name="langu[]" id="tel1" value="tel" <?php  
{	foreach ($langu as $key => $value) {
if($value=="tel")
echo "checked";}}?> />Telugu
</div>
</div>
<div class="more" id="alang">
</div>

<div class="tab">
<div class="p1">
<label >Email:</label></div>
<div class="pr"><input type="email" name="email" id="mail" onkeyup="checkemail();" value="<?php echo $email;?>"/></div>
</div>
<div id="emailavail" ></div>
<div class="more" id="aemail">
</div>
<div class="tab">
<div class="p1">
<label >Password:</label></div>
<div class="pr"><input type="password" name="pass" id="password" value="<?php echo $pass;?>" /></div>
</div>
<div class="more" id="apass">
</div>

<!--<?php echo $company;?>-->
<div class="tab">
<div class="p1" ><label >Company:</label></div>
<div class="pr"><select name="company" id="sel" onselect="choose(this.value)"onchange="choose(this.value)"> 
<option  selected disabled>choose</option>
<option value="Audi"  <?php if ( $company=="Audi") echo "selected";?> >Audi</option>
<option value="BMW" <?php if ( $company=="BMW") echo "selected";?>>BMW</option>
<option value="Mercedes"  <?php if ( $company=="Mercedes") echo "selected";?>>Mercedes</option>
</select>
</div>
</div>
<div class="more" id="abr">
</div>
<!--<div class="tab">
<div class="p1" ><label >Model:</label></div>
<div class="pr"><select name="model" id="sel1"> 
<option  value="">choose</option>
<?php
/*if($company=="BMW")
{
	echo '<option  value="BMW X1" ';if($model=="BMW X1")echo "selected";echo '>BMW X1</option>';
	echo '<option  value="BMW X3" ';if($model=="BMW X3")echo "selected";echo '>BMW X3</option>';
	echo '<option  value="BMW X5" ';if($model=="BMW X5")echo "selected";echo '>BMW X5</option>';
}	
else if($company=="Audi")
{
	echo '<option  value="Audi A3" ';if($model=="Audi A3")echo "selected";echo '>Audi A3</option>';
	echo '<option  value="Audi Q3" ';if($model=="Audi Q3")echo "selected";echo '>Audi Q3</option>';
	echo '<option  value="Audi A4" ';if($model=="Audi A4")echo "selected";echo '>Audi A4</option>';
}
else if($company=="Mercedes")
{
	echo '<option  value="E-Class" ';if($model=="E-Class")echo "selected";echo '>E-Class</option>';
	echo '<option  value="C-Class" ';if($model=="C-Class")echo "selected";echo '>C-Class</option>';
	echo '<option  value="S-Class" ';if($model=="S-Class")echo "selected";echo '>S-Class</option>';
}	*/
?>
</select>
</div>
</div>-->
<?php
if($company=="BMW")
{
	
	/*echo '<option  value="BMW X1" ';if($model=="BMW X1")echo "selected";echo '>BMW X1</option>';
	echo '<option  value="BMW X3" ';if($model=="BMW X3")echo "selected";echo '>BMW X3</option>';
	echo '<option  value="BMW X5" ';if($model=="BMW X5")echo "selected";echo '>BMW X5</option>';*/
	echo '<script type="text/javascript">choose("BMW");</script>';
	foreach ($BMW as $key => $value){
	echo '<script type="text/javascript">choose1("'.$value.'");</script>';
	}
}	
else if($company=="Audi")
{
	echo '<script type="text/javascript">choose("Audi");</script>';
	foreach ($Audi as $key => $value){
		echo '<script type="text/javascript">choose1("'.$value.'");</script>';
	}
	/*
	echo '<option  value="Audi A3" ';if($model=="Audi A3")echo "selected";echo '>Audi A3</option>';
	echo '<option  value="Audi Q3" ';if($model=="Audi Q3")echo "selected";echo '>Audi Q3</option>';
	echo '<option  value="Audi A4" ';if($model=="Audi A4")echo "selected";echo '>Audi A4</option>';*/
}
else if($company=="Mercedes")
{
	echo '<script type="text/javascript">choose("Mercedes");</script>';
	foreach ($Mercedes as $key => $value){
		echo '<script type="text/javascript">choose1("'.$value.'");</script>';
	}
/*	echo '<option  value="E-Class" ';if($model=="E-Class")echo "selected";echo '>E-Class</option>';
	echo '<option  value="C-Class" ';if($model=="C-Class")echo "selected";echo '>C-Class</option>';
	echo '<option  value="S-Class" ';if($model=="S-Class")echo "selected";echo '>S-Class</option>';*/
}	
?>
<div class="more" id="abr1">
</div>
</div>
<div class="tab">
<div class="pr1">
<input type="submit" id="con"></div>
</div>
</div>
</form>
</div>
<!--
<div id="secdiv" >
<div class="full">
<label class="p12" id="lfname"></label>
<span class="hid" id="fname"></span></div>

<div class="full"><label class="p12" id="llname"></label>
<span class="hid" id="lname"></span></div>
<div class="full"> <label class="p12" id="ladd"></label>
<span class="hid" id="add"></span></div>
<div class="full"><label class="p12"  id="lgen"></label>
<span class="hid" id="gen"></span></div>
<div class="full"><label class="p12"  id="llang"></label>
<span class="hid" id="lang"></span></div>
<div  class="full" ><label class="p12" id="lbr"></label>
<span class="hid" id="br"></span></div>

</div>
</div>
-->
<?php include 'footer.php'?>
</body>
</html>
