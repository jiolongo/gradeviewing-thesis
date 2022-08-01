<?php

//update.php

include('../../../../database/database_connection.php');
$query = "
UPDATE tblcontrol 
SET ".$_POST["name"]." = '".$_POST["value"]."'


WHERE id = '".$_POST["pk"]."'
";

$connect->query($query);

?>
