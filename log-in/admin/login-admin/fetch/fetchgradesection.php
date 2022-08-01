
<?php


include('../../../../database/database_connection.php');

$column = array( "gradesectionid","gradedesc","sectiondesc","department","departmentdesc","educationlevel");

$query = "SELECT * FROM tblgradesection";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE gradedesc LIKE "%'.$_POST["search"]["value"].'%" 
 OR sectiondesc LIKE "%'.$_POST["search"]["value"].'%" 
 OR department LIKE "%'.$_POST["search"]["value"].'%" 
 OR departmentdesc LIKE "%'.$_POST["search"]["value"].'%" 
 OR educationlevel LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY gradedesc desc ';
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
 $sub_array[] = $row['gradesectionid'];
 $sub_array[] = $row['gradedesc'];
 $sub_array[] = $row['sectiondesc'];
 $sub_array[] = $row['department'];
 $sub_array[] = $row['departmentdesc'];
 $sub_array[] = $row['educationlevel'];
 
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM tblgradesection";
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


