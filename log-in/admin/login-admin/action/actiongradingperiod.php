<?php

//action.php
include('../../../../database/database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
    ':id'  => $_POST['id'],
  ':gradingperiod'  => $_POST['gradingperiod'],
  ':department'  => $_POST['department']
 );

 $query = "
 UPDATE tblgradingperiod 
 SET gradingperiod = :gradingperiod,
 department = :department 
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tblgradingperiod 
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>