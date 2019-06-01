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
<h3 style="color:white;margin-left:275px">TEMPAT DUDUK</h3>
<form action="checkboxes.php" method="post">
<table style="color:white" align="center">
<tr>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E1"> E1</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E2"> E2</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E3"> E3</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E4"> E4</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E5"> E5</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E6"> E6</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E7"> E7</td>
    <td width=5%></td>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E8"> E8</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E9"> E9</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E10"> E10</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E11"> E11</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E12"> E12</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E13"> E13</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="E14"> E14</td>
</tr>
<tr>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D1"> D1</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D2"> D2</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D3"> D3</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D4"> D4</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D5"> D5</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D6"> D6</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D7"> D7</td>
    <td width=5%></td>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D8"> D8</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D9"> D9</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D10"> D10</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D11"> D11</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D12"> D12</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D13"> D13</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="D14"> D14</td>
</tr>
<tr>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C1"> C1</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C2"> C2</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C3"> C3</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C4"> C4</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C5"> C5</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C6"> C6</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C7"> C7</td>
    <td width=5%></td>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C8"> C8</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C9"> C9</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C10"> C10</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C11"> C11</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C12"> C12</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C13"> C13</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="C14"> C14</td>
</tr>
<tr>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B1"> B1</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B2"> B2</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B3"> B3</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B4"> B4</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B5"> B5</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B6"> B6</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B7"> B7</td>
    <td width=5%></td>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B8"> B8</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B9"> B9</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B10"> B10</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B11"> B11</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B12"> B12</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B13"> B13</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="B14"> B14</td>
</tr>
<tr>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A1"> A1</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A2"> A2</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A3"> A3</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A4"> A4</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A5"> A5</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A6"> A6</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A7"> A7</td>
    <td width=5%></td>
	<td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A8"> A8</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A9"> A9</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A10"> A10</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A11"> A11</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A12"> A12</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A13"> A13</td>
    <td><img width='50' height='50' src="duduk.png"><br><input type="radio" name="seat" value="A14"> A14</td>
</tr>
<tr >
	<td height="40"></td>
</tr>
<tr>
	<td colspan="3"></td>
	<td style="background-color:white;color:black" colspan="9" align="center">LAYAR</td>
	<td colspan="3" align="center"><input type='submit' name='submit' value='LANJUT' ></td>
</tr>
</form>
</body>
</html>

<?php
?>