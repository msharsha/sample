<?php if(!isset($_SESSION)) {
session_start();}
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href ="contcss.css">
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGKxJTJTJxaY3QlbNbZ3ZDeYi29YY2gMQ&callback=myMap"></script>

</head>
<body>

<?php 
include 'chooseheader.php'
?>
<div id="colored">
<div id="over">
<div id="mailbox">
<div id="address">
<h1>Address</h1>
<p>Corporate Headquarters<br>
Achieve3000<br>
1985 Cedar Bridge Ave,<br> Suite 3
Lakewood,<br> NJ 08701</p>
</div>
<div id="contact">
<h1>Contact Number:</h1>
<p>Toll-Free: 888-968-6822<br>
Phone: 732-367-5505<br>
Fax: 732-367-2313 <br>
Email: office@achieve3000.com<br></p>
</div>
</div>
<div id="map">
</div>
<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGKxJTJTJxaY3QlbNbZ3ZDeYi29YY2gMQ&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</div>

</div>
<div id="below">
</div>
<?php include 'footer.php'?>
</body>

</html>