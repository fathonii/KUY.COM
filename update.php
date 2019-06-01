<html>
<body style="background-size: 1366px 768px;background-repeat: repeat;background-image:url('bg1.png')">
    <link rel="stylesheet" href="style.css">
  <br><br><br>
<div class="ulog">
 <ul>
  <li class="dropdown">
    <img style="margin-left:70px" width='60' height='70' src='logo.png' onclick="window.location.href = 'Home_admin.php';"><a href=hme.php></a></li>
  <li class="dropdown">
    <button style="margin-left:-100px;margin-top:10px" class="dropbtn" onclick="window.location.href = 'film_admin.php';">FILM</button
    <a href=film_admin.php></a></li>
  <li class="dropdown">
    <button style="margin-left:700px;margin-top:10px" class="dropbtn">KELOLA DATA</button>
    <div class="dropdown-content">
      <a style="margin-left:700px;margin-top:10px" href="insert.php">TAMBAH</a>
      <a style="margin-left:700px;margin-top:10px" href="update.php">HAPUS</a>
    </div>
  </li>
  <li class="dropdown">
    <button style="margin-top:10px" class="dropbtn">KUY</button>
    <div class="dropdown-content">
      <a href="logout.php">LOGOUT</a>
    </div>
  </li>
</ul>
<br><br>
<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
$conn = mysqli_connect("localhost", "root", "", "kuy");
$result = mysqli_query($conn, "SELECT * FROM uu");
?>
  <?php
         echo "<table align='center' border='1' width=1000px>";
         echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Judul</th>";
            echo "<th>Deskripsi</th>";
            echo "<th></th>";           
         echo "</tr>";
   while ($row = mysqli_fetch_array($result)) {
         echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['image_text']."</td>";
            echo "<td><a href='delete.php?id=".$row['id']."'>Delete</td>";
         echo "</tr>";
      }
         echo "</table>";
  ?>
</body>
</html>