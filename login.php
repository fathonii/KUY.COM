<?php
?>
<html>
<head>
</head>
<link rel="stylesheet" href="style1.css">
<div class="lgg">
<body style="background-size: 1366px 768px;background-repeat: repeat;background-image:url('bg1.png')">
<br><br><br>
<div class="ulog">
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
</div>

<link rel="stylesheet" href="style.css">
		<div class="log-in">
		<form method="post" action="authen_login.php">
			<table align="center">
				<tr>
					<td><input type="text" name="user_id" id="user_id" placeholder="USERNAME"></td>
				</tr>
				<tr>
					<td><input type="Password" name="user_pass" id="user_pass" placeholder="PASSWORD"></td>
				</tr>
				<tr>
					<td><input type="submit" value="LOGIN" ></td>
				</tr>
			</table>
		</form>
		</div>

</body>
</div>
</html>
