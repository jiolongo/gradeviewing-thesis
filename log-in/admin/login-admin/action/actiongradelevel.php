<?php

//action.php
include('../../../../database/database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
 
  ':gradelevelid'  => $_POST['gradelevelid'],
  ':gradeleveldesc'  => $_POST['gradeleveldesc']
 );

 $query = "
 UPDATE tblgradelevel 
 SET gradeleveldesc = :gradeleveldesc 
 
 WHERE gradelevelid = :gradelevelid
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tblgradelevel 
 WHERE gradelevelid = '".$_POST["gradelevelid"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>