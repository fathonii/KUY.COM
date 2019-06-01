<?php
$conn = mysqli_connect("localhost", "root", "", "kuy");
if (isset($_POST['submit'])){
	if (isset($_POST['lokasi'])&&isset($_POST['waktu'])){
		$select_one=$_POST['lokasi'];
		$select_two=$_POST['waktu'];
		$query="UPDATE pembeli SET tempat='$select_one', jadwal='$select_two' order by id_beli desc limit 1";
		$run=mysqli_query($conn,$query);
		mysqli_close($conn);
	}
}
header("location:duduk.php");
?>