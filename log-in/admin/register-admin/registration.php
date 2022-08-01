<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
	<link rel="icon" href="../../../images/Icons/seal.png">
  <link rel="stylesheet" href="../../../css/userlogin/css/style.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="../css/userlogin/css/responsive-login.css" media="screen" type="text/css" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700&display=swap" rel="stylesheet">

  


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>

<div class="login-card">
    <div class="headinglogin">
   <img src="../../../images/Icons/seal.png" class=image-login>
    <div class="heading">Manuel S. Enverga University Foundation (Grade Viewing)
</div>
</div>

<div class="heading1-register">Admin-Registration
</div>



 <form id="form1" name="form1" method="post" action="validation.php">
 <div class="textbox-edit">
 <div class="group">      
 <input class=textbox type="text" name="txtUsername"  id="username" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label><i class="fas fa-user"> </i>Username</label>
  </div>

   
  <div class="group">      
  <input class=textbox type="password" name="txtPassword"  id="password" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label><i class="fas fa-key"></i> Password</label>
  </div>



  <div class="group">      
  <input  class=textbox type="password" name="repassword"  id="password2" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label><i class="fas fa-key"></i> Repeat Password</label>
  </div>
 




  <button type="submit" name="btnsubmit" class="login login-submit" >Sign Up <i class="fas fa-edit"></i> </button>
 
    </div>
  </form>

  <div class="login-help"><a href="../../admin-index.php"><div class="help" style="font-size:25px;" >Login Here </div></a></div>
</div>

<script src="../../../js/repeat_password.js"></script>
<!-- 
  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script> -->

	
		
	
	
</body>

</html>