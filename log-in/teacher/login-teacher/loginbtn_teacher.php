<?php
 
class User extends DbClass{ //inherit properties/ behavior/ function/ method from Dbh class


public $user;
public $pass;
public function __construct($user,$pass){

$this->user=$user;
$this->pass=$pass;


}

  public function getUsers_teacher(){

  $password_hash=md5(md5("sdfkjk3".$this->pass."2dfv8b"));


  $sql="SELECT * FROM tblteacher WHERE facultyid='$this->user' && password='$password_hash'";

  $result= $this->connect()->query($sql); 

   $num_rows=$result->num_rows; 

  if($num_rows)

  {


	  session_start();
	  $_SESSION['facultyid']= $this->user;

    $_SESSION["loggedin"] = true;
	  header("location:teacherhomepage.php"); 
  }

  else

  {

  echo "<script>  alert('Wrong Username and Password'); history.back();</script>"; 

  }

  }
  }

  
 
	