<?php
session_start();
require('db_connect.php');

$user=$_SESSION['login_user'];
$query="UPDATE login SET status_login='0' WHERE user_id='$user'";
$result= mysqli_query($connection, $query) or die(mysqli_error($connection));
session_destroy();
header ("Location: home.php");

?>
