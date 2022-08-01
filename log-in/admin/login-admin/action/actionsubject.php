<?php

//action.php
include('../../../../database/database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
    ':subjectid'  => $_POST['subjectid'],
  ':subject'  => $_POST['subject'],
  ':subjectdesc'  => $_POST['subjectdesc'],
  ':subjectgradelevel'  => $_POST['subjectgradelevel']
 );

 $query = "
 UPDATE tblsubject 
 SET subject = :subject,
 subjectdesc = :subjectdesc,
 subjectgradelevel = :subjectgradelevel

 WHERE subjectid = :subjectid
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tblsubject 
 WHERE subjectid = '".$_POST["subjectid"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>