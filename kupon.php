<?php
$conn = mysqli_connect("localhost", "root", "", "kuy");
$result = mysqli_query($conn, "SELECT judul_film,harga_film,makan_minum,harga_makan_minum, harga_film+harga_makan_minum AS 'jumlah'  FROM pembeli order by id_beli desc limit 1");
?>
<html>
<head>
</head>
<body style="background-size: 1366px 768px;background-repeat: no-repeat;background-image:url('b3.png')">
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
<br>
<h3 style="color:white;margin-left:325px">PEMBAYARAN</h3><br>
<h3 style="color:white;margin-left:400px">DETAIL PESANAN</h3>
<TABLE align='center'style="color:white">
  <TR>
    <TH>PRODUK</TH>
    <th width='10%'></th>"
    <TH>HARGA</TH>
  </TR>
  <?php
  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['judul_film']."</td>";
    echo "<td width='10%'></td>";
    echo "<td>Rp.".$row['harga_film']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$row['makan_minum']."</td>";
    echo "<td width='10%'></td>";
    echo "<td>Rp.".$row['harga_makan_minum']."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>TOTAL</td>";
    echo "<td width='10%'></td>";
    echo "<td>Rp.".$row['jumlah']."</td>";
    echo "</tr>";
  }?>
</TABLE><br>
<h3 align="center" style="color:white">CODE VOUCHER</h3>
<input style="margin-left:525px;width:300px" type="text" name="" /><br><br>
<input style="margin-left:525px;width:300px" type="submit" name="" value="GUNAKAN VOUCHER"/><br><br>
<form action="bayar.php">
  <input style="margin-left:950px;" type="submit" name=""  value="BAYAR"/>
</form>
</body>
</html>
