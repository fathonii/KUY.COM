<?php
$conn = mysqli_connect("localhost", "root", "", "kuy");
$result = mysqli_query($conn, "SELECT * FROM pembeli order by id_beli desc limit 1");
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<html>
<head>
</head>
<body style="background-size: 1366px 768px;background-repeat: no-repeat;background-image:url('bg2.png')">
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
<div class="about">
<h2 align='center' style="color:white">KODE TIKET</h2><br>
<h2 align='center' style="color:white"><?php echo generateRandomString();?></h2><br>
<h3 style="color:white;margin-left:400px"></h3>
<TABLE align='center'style="color:white">
  <TR>
    <TH>DETAIL PESANAN</TH>
    <th width='5%'></th>"
    <TH></TH>
  </TR>
  <?php
  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>PRODUK: </td>";
    echo "<td width='10%'></td>";
    echo "<td>".$row['judul_film'].", ".$row['makan_minum']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>LOKASI:</td>";
    echo "<td width='10%'></td>";
    echo "<td>".$row['tempat']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>JAM TAYANG:</td>";
    echo "<td width='10%'></td>";
    echo "<td>".$row['jadwal']."</td>";
    echo "</tr>";
  }?>
</TABLE>
</div>
</body>
</html>
