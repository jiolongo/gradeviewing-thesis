<?php
							

 if(isset($_POST['btnsave2']))
{
$fname=$_POST['_fname'];
$lname=$_POST['_lname'];	
$mname=$_POST['_mname'];
$email=$_POST['_email'];	
$age=$_POST['_age'];
$bdate=$_POST['_birthdate'];
$contactno=$_POST['_contactno'];
	 
	
	$account_query=mysqli_query($con,"UPDATE  tblaccount
SET firstname='$fname', lastname='$lname', middlename='$mname', email='$email', age='$age', birthdate='$bdate' ,contactnumber='$contactno'    WHERE username='$usern'");
	


if($account_query)
{
	
echo "<script> alert('Successfully Saved Records! '); window.location = 'adminpage.php'; </script>";
}
 
}
 ?>
 