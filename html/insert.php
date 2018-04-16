
<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname="intern";
$tablename="users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: <br> " . $conn->connect_error);
} 

$cookie_name="user";
$firstnamegs=$_POST["fname"];
$lastnamegs=$_POST["lname"];
$address1=$_POST["add"];
$gen=$_POST["gender"];
$lang=implode(',', $_POST["langu"]);
$company1=$_POST["company"];
$mod=implode(',', $_POST["$company1"]);
//$mod=$_POST["model"];
$emails=$_POST["email"];
$pass=$_POST["pass"];
if(isset($_COOKIE[$cookie_name]))
	
{echo'isset';if ($_COOKIE[$cookie_name]=="pcarribean8")
{echo'isset1';
$id=$_POST["id"];
//echo $id.$firstnamegs.$lastnamegs.$address1;
$sql="UPDATE $tablename SET firstname='$firstnamegs' , lastname='$lastnamegs' , address='$address1', gender='$gen'
, language='$lang', company='$company1', model='$mod', email='$emails', password='$pass' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
else{
	/*$last_id = $conn->insert_id;
	$sql = "INSERT INTO $tablename (id,firstname  ,lastname,address  ,gender  ,language, company,model,email,password,status )
	VALUES($last_id+1,'$firstnamegs','$lastnamegs','$address1','$gen','$lang','$company1','$mod','$emails','$pass',0)";*/
	$sql = "INSERT INTO $tablename (firstname  ,lastname,address  ,gender  ,language, company,model,email,password,status )
	VALUES('$firstnamegs','$lastnamegs','$address1','$gen','$lang','$company1','$mod','$emails','$pass',0)";
if ($conn->query($sql) === TRUE) {
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'pcarribean8@gmail.com';          // SMTP username
$mail->Password = '9290939844'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;
$mail->Subject = 'Verify your email at Moneymanager';
$mail->setFrom('pcarribean8@gmail.com', 'Moneymanager');
$mail->addReplyTo('pcarribean8@gmail.com', 'Moneymanager');
$mail->addAddress( $emails);   // Add a recipient
$mail->addCC('pcarribean8@gmail.com');
$mail->addBCC('pcarribean8@gmail.com');
$mail->isHTML(true);
echo $emails;
$bodyContent = '<h1>Verification link</h1>';
$bodyContent .= '<p>Please click the following button to activate your account<form action="localhost/intern/html/changestatus.php" method="post"><input type="hidden"
name="email"  value="'.$emails.'" ><input type="submit" style="border:1px solid #4CAF50;color:white;background-color:#4CAF50;padding:5px" value="Verify"></p>';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	header('Location:insuccess.php');
}
   // echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

/*$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table class=\"abc\">";
	echo "<th>Id</th><th>Firstname</th><th>Lastname</th><th>address</th><th>gender</th><th>language</th><th>company</th><th>email</th><th>password</th>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr ><td>".$row["id"]."</td><td>". $row["firstname"]."</td><td>".  $row["lastname"]."</td><td>".$row["address"]."</td><td>"
		. $row["gender"]."</td><td>". $row["language"]."</td><td>". $row["company"]."</td><td>". $row["email"] ."</td><td>". $row["password"] ."</td></tr> ";
    }echo "</table>";
} else {
    echo "0 results <br>";
}*/

$conn->close();
?>
