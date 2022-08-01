<?php

  include "../../../database/connect_db.php";
  include "loginbtn.php";
 
  $user=$_POST['txtUsername'];  

  $pass=$_POST['txtPassword'];



  $selectuser=new User($user,$pass);  
  $selectuser->getUsers(); 

?>