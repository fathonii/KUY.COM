<?php
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
    <button style="margin-left:550px;margin-top:10px"class="dropbtn">TOP UP</button></li>
  <li class="dropdown">
    <button style="margin-top:10px" class="dropbtn">ABOUT US</button></li>
  <li class="dropdown">
    <button style="margin-top:10px" class="dropbtn">KUY</button>
    <div class="dropdown-content">
      <a href="logout.php">LOGOUT</a>
    </div>
  </li>
</ul>
<h3 style="color:white;margin-left:325px">PILIHAN MAKANAN DAN MINUMAN YANG BISA ANDA PESAN</h3>
<form action="insert3.php" method="post">
<table align="center">
<tr>
	<td><input type="radio" name="mm" value="Pop Corn"><img width='150' height='200' src="ma1.jpg"><br> </td>
    <td width=20%></td>
	<td><input type="radio" name="mm" value="Coca Cola"><img width='120' height='200' src="mi1.jpeg"><br> </td>
</tr>
<tr>
    <td><input type="radio" name="mm" value="Fanta"><img width='150' height='200' src="mi2.jpg"><br> </td>
    <td width=30%></td>
    <td><input type="radio" name="mm" value="Nu Green Tea"><img width='200' height='200' src="mi3.jpg"><br> </td>
</tr>
<tr >
	<td height="40"></td>
</tr>
<tr>
	<td style="color:white" colspan="2">*CEKLIST JIKA TERTARIK MEMESAN</td>
	<td align="center"><input type='submit' name='submit' value='LANJUT' ></td>
</tr>
</form>
</body>
</html>

<?php
?>