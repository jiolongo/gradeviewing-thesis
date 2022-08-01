<?php

session_start();
$_SESSION = array();
session_destroy();

header("location:../../parent-index.php"); 

exit;

?>