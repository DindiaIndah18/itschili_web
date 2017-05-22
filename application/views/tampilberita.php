<!DOCTYPE html>
<html>
<head>
<title> IT'S CHILI </title>
</head>
<body>
<center>
<h1>Menambah Data Berita Artikel</h1>
<h3><?php echo anchor('tambahberita/tambah','Tambah Data'); ?></h3>
</center>
<table style="margin:25px auto;" border="2">
<tr>
<td>No</td>
<td>Judul Artikel</td>
<td>Isi Artikel</td>
<td>Kategori Artikel</td>
</tr>
<?php 
$no = 1;
foreach($post as $u){
?>
<tr>
<td><?php echo $no++ ?></td>
<td><?php echo $u->judul ?></td>
<td><?php echo $u->isi ?></td>
<td><?php echo $u->kategori ?></td>
<td>
<?php echo anchor('tambahberita/edit/'.$u->id_post,'Edit'); ?>
	<?php echo anchor('tambahberita/hapus/'.$u->id_post,'Hapus'); ?>
</td>
</tr>
<?php } ?>
</table>
</body>
</html>