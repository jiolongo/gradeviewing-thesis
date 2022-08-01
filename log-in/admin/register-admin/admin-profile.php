<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1 style="color:maroon;  font-size:50px;">Registration</h1>
    <br>
 <form id="form1" name="form1" method="post" action="validation.php">
    <input type="text" name="txtUsername"  placeholder="Username"id="username">
    <input type="password" name="txtPassword"  placeholder="Password"id="password">
	<input type="password" name="repassword"  placeholder="Repeat Password"id="password2">
    <input type="submit" name="btnsubmit" class="login login-submit" value="Sign Up">
  </form>

  <div class="login-help"><a href="../admin-index.php"><p style="color:blue; font-size:25px;">Login Here!</p></a></div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

	
		<?php

 

  if(isset($_POST['btnsubmit']))

{

 

  error_reporting(0);

  include("../connection.php");

  $user=$_POST['txtUsername'];  

  $pass=$_POST['txtPassword'];

  $password_hash=md5(md5("sdfkjk3".$pass."2dfv8b"));

  $query=mysqli_query($con,"SELECT * FROM tblaccount WHERE username='$user' && password='$password_hash'");

 

  $num_rows=mysqli_num_rows($query);

  if($num_rows)

  {

 
	  //echo "<script> alert('Correct Username and Password'); </script>";

	  session_start();
	  $_SESSION['username']= $user;

	  //rename the index.html file to index.php file
	  header("location:main/index.php"); //point to homepage template
  }

  else

  {

  echo "<script> alert('Wrong Username and Password'); </script>"; 

  }

  }

  ?>
	
	
</body>

</html>