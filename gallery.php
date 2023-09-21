<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>gallery</title>
<link rel="stylesheet" href="css/headerNfooter.css">
<link rel="stylesheet" href="css/gallery.css">
</head>

<body>
<header>
<nav>
<div class="logo">
<img src="pictures/ssju-logo.png" alt="logo">
</div>
<div class="logotext">
<img src="pictures/textLogo.svg" alt="logo">
</div>

<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="branches.php">Branches</a></li>
<li><a href="courses.php">Courses</a></li>
<li><a href="faculty.php">Faculties</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>

</nav>

</header>
<main>
<div class="container">
<div class="content">
<div class="contenthead">
<img src="pictures/ssju-logo.png" alt="logo" width="100vh" height="90vh"> <u>
<h1>GALLERY:</h1>
</u><br>
</div>
<div class="contentsmallhead">
<h3><u>SOBAN SINGH JEENA(SSJ) UNIVERSITY:
</u></h3><br>
<div class="effect" style="background:rgb(70, 7, 7)">

<div class="head">

<marquee style="font-size:28px;"> <a style="color:#fdee67"> UPPER CAMPUS VIEW OF SSJ CAMPUS
ALMORA:</a></marquee>
</div>
</div>
<div class="box1">
<img src="pictures/out2.png" alt="picture" style="width: 30%">
<img src="pictures/OUT4.jpg" alt="picture" style="width: 30%;">
<img src="pictures/out3.png" alt="picture" style="width: 30%">

</div>
<hr>
<div class="effect" style="background:rgb(70, 7, 7)">

<div class="head">

<marquee style="font-size:28px;"> <a style="color:#fdee67"> CHEMISTRY AND YOGA DEPARTMENT OF
SSJ CAMPUS ALMORA:</a></marquee>
</div>
</div>
<div class="box2">
<img src="pictures/chem.png" alt="picture" style="width: 45%;">
<img src="pictures/yog.png" alt="picture" style="width: 45%;">
</div>
<hr>

<div class="effect" style="background:rgb(70, 7, 7)">

<div class="head">

<marquee style="font-size:28px;"> <a style="color:#fdee67"> BFA (BECHELOR OF FINE
ARTS)DEPARTMENT OF
SSJ CAMPUS ALMORA:</a></marquee>
</div>
</div>
<div class="box3">
<img src="pictures/arts.png" alt="picture" style="width: 45%;">
<img src="pictures/BFA2.jpg" alt="picture" style="width: 45%">

</div>
<hr>
<div class="effect" style="background:rgb(70, 7, 7)">

<div class="head">

<marquee style="font-size:28px;"> <a style="color:#fdee67"> BCA(BECHELOR IN COMPUTER
APPLICATION) DEPARTMENT OF
SSJ CAMPUS ALMORA:</a></marquee>
</div>
</div>
<div class="box4">
<img src="pictures/comp5.jpg" alt="picture" style="width: 45%;">
<img src="pictures/comp2.jpeg" alt="picture" style="width: 45%;">

</div>
<hr>
</div>
</div>
</main>
<footer class="flex-all-centre">
<img src="Pictures/ssju-logo.png" alt="picture" width="10%" height="90%"><br>
<div class="footertext">
<img src="Pictures/textLogo.svg" alt="picture"><br>
</div>
</footer>
<div class="end">
<center>
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;"> © 2021 SSJ University, Almora. All Rights Reserved.</font >
</center>
</div>

</body>

</html>
