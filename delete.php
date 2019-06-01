<?php
	$conn = mysqli_connect("localhost", "root", "", "kuy");
	$id = $_GET['id'];
	$result = mysqli_query($conn, "DELETE FROM uu where id='$id'");
	mysqli_close($conn);
	header("location:update.php"); 
?> 