<?php

// $host="sql207.epizy.com";
// $username="epiz_30492962";
// $password="eIV2W30zeEzv";
// $error1="Can't connect to MySQL";
// $error2="Can't connect to Database";

// $con=mysqli_connect($host,$username,$password) or die ($error1);

// mysqli_select_db($con,'epiz_30492962_dbmonitor') or die ($error2);


$host="localhost";
$username="root";
$password="";
$error1="Can't connect to MySQL";
$error2="Can't connect to Database";

$con=mysqli_connect($host,$username,$password) or die ($error1);

mysqli_select_db($con,'dbmonitor') or die ($error2);



?>