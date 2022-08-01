<?php

  include "../../../database/connect_db.php";
  include "loginbtn_stud.php";
 
  $studid=$_POST['txtstudID'];  

  $pass=$_POST['txtPassword'];



  $selectuser=new User($studid,$pass);  
  $selectuser->getUsers_stud(); 

?>