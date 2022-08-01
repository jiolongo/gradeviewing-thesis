<?php

/*---------------------------students----------------------*/

if(isset($_POST['btnsubmit1']))

{
	
include("../../../database/connection.php");
error_reporting(0);



$studentid1=$_POST['txtstudentid'];
$pass1=$_POST['txtPassword1'];
$repeat1=$_POST['repassword1'];

if($pass1!= $repeat1)
{
echo "<script> alert('Password and Repeat Password do not match!');
history.back(); </script>";
	return false;
}

$query=mysqli_query($con,"SELECT * FROM tblstudents WHERE studentid='$studentid1'");
$num_rows=mysqli_num_rows($query);
if($num_rows)
{
echo "<script> alert('Student ID already exists!');
history.back(); </script>";

}

	
else
{

$password=md5(md5("sdfkjk3".$pass1."2dfv8b"));

$account_query=mysqli_query($con,"INSERT INTO tblstudents(password,studentid) VALUES( '$password','$studentid1')");
if($account_query)
{
echo 
	"<script> alert('Successfully Registered. You may now log-in!');
history.back();  </script>";


}
else
{
echo "<script> alert('Error!');
history.back(); </script>";
}
}

}


/*---------------------------teacher----------------------*/

elseif(isset($_POST['btnsubmit2']))
{
include("../../../database/connection.php");
error_reporting(0);
$user2=$_POST['txtUsername1'];
$pass2=$_POST['txtPassword1'];
$repeat2=$_POST['repassword1'];

	if($pass2 != $repeat2)

{
echo "<script> alert('Password and Repeat Password do not match!');
history.back();  </script>";
return false;
}



$query=mysqli_query($con,"SELECT * FROM tblteacher WHERE facultyid='$user2'");
$num_rows=mysqli_num_rows($query);
if($num_rows)
{
echo "<script> alert('Username already exists!');
history.back(); </script>";
}
else
{
$password=md5(md5("sdfkjk3".$pass2."2dfv8b"));
$account_query=mysqli_query($con,"INSERT INTO tblteacher(facultyid, password) VALUES('$user2', '$password')");
if($account_query)
{
echo "<script> alert('Successfully Registered. You may now log-in!');
history.back();  </script>";
}
else
{
echo "<script> alert('Error!');
history.back(); </script>";
}
}

}





/*---------------------------parent----------------------*/
elseif(isset($_POST['btnsubmit3']))
{
include("../../../database/connection.php");
error_reporting(0);
$user3=$_POST['txtUsername1'];
$pass3=$_POST['txtPassword1'];
$repeat3=$_POST['repassword1'];

	if($pass3!=$repeat3)

{
echo "<script> alert('Password and Repeat Password do not match!');
history.back(); </script>";
	return false;
}
$query=mysqli_query($con,"SELECT * FROM tblparent WHERE username='$user3'");
$num_rows=mysqli_num_rows($query);
if($num_rows)
{
echo "<script> alert('Username already exists!');
history.back(); </script>";
}
else
{
$password=md5(md5("sdfkjk3".$pass3."2dfv8b"));
$account_query=mysqli_query($con,"INSERT INTO tblparent(username, password) VALUES('$user3', '$password')");
if($account_query)
{
echo "<script> alert('Successfully Registered. You may now log-in!');
history.back();  </script>";
}
else
{
echo "<script> alert('Error!');
history.back(); </script>";
}
}
}






?>
