<?php

//action.php
include('../../../../database/database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
    ':gradesectionid'  => $_POST['gradesectionid'],
  ':gradedesc'  => $_POST['gradedesc'],
  ':sectiondesc'  => $_POST['sectiondesc'],
  ':department'  => $_POST['department'],
  ':departmentdesc'  => $_POST['departmentdesc'],
  ':educationlevel'  => $_POST['educationlevel']
 
 );

 $query = "
 UPDATE tblgradesection 
 SET 

 gradedesc = :gradedesc,
 sectiondesc = :sectiondesc,
 department = :department,
 departmentdesc = :departmentdesc,
 educationlevel = :educationlevel
 


 WHERE  gradesectionid = :gradesectionid
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tblgradesection 
 WHERE  gradesectionid = '".$_POST["gradesectionid"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>