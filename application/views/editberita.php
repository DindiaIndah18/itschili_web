<!DOCTYPE html>
<html>
<head>
<title> IT'S CHILI </title>
</head>
<body>
<center>
<h1>Merubah Data Artikel</h1>
<h3>Masukkan Data</h3>
</center>
<?php foreach($post as $u){ ?>
<form action="<?php echo base_url().'index.php/tambahberita/update'; ?>" method="post">
<table style="margin:25px auto;">
<tr>
<td>Judul Artikel :</td>
<td>
<input type="hidden" name="id_post" value="<?php echo $u->id_post ?>">
<input type="text" name="judul" value="<?php echo $u->judul ?>"></td>
</tr>
<tr>
<td>Isi Artikel :</td>
<td><input type="text" name="isi" value="<?php echo $u->isi ?>"></td>
</tr>
<tr>
<td>Kategori Artikel :</td>
<td><input type="text" name="kategori" value="<?php echo $u->kategori ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Save"></td>
</tr>
</table>
</form>
<?php } ?>
</body>
</html>