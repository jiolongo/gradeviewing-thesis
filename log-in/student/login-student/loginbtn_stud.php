<?php
 
class User extends DbClass{ //inherit properties/ behavior/ function/ method from Dbh class


public $studid;
public $pass;
public function __construct($studid,$pass){

$this->studid=$studid;
$this->pass=$pass;


}

  public function getUsers_stud(){

  $password_hash=md5(md5("sdfkjk3".$this->pass."2dfv8b"));


  $sql="SELECT * FROM tblstudents WHERE studentid='$this->studid' && password='$password_hash'";

  $result= $this->connect()->query($sql); 

   $num_rows=$result->num_rows; 

  if($num_rows)

  {


	  session_start();
	  $_SESSION['studentid']= $this->studid;

	  $_SESSION["loggedin"] = true;
	  header("location:studenthomepage.php"); 
  }

  else

  {

  echo "<script>  alert('Wrong Student ID and Password'); history.back();</script>"; 

  }

  }
  }

  
 
	