<?php

//fetch.php

include('../../../../database/database_connection.php');

$column = array("id","schoolyear","gradingperiod","datecreated", "dateduration" ,"status");

$query = "SELECT * FROM tblcontrol";

if(isset($_POST["search"]["value"]))
{
	$query .= '
	WHERE schoolyear LIKE "%'.$_POST["search"]["value"].'%" 
    OR gradingperiod LIKE "%'.$_POST["search"]["value"].'%" 
	OR datecreated LIKE "%'.$_POST["search"]["value"].'%" 
    OR dateduration LIKE "%'.$_POST["search"]["value"].'%" 
    OR status LIKE "%'.$_POST["search"]["value"].'%" 

	';
}

if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
	$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$result = $connect->query($query . $query1);

$data = array();

foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['schoolyear'];
    $sub_array[] = $row['gradingperiod'];
    $sub_array[] = $row['datecreated'];
    $sub_array[] = $row['dateduration'];
	$sub_array[] = $row['status'];
	$data[] = $sub_array;
}

function count_all_data($connect)
{
	$query = "SELECT * FROM tblcontrol";

	$statement = $connect->prepare($query);

	$statement->execute();

	return $statement->rowCount();
}

$output = array(
	'draw'		=>	intval($_POST['draw']),
	'recordsTotal'	=>	count_all_data($connect),
	'recordsFiltered'	=>	$number_filter_row,
	'data'		=>	$data
);

echo json_encode($output);

?>
