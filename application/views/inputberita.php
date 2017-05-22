<!DOCTYPE html>
<html>
<head>
<title> IT'S CHILI </title>
</head>
<body>
<center>
<h1> Menambah Data Berita Artikel </h1>
<h3>Masukkan Data</h3>
</center>
<form action="<?php echo base_url().'index.php/tambahberita/tambah_baru'; ?>" method="post">
<table style="margin:25px auto;">
<tr>
<td>Judul Artikel :</td>
<td><input type="text" name="judul"></td>
</tr>
<tr>
<td>Isi Artikel :</td>
<td><input type="textarea" name="isi"></td>
</tr>
<tr>
<td>Kategori Artikel :</td>
<td><input type="text" name="kategori"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="add"></td>
</tr>
</table>
</form>
</body>
</html>