<?php
session_start();
require ("db_connect.php");

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
    $user_id=$_POST['user_id'];
    $user_pass=$_POST['user_pass'];

    $sql = "SELECT * FROM login WHERE user_id='$user_id' AND user_pass='$user_pass'";

    $login =mysqli_query($connection,$sql)or die (mysqli_error($connection));
    $count= mysqli_num_rows($login);
    if ($count==1){
        echo "<script type='text'>alert('login credentials verified')</script>";
        $query = "UPDATE login SET status_login='1' WHERE user_id='$user_id'";
        $result = mysqli_query($connection, $query) or die (mysqli_error($connection));
        $_SESSION['login_user']=$user_id;
        if($count>0){
        	$data = mysqli_fetch_assoc($login);
        	if($data['level']=="admin"){
				$_SESSION['user_id'] = $user_id;
				$_SESSION['level'] = "admin";
				header("location:Home_admin.php");
			}else if($data['level']=="user"){
				$_SESSION['user_id'] = $user_id;
				$_SESSION['level'] = "user";
				header("location:Home_user.php");
			}
		}
	}
  }
?>