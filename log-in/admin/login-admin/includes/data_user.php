<?php


	
error_reporting(0);




$query_acc=mysqli_query($con,"SELECT * FROM tblaccount WHERE username='$usern'");
$num_rows=mysqli_num_rows($query_acc);

while($fetch=mysqli_fetch_assoc($query_acc))
{
$uname=$fetch['username'];
$u_fname=$fetch['firstname'];
$u_lname=$fetch['lastname'];	
$u_mname=$fetch['middlename'];	
$u_email=$fetch['email'];	
$u_age=$fetch['age'];	
$u_gender=$fetch['gender'];
$u_birthdate=$fetch['birthdate'];	
$u_contactno=$fetch['contactnumber'];	
	
$img='<img src="data:image/jpeg;base64,'. base64_encode($fetch['picture']). '" width="80px" height="60px">';
$img1='<img src="data:image/jpeg;base64,'. base64_encode($fetch['picture']). '" width="200" height="150px">';
}
