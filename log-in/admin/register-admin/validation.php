

<?php


//include("../../loader.php");

include("../../../database/connect_db.php");
include("validation2.php");
$v_user=$_POST['txtUsername'];
$v_pass=$_POST['txtPassword'];
$v_repeat=$_POST['repassword'];


  $valid_acc=new validate($v_user,$v_pass,$v_repeat);  
  $valid_acc->admin_valid(); 




?>
