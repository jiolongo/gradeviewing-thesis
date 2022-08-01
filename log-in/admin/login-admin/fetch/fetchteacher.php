
<?php



//fetch.php

include('../../../../database/database_connection.php');

$column = array("facultyid", "firstname", "lastname", "middlename", "gender", "email");

$query = "SELECT * FROM tblteacher ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE firstname LIKE "%'.$_POST["search"]["value"].'%" 
 OR lastname LIKE "%'.$_POST["search"]["value"].'%" 
 OR middlename LIKE "%'.$_POST["search"]["value"].'%" 
 OR gender LIKE "%'.$_POST["search"]["value"].'%" 
 
 OR email LIKE "%'.$_POST["search"]["value"].'%" 
 OR facultyid LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY facultyid asc ';
}
$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['facultyid'];
 $sub_array[] = $row['firstname'];
 $sub_array[] = $row['lastname'];
 $sub_array[] = $row['middlename'];
 $sub_array[] = $row['gender'];

 $sub_array[] = $row['email'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM tblteacher";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'   => intval($_POST['draw']),
 'recordsTotal' => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'   => $data
);

echo json_encode($output);




?>


