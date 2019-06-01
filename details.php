<html>
<head>
</head>
<body style="background-size: 1366px 768px;background-repeat: repeat;background-image:url('b3.png')">
  <link rel="stylesheet" href="style.css">
  <br><br><br>

<ul>
  <li class="dropdown">
    <img style="margin-left:70px" width='60' height='70' src='logo.png' onclick="window.location.href = 'Home.php';"><a href=hme.php></a></li>
  <li class="dropdown">
    <button style="margin-left:-100px;margin-top:10px" class="dropbtn" onclick="window.location.href = 'show.php';">FILM</button
    <a href=hme.php></a></li>
  <li class="dropdown">
    <button style="margin-left:700px;margin-top:10px" class="dropbtn" onclick="window.location.href = 'about.php';">ABOUT US</button></li>
  <li class="dropdown">
    <button style="margin-top:10px" class="dropbtn">KUY</button>
    <div class="dropdown-content">
      <a href="login.php">LOGIN</a>
    </div>
  </li>
</ul>
<?php
	$conn = mysqli_connect("localhost", "root", "", "kuy");
	$id = $_GET['id'];
	$result = mysqli_query($conn, "SELECT * FROM uu where id='$id'");
	while($row = mysqli_fetch_array($result)){
		 echo "<br>";
		 echo "<table align='center' width=50%>";
		 echo "<tr>";
		 echo "<td align='center'>";
         echo "<p style='color:white;'>".$row['title']."</p></td>";
         echo "</tr>";
         echo "<td></td>";
         echo "<tr>";
         echo "<td align='center'><img width='250' height='400' src='imagesuploadedf/".$row['imagename']."'>";
         echo "<br></td><td valign=''><p style='color:white;'>".$row['image_text']."<p></td></tr>";
         echo "</table>";
	}
?>
</body>
</html>