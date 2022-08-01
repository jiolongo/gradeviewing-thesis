<?php

  include "../../../database/connect_db.php";
  include "loginbtn_teacher.php";
 
  $user=$_POST['txtUsername'];  

  $pass=$_POST['txtPassword'];



  $selectuser=new User($user,$pass);  
  $selectuser->getUsers_teacher(); 

?>