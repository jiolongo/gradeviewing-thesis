
<?php


include('../../../../database/database_connection.php');

$column = array( "subjectid","subject","subjectdesc","subjectgradelevel");

$query = "SELECT * FROM tblsubject";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE subject LIKE "%'.$_POST["search"]["value"].'%" 
 OR subjectdesc LIKE "%'.$_POST["search"]["value"].'%" 
 OR subjectgradelevel LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY  subjectgradelevel asc ';
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
 $sub_array[] = $row['subjectid'];
 $sub_array[] = $row['subject'];
 $sub_array[] = $row['subjectdesc'];
 $sub_array[] = $row['subjectgradelevel'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM tblsubject";
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


