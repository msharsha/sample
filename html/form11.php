
<?php
$fname=$lname=$add=$gender=$email=$pass="";
$company="choose";
$langu=[];
$id=0;
$cookie_name="user";
if(isset($_COOKIE[$cookie_name]))
{if ($_COOKIE[$cookie_name]=="admin")
{	
include 'adminheader.php';
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
	$langu = explode(',', $string);
}

}
}
else
	include 'header.php';
?>
<!DOCTYPE html>

<head>
<title>Registration form</title>
<link rel="stylesheet" type="text/css" href ="formcss.css">
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname="intern";
$tablename="list1";

/*if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		
       echo $row["car1"];
    }
}*/
echo '<script >
function choose(val)
{
	document.getElementById(\'sel1\').options.length = 0;		
	var optn = document.createElement("OPTION");
	optn.text = \'choose\';
	optn.value = \'\';
	document.getElementById(\'sel1\').options.add(optn);
	var val1;
	switch(val)
	{
		
		case "Audi":';
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);	
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo 'val1='.$row["car1"].';
      var x = document.getElementById(\'sel1\');
	   var optn = document.createElement("option");
					optn.text;
					console.log(optn.text);
					optn.value = val1;
					x.add(optn,x[0]);';
    }
}

					
	echo	'break;case "BMW":
					optn = document.createElement("OPTION");
					optn.text = \'BMW X1\';
					optn.value = \'BMW X1\';
					document.getElementById(\'sel1\').options.add(optn);
					optn = document.createElement("OPTION");
					optn.text = \'BMW X3\';
					optn.value = \'BMW X3\';
					document.getElementById(\'sel1\').options.add(optn);
					optn = document.createElement("OPTION");
					optn.text = \'BMW X5\';
					optn.value = \'BMW X5\';
					document.getElementById(\'sel1\').options.add(optn);
					break;
		case "Mercedes":
					optn = document.createElement("OPTION");
					optn.text = \'E-Class\';
					optn.value = \'E-Class\';
					document.getElementById(\'sel1\').options.add(optn);
					optn = document.createElement("OPTION");
					optn.text = \'C-Class\';
					optn.value = \'C-Class\';
					document.getElementById(\'sel1\').options.add(optn);
					optn = document.createElement("OPTION");
					optn.text = \'S-Class\';
					optn.value = \'S-Class\';
					document.getElementById(\'sel1\').options.add(optn);
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
		document.getElementById("abr").innerHTML="";
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


 </script>';?>

</head>

<body>

<div class="container"  >
<h1>Registration Form</h1>
<form method="post" name="form1" action="insert.php"  onsubmit="return (formjs())"  align="center"  >
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
<div class="pr"><input type="text" name="lname" value="<?php echo $lname;?>" class="tex" "/></div>
</div>
<div class="more" id="alname">
</div>
<div class="tab"><div class="p1"><label >Address:</label></div>
<div class="pr"><textarea rows="5" cols="40" name="add"  ><?php echo $add?></textarea></div>
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
<!--<?php echo $company;?>-->
<div class="tab">
<div class="p1" ><label >Company:</label></div>
<div class="pr"><select name="company" id="sel" onchange="choose(this.value)"> 
<option  selected disabled>choose</option>
<option value="Audi" <?php if ( $company=="Audi") echo "selected";?> >Audi</option>
<option value="BMW" <?php if ( $company=="BMW") echo "selected";?>>BMW</option>
<option value="Mercedes" <?php if ( $company=="Mercedes") echo "selected";?>>Mercedes</option>
</select>
</div>
</div>
<div class="tab">
<div class="p1" ><label >Model:</label></div>
<div class="pr"><select name="model" id="sel1"> <?php echo $model?> 
<option  selected value="">choose</option>
</select>
</div>
</div>
<div class="more" id="abr">
</div>
<div class="tab">
<div class="p1">
<label >Email:</label></div>
<div class="pr"><input type="email" name="email" id="mail" value="<?php echo $email;?>"/></div>
</div>
<div class="more" id="aemail">
</div>
<div class="tab">
<div class="p1">
<label >Password:</label></div>
<div class="pr"><input type="password" name="pass" id="password" value="<?php echo $pass;?>" /></div>
</div>
<div class="more" id="apass">
</div>
<div class="tab">
<div class="p1">
</div>
<div class="pr">
<input type="submit" id="con"></div>
</form>
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
--><div  class="asd" ></div>
</body>
</html>
