<?php



$query_acc=mysqli_query($con,"SELECT * FROM tblparent WHERE username='$usern'");
$num_rows=mysqli_num_rows($query_acc);

while($fetch=mysqli_fetch_assoc($query_acc))
{

$u_fname=$fetch['firstname'];
$u_lname=$fetch['lastname'];	
$u_mname=$fetch['middlename'];	
$u_email=$fetch['email'];	
$u_contactno=$fetch['contactno'];	
$u_birthdate=$fetch['birthdate'];	

$u_address=$fetch['address'];	


}

?>