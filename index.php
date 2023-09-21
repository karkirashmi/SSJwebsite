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
<title>ssj university bca notes and paper</title>
<link rel="stylesheet" href="css/headerNfooter.css">
<link rel="stylesheet" href="css/home.css">
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
<hr>
<main>
<div class="container">
<div class="content">
<center>
<font color="#191970"><u>
<h1>WELCOME TO THE WEBSITE</h1><br>SOBAN SINGH JEENA(SSJ)UNIVERSITY:
</u></font>
</center><br>
Soban Singh Jeena university, Almora , a residential cum affiliating university, came in to existence in
the year 2020 by notification No. 168/XXXVI(3)/2020/77/2019 dated June 22, 2020 under the Uttarakhand
Act No. 19 of 2020.
The University has three campuses affiliated to it :-
<li>Soban Singh Jeena Campus, Almora</li>
<li>Laxman Singh Mahar Campus, Pithoragarh</li>
<li>Pt. Badri Dutt Pandey Campus, Bageshwar</li>

<div class="slider">
<center> <img src="pictures/slide0.jpeg" alt="picture" width="98%"></center><br>
</div>

<div class="chancellor">
<div class="c1">
<img src="pictures/governer.jpg" alt="picture" width="300px" height="300px"><br>
<u>
<h3>Lt Gen(Retd) Gurmit Singh<br>(HON'BLE GOVERNER)</h3>
</u><br>
</div>
<div class="c2">
<img src="pictures/vc.jpeg" alt="picture" width="300px" height="300px"><br>
<u>
<h3>PROF. N.S. BHANDARI<br>(HON'BLE VICE-CHANCELLOR)</h3>
</u><br>
</div>

</div>
</div>
<hr>



<div class="bca">
<center>
<font color="black" font size="5"><u>
<h1>BCA(BACHELOR OF COMPUTER APPLICATION)</h1>
</u></font>
</center>
<div class="effect">
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">BCA stands for Bachelors in Computer Application. BCA is a three
year undergraduate degree programme for candidates wishing to delve into the world of Computer
languages. One of the most popular options to get started with a career in Information
Technology, the course gives you an insight into the world of computers and its applications.

A BCA degree is considered to be at par with a BTech/BE degree in Computer Science or
Information Technology. The degree helps interested students in setting up a sound academic base
for an advanced career in Computer Applications.<br>Here are the bca staffs:<br>
<h3>
<li>HOD: Dr.Parul Saxena.</li>
<li>Dr.Manoj Bisht.</li>
<li>Dr.Susheel Chandra Bhatt.</li>
<li>Mr.Ravindra Nath Pathak</li>
<li>Dr.Anamika Pant.</li>
<li>Miss.Arpita Joshi.</li>
<li>Mr.Mohd. Rehan.</li>
<li>Mr.Lalit Prasad.</li>
</h3>
</font>


<div class="pic">
<img src="pictures/comp2.jpeg" alt="img" style="padding-left: 2vw;margin-left: 5vw;">
</div>
</div>

</div>
<hr>
<div class="section-title " style="padding: 1vh;">
<h2 class="students-links-h5">Student Important Links:</h2>
</div>
<div class="row mt-20" style="background:lightgray; margin-bottom: 4vh;">

<div class="note content" style="margin-top: 1vh; padding-top: 0vh;">

<marquee style="font-size:28px;"> <a style="color:#e23193"> Here are some useful notes and previous
year papers of different
subjects given by staff of BCA.</a></marquee>
</div>
</div>
<div class="links">
<ul>
<li>
<h2><a href="books-notes.php">Books And Notes</a></h2>
</li>
<li>
<h2><a href="papers.php">Papers</a></h2>
</li>
</ul>
</div>
<hr>
<div class="morebca">
<center><h1>More about BCA</h1></center>
<h2>BCA (BACHELOR OF COMPUTER APPLICATIONS)</h2>
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">
The full form of BCA is Bachelors in Computer Application. BCA is a 3- year undergraduate degree programme that focusses on knowledge on the basics of computer application and software development. The minimum eligibility for BCA followed across all colleges is 45% marks in 10+2 or equivalent examination. There are no subject level restrictions for pursuing BCA as students with any subjects in 10+2 can apply for BCA unlike B.Tech. The typical syllabus of BCA includes database management systems, operating systems, software engineering, web technology and languages such as C, C++, HTML, Java etc. There are both reputed government as well as good private colleges that have BCA as course. The fees for BCA generally ranges from Rs. 37,500 to 5 lakhs.
Recruting companies include both big established companies like HP, Accenture, Capgemini, Cognizant and new-age technology startups like Flipkart. The average salary package post BCA varies between 4LPA to 10 LPA depending on company and the specific role/designation. Software Engineer, Web Designer and System Analyst are some of the roles which are offered to students post completion of their BCA
A BCA degree is considered to be at par with a BTech/BE degree in Computer Science or Information Technology. The degree helps interested students in setting up a sound academic base for an advanced career in Computer Applications.
Its course subjects give good knowledge in critical areas of computer science and Networking. The Information Technology sector has a substantial economic impact and hence provide ample job opportunities. BCA is an undergraduate course that is comparatively similar to the B.Tech course in all the perspectives but only differs in the duration & fees.
Wikipedia explains BCA as "The BCA is a common degree for CS/IT students at Indian universities, and is an alternative to the engineering counterpart, the B.E/B.Tech in Computer Science and Engineering/IT, which requires four years of study. It is a technical degree that prepares students for a career in computer applications and software development; this being a professional course, even non-math students can also opt for this course, many universities offer this course in India. This is a good course for the non-math student, so they also can make their career in Information technology."
Eligibility Criteria for BCA
For admission in the BCA course, the eligibility criteria depend on the college that students are interested in applying for. Many factors would influence the eligibility, such as infrastructure, number of students applying for the course, location of the college etc. Students must pass their 10+2 from a recognized board with an aggregate of 50% minimum marks. Additionally, various colleges and institutes may have their examinations, which the students would have to clear with good scores to take admission. The minimum age to apply for the course is 17 years old.

</font >
<h4>Syllabus and Subjects for BCA</h4>
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">
BCA is a three-year-long course consisting of six semesters. Each semester students can choose electives to make their course diverse, as well as core subjects. Core subjects are taught as colleges believe that these courses are essential for student's learning.
The primary aim of electives is to make the learning more flexible and allow the students to study the subject in depth.
Listed below are some of the generic syllabus which all universities will cover during the course:
<ul>
<li>Computer Fundamentals</li>
<li>C-Programming</li>
<li>System Analysis & Design</li>
<li>In-depth Working of Computer Sub-system</li>
<li>Organizational Behaviour</li>
</ul>
</font >
<h4>What is BCA All About?</h4>
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">
Bachelor of Computer Application or B.C.A. is a three years undergraduate course to inculcate knowledge about computer skills. It provides a wide knowledge of the programming languages like C, C++, Oracle, Python, Java, Web designing, Business intelligence, and database management systems. There are a lot of job opportunities for fresh graduates in the field of computer management, database management, administration and more.
What Does a BCA Graduate Do?
The speciality of the BCA course is that it provides computer knowledge in theory and practicals. It enables students to work as a system engineer, system tester, junior programmer, system administrator, web developer, software developer, etc.
They have a variety of shared responsibilities and functions in their role; some of them are:
Research and Development: BCA graduates are responsible for representing new areas of computer softwares and product development. Their role entails them to study and research the missing parts in computer software development.
Computer System Management: Graduates of this course are the most aware of computer softwares and the different uses of these softwares. Therefore, a part of their job is to maintain safe, economical and effective use of the equipment available.
Scope For Higher Education
Internationally as well, students can pursue BCA for a prospectus career option. Many colleges around the world provide students with the opportunity to study this course. Additionally, if students are interested, they can decide to pursue a Master's in Computer application abroad. It can help them look for a job in the country they choose to study. Some of the master's course students can pursue include:
<ul>
<li>MCA</li>
<li>MBA</li>
</ul>
</font >
<h4>Career Options After BCA Graduation:</h4>
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">
Job opportunities are available in plenty for BCA graduates in both the public and private sectors. The job roles offered will be of the highest level of employment owing to their knowledge and research-based experience that makes them qualified to handle job roles of higher magnitude and multiple domains. The most common roles the graduates work as are:
<ul>
<li>Project manager</li>
<li>Computer Application Specialist</li>
<li>Data Analyst</li>
<li>Information System Managers</li>
<li>Database Administrators</li>
<li>Computer System Analysts</li>
<li>Chief Information Officers</li>
</ul>
</font >
<h4>Skills That Make You The BCA Graduate</h4>
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">
BCA graduates need to have soft and hard skills that will help them succeed in their professional lives. Some of these skills include:
<ul>
<li>Quantitative Analysis Skills</li>
<li>Computer Skills</li>
<li>Analytical Skills</li>
<li>The Ability to Work Under Pressure</li>
<li>Interpersonal Skills</li>
</ul>
</font >
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">
Now we know about the BCA course, syllabus and importance so, here are some details about BCA in SSJ University. For BCA, SSJ has good staffs available :
<ul>
<li>HOD Parul Saxena.</li>
<li>Dr. Manoj Bisht.</li>
<li>Dr. Susheel Chandra Bhatt.</li>
<li>Mr. Ravindra Nath Pathak.</li>
<li>Dr. Anamika Pant.</li>
<li>Miss Arpita Joshi.</li>
<li>Mr. Mohd. Rehan.</li>
<li>Mr. Lalit Prasad.</li>
</ul>
</font >
</div>
<div class="end">
<center>
<h2>ALL THE BEST</h2>
</center>
</div>
</main>
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
