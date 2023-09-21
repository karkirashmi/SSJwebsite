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
<link rel="stylesheet" href="css/booksandnotes.css">
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
<h3>Books:</h3>
<tr>
<td>
<fieldset class="Books">
<a href="Books and Notes/AI - R. Sahanthi.pdf">
<div class="content">
<img src="pictures/ai.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Artificial Intelligence</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Let Us C - Yashwant Kanetkar.pdf">
<div class="content">
<img src="pictures/pop.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">POP(C Lang) Y. Kanetkar</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Programming in C (Oxford).pdf">
<div class="content">
<img src="pictures/pop.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Programming in C (Oxford)</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/CSharp Yellow Book 2008.pdf">
<div class="content">
<img src="pictures/csharp.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">C# Development</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Computer Fundamentals.zip">
<div class="content">
<img src="pictures/computer.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Computer Fundamentals ZIP</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Computer Graphics - Hearn & Baker.pdf">
<div class="content">
<img src="pictures/cg.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Computer Graphics Hearn & Baker</font >
</div>
</a>
</fieldset>
</td>


<td>
<fieldset class="Books">
<a href="Books and Notes/UNIX-Sumitabha Das.pdf">
<div class="content">
<img src="pictures/unix.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">UNIX by Sumitabha Das 4th Ed</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Morris M Mano COMPUTER ARCHITECTURE BOOK.djvu">
<div class="content">
<img src="pictures/csa.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">CSA Morris Mano DjVu</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Data Communications and Networking – Behrouz A. Forouzan.fourth edition.pdf">
<div class="content">
<img src="pictures/dcn.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">DCN B.A. Forouzan</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Solutions of Book Problems-Review Questions and Exercises (4th Edition).pdf">
<div class="content">
<img src="pictures/dcn.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Solutions DCN B.A.Forouzan</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Data Structures With C - by schaum series_2.pdf">
<div class="content">
<img src="pictures/ds.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Data Structure with C</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/DataBase Management System - By Korth.pdf">
<div class="content">
<img src="pictures/dbms.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">DBMS by Korth 4th Ed.</font >
</div>
</a>
</fieldset>
</td>


<td>
<fieldset class="Books">
<a href="Books and Notes/Mano_Digital.Design.5E.pdf">
<div class="content">
<img src="pictures/de.jfif" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Digital Design M Mano 5th Ed</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/DM - Schaum's Series- Lipschutz.pdf">
<div class="content">
<img src="pictures/dm.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Discreate Mathematics 3rd Ed</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Operations Research_ 2nd Edition_2.pdf">
<div class="content">
<img src="pictures/os.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Operation Research</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/OS Concepts-Galvin 7th Edition.pdf">
<div class="content">
<img src="pictures/os.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Operating System Consepts</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Python for you and Me.pdf">
<div class="content">
<img src="pictures/python.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Python</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Software Engineering - Roger S Pressman [5th edition].pdf">
<div class="content">
<img src="pictures/se.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Software Engineering</font >
</div>
</a>
</fieldset>
</td>


<td>
<fieldset class="Books">
<a href="Books and Notes/Introduction to Languages and The Theory of Computation Fourth Edition john C. Martin.pdf">
<div class="content">
<img src="pictures/toc.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Theory of Computation J.C. Martin</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Encyclopedia of Computer Science and Technology.pdf">
<div class="content">
<img src="pictures/computer.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Encyclopedia of CS&Tech</font >
</div>
</a>
</fieldset>
</td>
</tr>
</tbody>
</table>
<table style="width: 100%;">
<tbody>
<h3>Notes:</h3>
<tr>
<td>
<fieldset class="Books">
<a href="Books and Notes/AI Nots.pdf">
<div class="content">
<img src="pictures/ai.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">AI Notes</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/DCN-Notes.zip">
<div class="content">
<img src="pictures/dcn.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">DCN Notes Zip</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/EVS-Notes.zip">
<div class="content">
<img src="pictures/evs.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">EVS Notes Zip</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Java-Notes.zip">
<div class="content">
<img src="pictures/java.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Java Notes Zip</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/NST-Notes.zip">
<div class="content">
<img src="pictures/nst.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">NST Notes Zip</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/OperatingSystems Notes 1.pdf">
<div class="content">
<img src="pictures/os.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">OS Nots</font >
</div>
</a>
</fieldset>
</td>

<td>
<fieldset class="Books">
<a href="Books and Notes/Unix-Notes.zip">
<div class="content">
<img src="pictures/unix.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">UNIX Notes Zip</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/COMPUTER ORG CLASS NOTES.pdf">
<div class="content">
<img src="pictures/computer.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Computer Organization</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/DATA STRUCTURE CLASS NOTES.pdf">
<div class="content">
<img src="pictures/ds.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">Data Structure Notes</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/DBMS CLASS NOTES.pdf">
<div class="content">
<img src="pictures/dbms.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">DBMS Notes</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/NST-Notes.zip">
<div class="content">
<img src="pictures/nst.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">NST Notes Zip</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/Discrete Mathematics Hand Written Notes.pdf">
<div class="content">
<img src="pictures/ds.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">DM Notes</font >
</div>
</a>
</fieldset>
</td>

<td>
<fieldset class="Books">
<a href="Books and Notes/SOFTWARE ENG CLASS NOTES.pdf">
<div class="content">
<img src="pictures/se.png" alt="picture">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">SE Notes</font >
</div>
</a>
</fieldset>
</td>
<td>
<fieldset class="Books">
<a href="Books and Notes/THEORY OF COMPUTATION CLASS NOTES.pdf">
<div class="content">
<img src="pictures/toc.png">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">TOC Notes</font >
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
<img src="pictures/ssju-logo.png" alt="logo"><br>
</div>
<div class="footertext">
<img src="pictures/textLogo.svg" alt="logo"><br>
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
