<?php
$ipdb="localhost";
$userdb="root";
$pswdb="";
$dbname="KUY";
$connection=mysqli_connect($ipdb, $userdb, $pswdb);

if (!$connection){
	die ("database connection failed" .mysqli_error($connection));
}
$select_db=mysqli_select_db($connection, $dbname);
if (!$select_db){
	die ("Database Selection failed" .mysqli_error($connection));
}
