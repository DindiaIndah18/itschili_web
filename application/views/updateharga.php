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
<?php foreach($harga as $h){ ?>
<form action="<?php echo base_url().'index.php/listharga/update'; ?>" method="post">
<table style="margin:25px auto;">
<tr>
<td>Harga :</td>
<td>
<input type="hidden" name="id_harga" value="<?php echo $h->id_harga ?>">
<input type="text" name="harga" value="<?php echo $h->harga ?>"></td>
</tr>
<tr>
<td>Tanggal :</td>
<td><input type="date" name="tanggal" value="<?php echo $h->tanggal ?>"></td>
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