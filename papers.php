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
<title>Books & Notes for BCA students</title>
<link rel="stylesheet" href="css/headerNfooter.css">
<link rel="stylesheet" href="css/paper.css">
</head>
<body>
<header>
<nav class="navbar">
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
<table style="width: 100%;">
<tbody>
<h3>Old Question Papers:</h3>
<tr>
<td>
<fieldset class="Books">
<a href="Papers/BCA 101-CE-2016.pdf">
<div class="content">
<img src="pictures/ce.jfif" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Communicative English 2016</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 101-CE-2017.pdf">
<div class="content">
<img src="pictures/ce.jfif">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Communicative English 2017</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 101-CE-2018.pdf">
<div class="content">
<img src="pictures/ce.jfif">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Communicative English 2018</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 102-BM-2016.pdf">
<div class="content">
<img src="pictures/bm.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Basic Mathematics 2016</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 102-BM-2017.pdf">
<div class="content">
<img src="pictures/bm.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Basic Mathematics 2017</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 102-BM-2018.pdf">
<div class="content">
<img src="pictures/bm.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Basic Mathematics 2018</font >
</div>
</a>
</fieldset>
</td>

<td>
<fieldset class="Books">
<a href="Papers/BCA 103-ITC-2016.pdf">
<div class="content">
<img src="pictures/computer.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">ITC 2016</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 103-ITC-2017.pdf">
<div class="content">
<img src="pictures/computer.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">ITC 2017</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 103-ITC-2018.pdf">
<div class="content">
<img src="pictures/computer.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">ITC 2018</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 104-POP (C)-2017.pdf">
<div class="content">
<img src="pictures/pop.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">POP(C) 2016</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 104-POP(C)-2016.pdf">
<div class="content">
<img src="pictures/pop.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">POP(C) 2017</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/BCA 104-POP(C)-2018.pdf">
<div class="content">
<img src="pictures/pop.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">POP(C) 2018</font >
</div>
</a>
</fieldset>
</td>

<td>
<fieldset class="Books">
<a href="Papers/AI 2019.pdf">
<div class="content">
<img src="pictures/ai.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Artificial Intelligence 2019</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/SE 2019.pdf">
<div class="content">
<img src="pictures/se.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Software Engineering 2019</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/Web Tech 2019.pdf">
<div class="content">
<img src="pictures/webtech.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Web Tech 2019</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/Python 2018 Exam Paper.pdf">
<div class="content">
<img src="pictures/python.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Python 2018</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/Python 2019.pdf">
<div class="content">
<img src="pictures/python.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Python 2019</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/TOC 2018 Paper.pdf">
<div class="content">
<img src="pictures/toc.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">TOC 2018</font >
</div>
</a>
</fieldset>
</td>

<td>
<fieldset class="Books">
<a href="Papers/TOC 2019.pdf">
<div class="content">
<img src="pictures/toc.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">TOC 2019</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/UNIX 2018.pdf">
<div class="content">
<img src="pictures/unix.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">UNIX 2018</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/UNIX 2019.pdf">
<div class="content">
<img src="pictures/unix.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">UNIX 2019</font >
</div>
</a>
</fieldset>
</td>
</tr>
</tbody>
</table>
<table style="width: 100%;">
<tbody>
<h3>Practice MCQs:</h3>
<tr>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/Automata Question Bank.pdf">
<div class="content">
<img src="pictures/toc.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Automata</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/C questions and answers.pdf">
<div class="content">
<img src="pictures/pop.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">C Language</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/computer networks MCQ (Answers r in bold).pdf">
<div class="content">
<img src="pictures/dcn.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Computer Networks</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/Data Structure.pdf">
<div class="content">
<img src="pictures/ds.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Data Structure</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/Digital Electrionics.pdf">
<div class="content">
<img src="pictures/de.jfif">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Digital Electronics</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/Disctete Mathemaatics-MCQ.pdf">
<div class="content">
<img src="pictures/dm.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Discreate Mathematics</font >
</div>
</a>
</fieldset>
</td>

<td>
<fieldset class="Books">
<a href="Papers/MCQ/Internet & Web Technology.pdf">
<div class="content">
<img src="pictures/webtech.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Internet & Web Tech</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/JAVA(3rd)Dec2016.pdf">
<div class="content">
<img src="pictures/java.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Java 1</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/JAVA(3rd)May2016(2).pdf">
<div class="content">
<img src="pictures/java.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Java 2</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/JAVA(3rd)May2017.pdf">
<div class="content">
<img src="pictures/java.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Java 3</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/JAVA(5th)May2018.pdf">
<div class="content">
<img src="pictures/java.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Java 4</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Papers/MCQ/Timothy J Williams- CS MCQ.pdf">
<div class="content">
<img src="pictures/computer.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">MCQ in Computer Science</font >
</div>
</a>
</fieldset>
</td>
</tr>
</tbody>
</table>
</main>
<div class="end">
<center>
<h2>ALL THE BEST</h2>
</center>
</div>
<footer class="flex-all-centre">
<div class="logo">
<img src="pictures/ssju-logo.png" alt="picture"><br>
</div>
<div class="footertext">
<img src="pictures/textLogo.svg" alt="picture"><br>
</div>
</footer>
<div class="end">
<center>
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;"> © 2021 SSJ University, Almora. All Rights Reserved.</font >
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Developed by: Atul Kumar & Rashmi Karki</font >
</center>
</div>
</body>
</html>
