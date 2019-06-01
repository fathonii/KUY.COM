<!DOCTYPE html>
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
<br><br><br><br><br><br><br><br>
<!--Make sure to put "enctype="multipart/form-data" inside form tag when uploading files -->
<form action="upload.php" method="post" enctype="multipart/form-data" >
<!--input tag for file types should have a "type" attribute with value "file"-->

<table align="center" border="2">
	<tr>
		<td align="center"><input type="file" name="uploadfile" /></td>
	</tr>
	<tr>
		<td align="center"><textarea id="text" cols="auto" rows="auto" name="image_text" placeholder="Desc..."></textarea></td>
	</tr>
	<tr>
		<td align="center"><input type="text" name="title" placeholder="Judul..."/></td>
	</tr>
	<tr>
		<td align="center"><input type="submit" name="uploadfilesub" value="upload"/></td>
	</tr>
</table>
</form>
</body>
</html>