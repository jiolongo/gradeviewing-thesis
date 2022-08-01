<?php

//action.php
include('../../../../database/database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':firstname'  => $_POST['firstname'],
  ':lastname'  => $_POST['lastname'],
  ':middlename'  => $_POST['middlename'],
  ':gender'   => $_POST['gender'],
  ':gradesection'  => $_POST['gradesection'],
  ':lrn'  => $_POST['lrn'],
  ':studentid'    => $_POST['studentid']
 );

 $query = "
 UPDATE tblstudents 
 SET firstname = :firstname, 
 lastname = :lastname,
 middlename = :middlename, 
 gender = :gender,
 gradesection = :gradesection, 
 lrn = :lrn
 WHERE studentid = :studentid
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tblstudents 
 WHERE studentid = '".$_POST["studentid"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>