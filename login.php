<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
//Something was posted
$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) && !empty($password) && !is_numeric($username))
{
//read from database
$query = "select * from user where username = '$username' limit 1";

$result = mysqli_query($con, $query);
if($result)
{
if($result && mysqli_num_rows($result) >0)
{
$user_data = mysqli_fetch_assoc($result);
if($user_data['password'] === $password){
$_SESSION['user_id'] = $user_data['user_id'];
header("location: index.php");
die;
}
}
}
echo "Wrong Username or Password!";
}else
{
echo "Wrong Username or Password!";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="stylesheet" href="css/login-style.css">
</head>

<body>
<center>
<img src="pictures/ssju-logo.png" alt="logo" width="200" height="200">
<br>
<h2><b>Soban Singh Jeena University, Almora</b><br></h2>
</center>
<font color="blue" align="center">
<div class="container" "style=background-color:beige">
<h2><b>WELCOME TO THIS WEBSITE:</b></h2>
</font>
</div>
<hr>

<form id="form" action="login.php" method="POST" >
<div class="container">
<h3>LOGIN HERE:</h3>
<div class="fcontrol">
<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required>
<br>
</div>

<div class="fcontrol">
<label for="password"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required>
<br>
</div>

<button class=btn type="submit">Login</button>
<br>

<div class="sign-up">
<a href="signup.php">SignUp</a>
</div>
<br>
<span class="psw"><a href="#">Forgot Password?</a></span>
</div>
</form>
</body>
</html>
