<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>GET DETAILS</title>
<link rel="stylesheet" href="css/getstyle.css">
<style>
body:before{
width:100%;
background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS8n53zs6kYER654xhhEfYoU7mI1B2K1XMbuiYck2piuE9SonJd");
background-size:cover;
content:"";
position:fixed;
top:0;
left:0;
z-index:-100;
}

</style>
</head>
<body >
<h1>GET DETAILS</h1>
<p>
We provide the best of medical evacuation and air ambulance services in India. We provide retrieval and repatriations of critically ill people and injured to and from India and abroad. Our emergency assistance and medical air ambulance services are managed by highly experienced and qualified personnel 24 hours a day, 365 days a year. We have a 24 hours Command and Control Center manned by Doctors to provide advice and assistance to those in need.
</p>
<div id="data">
<h2>WELCOME 
<?php 
echo $_SESSION['fname'] 

 ?>
</h2>
</div>
<p>
 Your appointment as been made. Reach our nearest branch as fast as possible.
 FOR AMBULANCE ,CALL OUR EMERGENCY HELPLINE NUMBER:9012 
 </p>
<?php
session_destroy();
?>
</body>
</html>