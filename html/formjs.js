function formjs()
{	var e=document.forms["form1"]["chec"].checked;
	var t=document.forms["form1"]["tel1"].checked;
	var h=document.forms["form1"]["hin1"].checked;
	var x=document.forms["form1"]["fname"].value;
	var y=document.forms["form1"]["lname"].value;
	var z=document.forms["form1"]["add"].value;
	var opt=document.forms["form1"]["sel"].value;
	var fn=document.forms["form1"]["fname"].value;
	var ln=document.forms["form1"]["lname"].value;
	var add=document.forms["form1"]["add"].value;
	var male=document.forms["form1"]["rad"].checked;
	var female=document.forms["form1"]["rad1"].checked;
	var rf;
	document.getElementById("lfname").innerHTML="Firstname:";
	document.getElementById("llname").innerHTML="Lastname:";
	document.getElementById("ladd").innerHTML="Address:";
	document.getElementById("lgen").innerHTML="Gender:";
	document.getElementById("llang").innerHTML="Languages:";
	document.getElementById("lbr").innerHTML="Branch:";
	
	document.getElementById("fname").innerHTML=fn;
	document.getElementById("lname").innerHTML=ln;
	document.getElementById("add").innerHTML=add;
	if(male==true)
		document.getElementById("gen").innerHTML="Male";
	if(female==true) 
		document.getElementById("gen").innerHTML="Female";
	if(e==true && t==false && h==false)
		document.getElementById("lang").innerHTML="English";
	else if(t==true && e==false && h==false)
		document.getElementById("lang").innerHTML="Telugu";
	else if(h==true && t==false && e==false)
		document.getElementById("lang").innerHTML="Hindi";
	else if(h==true && t==true && e==false)
		document.getElementById("lang").innerHTML="Hindi,Telugu";
	else if(h==true && e==true && t==false)
		document.getElementById("lang").innerHTML="English,Hindi";
	else if(e==true && t==true && h==false)
		document.getElementById("lang").innerHTML="English,Telugu";
	else if(e==true && t==true && e==true)
		document.getElementById("lang").innerHTML="English,Hindi,Telugu";
	document.getElementById("br").innerHTML=opt;
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
	
	document.getElementById("abr").innerHTML="choose a branch";
	document.getElementById("br").innerHTML="";
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
		document.getElementById("apass").innerHTML="";
	}
	if(rf==1)
		return false;
	return true;
}

