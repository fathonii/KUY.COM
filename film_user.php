<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
$conn = mysqli_connect("localhost", "root", "", "kuy");

?>
<!DOCTYPE html>
<html>
<body style="background-size: 1366px 768px;background-repeat: repeat;background-image:url('b3.png')">
  <link rel="stylesheet" href="style.css">
  <br><br><br>

<ul>
  <li class="dropdown">
    <img style="margin-left:70px" width='60' height='70' src='logo.png' onclick="window.location.href = 'Home_user.php';"><a href=hme.php></a></li>
  <li class="dropdown">
    <button style="margin-left:-100px;margin-top:10px" class="dropbtn" onclick="window.location.href = 'film_user.php';">FILM</button
    <a href=film_user.php></a></li>
  <li class="dropdown">
    <button style="margin-left:550px;margin-top:10px"class="dropbtn" >TOP UP</button></li>
  <li class="dropdown">
    <button style="margin-top:10px" class="dropbtn" onclick="window.location.href = 'about_user.php';">ABOUT US</button></li>
  <li class="dropdown">
    <button style="margin-top:10px" class="dropbtn">KUY</button>
    <div class="dropdown-content">
      <a href="logout.php">LOGOUT</a>
    </div>
  </li>
</ul>
<h3 style="color:white;margin-left:325px">Daftar Film</h3>
  <?php
  echo "<table align='center' width=150px>";
  echo "<tr>";
  echo "<td valign='top'>";
  $result = mysqli_query($conn, "SELECT * FROM uu where  id%3=0");
  while ($row = mysqli_fetch_array($result)) {
       echo "<div class='gallery'>";
         echo "<a target='details.php' href='details_user.php?id=".$row['id']."'><img width='250' height='400' src='imagesuploadedf/".$row['imagename']."'></a>";
         echo "<div class='desc'><p>".$row['title']."</p></div>";
         echo "</div>";
         echo "<br>";
     }
  echo "</td>";
  echo "<td valign='top'>";
  $result = mysqli_query($conn, "SELECT * FROM uu where  id%3=1");
  while ($row = mysqli_fetch_array($result)) {
         echo "<div class='gallery'>";
         echo "<a target='details.php' href='details_user.php?id=".$row['id']."'><img width='250' height='400' src='imagesuploadedf/".$row['imagename']."'></a>";
         echo "<div class='desc'><p>".$row['title']."</p></div>";
         echo "</div>";
         echo "<br>";
     }
  echo "</td>";
  echo "<td valign='top'>";
  $result = mysqli_query($conn, "SELECT * FROM uu where  id%3=2");
  while ($row = mysqli_fetch_array($result)) {
         echo "<div class='gallery'>";
         echo "<a target='details.php' href='details_user.php?id=".$row['id']."'><img width='250' height='400' src='imagesuploadedf/".$row['imagename']."'></a>";
         echo "<div class='desc'><p>".$row['title']."</p></div>";
         echo "</div>";
         echo "<br>";
     }
  echo "</td>";
  echo "</tr>";
  echo "</table>";
   
  ?>
</body>
</html>