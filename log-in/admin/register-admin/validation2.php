
<?php
//namespace validate;

class validate extends DbClass{
	
public $v_user;
public $v_pass;
public $v_repeat;
public function __construct($v_user,$v_pass,$v_repeat){

$this->v_user=$v_user;
$this->v_pass=$v_pass;
$this->v_repeat=$v_repeat;

}

	
	
	
public function admin_valid(){
	if($this->v_pass!= $this->v_repeat)
{
echo "<script> alert('Password and Repeat Password do not match!');
history.back(); </script>";
	return false;
}


  $sql="SELECT * FROM tblaccount WHERE username='$this->v_user'";

  $result= $this->connect()->query($sql); 

   $num_rows=$result->num_rows; 

if($num_rows)
{
echo "<script> alert('Username already exists!');
history.back(); </script>";

}
else
{
	
	$password_hash=md5(md5("sdfkjk3".$this->v_pass."2dfv8b"));
	
$sql="INSERT INTO tblaccount(username,password) VALUES ('$this->v_user','$password_hash')"; 

  $result= $this->connect()->query($sql); // function connect from Dbh class //query built-in method in PHP OOP

  if($result){

  echo "<script> alert('Successfully Registered. You may now log-in!');
history.go(-2);  </script>";

  }else{

 echo "<script> alert('Error!');
history.back(); </script>";

  }
	
	
	

}

}

}

?>



