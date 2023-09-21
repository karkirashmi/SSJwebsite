<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
//Something was posted
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if(!empty($email)
&& filter_var($email, FILTER_VALIDATE_EMAIL)
&& !empty($username)
&& !empty($password)
&& !is_numeric($username)
&& !empty($password_repeat)
&& $password!=$password_repeat)
{
    echo "inside if";
//Save to database
$user_id = random_num(20);
$query = "INSERT INTO `user` (`id`, `user_id`, `email`, `username`, `password`, `date`) VALUES ( '$user_id', '$email', '$username', '$password', current_timestamp())";

mysqli_query($con, $query);

header("location: login.php");
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
<title>Signup Page</title>
<link rel="stylesheet" href="css/signup-style.css">
</head>

<body>
<center>
<img src="pictures/ssju-logo.png" alt="logo" width="200" height="200">
<br>
<h2><b>Soban Singh Jeena University, Almora</b><br></h2>
</center>
<form action = "signup.php" method="POST" style="border:1px solid #ccc" id="form">
<div class="container">
<font color = #CD853F>
<h1>Sign Up</h1>
<font color="black" font size="3"  style="padding-left: 1vw; width: 100%;">CREATE AN ACCOUNT</font >

<div class="fcontrol">
<lable for="email"><b>Email</b></lable>
<input type="email" id="email" placeholder="Enter Email" name="email" autocomplete="off" required>
</div>

<div class="fcontrol">
<lable><b>Username</b></lable>
<input type="text" id="username" placeholder="Enter Username" autocomplete="off" name="username" required>
</div>

<div class="fcontrol">
<lable for="password"><b>Password</b></lable>
<input type="password" id="password" placeholder="Enter Password" autocomplete="off" name="password" required>
</div>

<div class="fcontrol">
<lable for="password_repeat"><b>Repeat Password</b></lable>
<input type="password" id="password_repeat" placeholder="Repeat Password" autocomplete="off" name="password_repeat" required>
</div>

<lable>
<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
</lable>

<div class="clearfix">
<button type="submit" class="signupbtn" value="submit">Sign Up</button>
</div>

<div class="login">
<a href="login.php">Login</a>
</div>

</font>
</div>
</form>
</body>
</html>
