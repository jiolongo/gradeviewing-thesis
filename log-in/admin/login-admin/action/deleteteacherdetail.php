<?php


include('../../../../database/connection.php');

if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM tblteacherdetail WHERE id = '".$id."'";
  mysqli_query($con, $query);
  
 }
}


?>
