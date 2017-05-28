<html>
<head>
<title></title>
</head>
<body>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>ID User</th>
			<th>Nama</th>
			<th>User</th>
			<th>Password</th>
			<th>Level</th>
			<th>Aksi</th>
		</tr>
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->id_user ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->user ?></td>
			<td><?php echo $u->pass ?></td>
			<td><?php echo $u->level ?></td>
			<td>
			      <?php echo anchor('Crud/edit/'.$u->id_user,'Edit'); ?>
                              <?php echo anchor('Crud/hapus/'.$u->id_user,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table><h4><center><?php echo anchor('Crud/tambah','Tambah data'); ?></center></h4>
</body>
</html>