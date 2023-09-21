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
<title>faculty</title>
<link rel="stylesheet" href="css/headerNfooter.css">
<link rel="stylesheet" href="css/faculty.css">
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
<h1>FACULTY:</h1>
</u><br>
</div>
<div class="contentsmallhead">
<u>SOBAN SINGH JEENA (SSJ) UNIVERSITY:
</u><br>
</div>
<div class="contentsmall">
There are following faculties available in kumaun university and ssj university:
<div class="list">
<li> Faculties of Science</li>
<li>Faculties of Commerce & Management</li>
<li>Faculties of Arts</li>
<li> Faculties of Technology and visual arts</li>
<li> Faculties of education</li>
<li>faculties of law</li>
<li>faculties of yoga and exercise</li>
</div>
</div>
</div>
</div>

</main>
<footer class="flex-all-centre">
<img src="pictures/ssju-logo.png" alt="picture" width="10%" height="90%"><br>
<div class="footertext">
<img src="pictures/textLogo.svg" alt="picture"><br>
</div>
</footer>
<div class="end">
<center>
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;"> © 2021 SSJ University, Almora. All Rights Reserved.</font >
</center>
</div>
</body>

</html>
