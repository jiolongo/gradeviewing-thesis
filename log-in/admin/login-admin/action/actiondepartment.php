<?php

//action.php
include('../../../../database/database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':departmentid'  => $_POST['departmentid'],
  ':department'  => $_POST['department'],
  ':departmentdesc'  => $_POST['departmentdesc'],
  ':educationlevel'  => $_POST['educationlevel']
 );

 $query = "
 UPDATE tbldepartment 
 SET department = :department,
departmentdesc = :departmentdesc,
 educationlevel = :educationlevel 
 
 WHERE departmentid = :departmentid
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tbldepartment 
 WHERE departmentid = '".$_POST["departmentid"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>