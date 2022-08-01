
<?php


include('../../../../database/database_connection.php');

$column = array("syid","sy","sydesc" ,"curriculumdesc");

$query = "SELECT * FROM tblschoolyear ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE sy LIKE "%'.$_POST["search"]["value"].'%" 
 OR sydesc LIKE "%'.$_POST["search"]["value"].'%" 
 OR curriculumdesc LIKE "%'.$_POST["search"]["value"].'%" 
 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY sy desc ';
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
 $sub_array[] = $row['syid'];
 $sub_array[] = $row['sy'];
 $sub_array[] = $row['sydesc'];
 $sub_array[] = $row['curriculumdesc'];
 
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM tblschoolyear";
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


