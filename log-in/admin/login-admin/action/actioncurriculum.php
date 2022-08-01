<?php

//action.php
include('../../../../database/database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
 
  ':curriculumid'  => $_POST['curriculumid'],
  ':curriculumdesc'  => $_POST['curriculumdesc']
 );

 $query = "
 UPDATE tblcurriculum 
 SET curriculumdesc = :curriculumdesc 
 
 WHERE curriculumid = :curriculumid
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tblcurriculum 
 WHERE curriculumid = '".$_POST["curriculumid"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>