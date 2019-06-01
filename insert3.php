<?php
$conn = mysqli_connect("localhost", "root", "", "kuy");   
if (isset($_POST["mm" ])){ 
	$mm = $_POST['mm']; 
	$query="UPDATE pembeli SET makan_minum='$mm' , harga_makan_minum=10000 order by id_beli desc limit 1";
	$run=mysqli_query($conn,$query);  
}
header("location:kupon.php");  
?> 