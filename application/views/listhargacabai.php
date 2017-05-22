<!DOCTYPE html>
<html>
<head>
<title> IT'S CHILI </title>
</head>
<body>
<center>
<h1>List Harga Cabai Per Hari</h1>
</center>
<table style="margin:25px auto;" border="2">
<tr>
<td>No</td>
<td>Harga</td>
<td>Tanggal</td>

</tr>
<?php 
$no = 1;
foreach($harga as $h){
?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $h->harga ?></td>
<td><?php echo $h->tanggal ?></td>

<td>
<?php echo anchor('listharga/edit/'.$h->id_harga,'Edit'); ?>
	
</td>
</tr>
<?php } ?>
</table>
</body>
</html>