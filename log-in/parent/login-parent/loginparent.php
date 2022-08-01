<?php

  include "../../../database/connect_db.php";
  include "loginbtn_parent.php";
 
  $user=$_POST['txtUsername'];  

  $pass=$_POST['txtPassword'];



  $selectuser=new User($user,$pass);  
  $selectuser->getUsers_parent(); 

?>