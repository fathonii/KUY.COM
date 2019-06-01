<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
$conn = mysqli_connect("localhost", "root", "", "kuy");
if($conn) {
//if connection has been established display connected.
echo "connected";
}
//if button with the name uploadfilesub has been clicked
if(isset($_POST['uploadfilesub'])) {
//declaring variables
$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
//folder where images will be uploaded
$folder = 'imagesuploadedf/';
//function for saving the uploaded images in a specific folder
move_uploaded_file($filetmpname, $folder.$filename);
//inserting image details (ie image name) in the database
$sql = "INSERT INTO `uu` (`imagename`,`image_text`,`title`)  VALUES ('$filename','$image_text','$title')";
$qry = mysqli_query($conn,  $sql);
if( $qry) {
echo "image uploaded";
}
}
mysqli_close($conn);
header("location:update.php");
?>