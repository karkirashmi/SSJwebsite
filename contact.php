<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
//Something was posted
$y_name = $_POST['y_name'];
$e_mail = $_POST['e_mail'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

if(!empty($e_mail)
&& filter_var($e_mail, FILTER_VALIDATE_EMAIL)
&& !empty($y_name)
&& !empty($subject)
&& !is_numeric($y_name)
&& !empty($msg))
{
//Save to database
$query = "INSERT INTO usermsg (y_name, e_mail, subject, msg) values ('$y_name', '$e_mail', '$subject','$msg')";

mysqli_query($con, $query);
header("location: contact.php");
die;
}else
{
echo "Please Enter valid information!";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>contact</title>
<link rel="stylesheet" href="css/headerNfooter.css">
<link rel="stylesheet" href="css/contact.css">
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
<h1>CONTACT US:</h1>
</u><br>
</div>
</div>
<form action="contact.php" method="post">
<div class="container2">
<div class="box">
<label for="uname"><b>YOUR NAME:</b></label>
<input type="text" placeholder="Enter your name" name="y_name" required>
<br>
<label for="uname"><b>EMAIL:</b></label>
<input type="text" placeholder="Enter your email" name="e_mail" required>
<br>
<label for="uname"><b>SUBJECT:</b></label>
<input type="text" placeholder="Enter subject" name="subject" required>
<br>

<label for="uname"><b>MESSAGE:</b></label>
<input type="text" placeholder="Enter your message" name="msg" required>
<br>
<button type="submit">SEND</button>
<label>
</div>
</div>
</form>
<br>
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
