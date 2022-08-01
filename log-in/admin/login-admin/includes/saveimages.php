	<?php


if(isset($_POST['btnsave1']))
{

$_POST['image'];
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0)
{
$tmpName = $_FILES['image']['tmp_name'];
$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);
fclose($fp);
$account_query=mysqli_query($con,"UPDATE  tblaccount
SET  picture='$data'   WHERE username='$usern'");

if($account_query)
{
echo "<script> alert('Successfully Saved Image!'); window.location = 'adminpage.php'; </script>";
}

}

}
 
 



			
?>