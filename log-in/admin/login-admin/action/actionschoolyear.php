<?php

//action.php
include('../../../../database/database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':syid'  => $_POST['syid'],
  ':sy'  => $_POST['sy'],
  ':sydesc'  => $_POST['sydesc'],
  ':curriculumdesc'  => $_POST['curriculumdesc']
  
 );

 $query = "
 UPDATE tblschoolyear 
 SET sy = :sy,
 sydesc = :sydesc,
 curriculumdesc = :curriculumdesc 
 WHERE syid = :syid
 
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tblschoolyear 
 WHERE syid = '".$_POST["syid"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>