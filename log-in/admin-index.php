<?php 
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin/login-admin/adminpage.php");
    exit;
}
?>

<!DOCTYPE html>
	<html><head>

  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Admin-Log-in</title>
	<link rel="icon" href="../images/Icons/seal.png">
	<link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
 	<link rel="stylesheet" href="../css/userlogin/css/style.css" media="screen" type="text/css" />
   <link rel="stylesheet" href="../css/userlogin/css/responsive-login.css" media="screen" type="text/css" />
		
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700&display=swap" rel="stylesheet">

  


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>

<body>

 




<div class="login-card">
    <div class="headinglogin">
   <img src="../images/Icons/seal.png" class=image-login>
    <div class="heading">Manuel S. Enverga University Foundation (Grade Viewing)
</div>
</div>

<div class="heading-user">Admin-Log In
</div>

  <form id="form1" name="form1" method="post" action=admin/login-admin/login.php>
  
  


  <div class="textbox-edit">
    <div class="group">      
    <input type="text" class="textbox"  name="txtUsername" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label> <i class="fas fa-user"></i> Username</label>
  </div>
    
  <div class="group">      
    <input type="password" class="textbox" name="txtPassword" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label><i class="fas fa-key"></i> Password</label>
  </div>
  

    <button type="submit" name="btnsubmit" class="login login-submit" >Login <i class="fas fa-sign-in-alt"></i> </button>
    </div>
  </form>
	
  <div class="login-help">
    
    <a   href="admin/register-admin/registration.php"> <div class="help">Register as Admin </div> </a>
	  <a   href="../Admin.html"> <div class="help">Go Back</div> </a>
    
	</div>
	
</div>






</body>

</html>