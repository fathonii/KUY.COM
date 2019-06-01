<?php
?>
<html>
<head>
</head>
<body style="background-size: 1366px 768px;background-repeat: repeat;background-image:url('b3.png')">
    <link rel="stylesheet" href="style.css">
  <br><br><br>

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

</body>
</html>
