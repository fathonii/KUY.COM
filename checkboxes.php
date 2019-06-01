<?php
$conn = mysqli_connect("localhost", "root", "", "kuy");   
if (isset($_POST["seat" ])){ 
	$seat = $_POST['seat']; 
	$query="UPDATE pembeli SET kursi='$seat' order by id_beli desc limit 1";

	$run=mysqli_query($conn,$query);  
}
header("location:makanan.php");  
?> 