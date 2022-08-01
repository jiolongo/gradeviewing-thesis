
<?php


include('../../../../database/database_connection.php');

$column = array("studentid", "firstname", "lastname", "middlename", "gender", "gradesection", "lrn");

$query = "SELECT * FROM tblstudents ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE firstname LIKE "%'.$_POST["search"]["value"].'%" 
 OR lastname LIKE "%'.$_POST["search"]["value"].'%" 
 OR middlename LIKE "%'.$_POST["search"]["value"].'%" 
 OR gender LIKE "%'.$_POST["search"]["value"].'%" 
 OR gradesection LIKE "%'.$_POST["search"]["value"].'%" 
 OR lrn LIKE "%'.$_POST["search"]["value"].'%" 
 OR studentid LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY studentid asc ';
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
 $sub_array[] = $row['studentid'];
 $sub_array[] = $row['firstname'];
 $sub_array[] = $row['lastname'];
 $sub_array[] = $row['middlename'];
 $sub_array[] = $row['gender'];
 $sub_array[] = $row['gradesection'];
 $sub_array[] = $row['lrn'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM tblstudents";
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


