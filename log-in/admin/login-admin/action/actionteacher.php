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

  ':email'  => $_POST['email'],
  ':facultyid'    => $_POST['facultyid']
 );

 $query = "
 UPDATE tblteacher 
 SET firstname = :firstname, 
 lastname = :lastname,
 middlename = :middlename, 
 gender = :gender,
 
 email = :email
 WHERE facultyid = :facultyid
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tblteacher 
 WHERE facultyid = '".$_POST["facultyid"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>