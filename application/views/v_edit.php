<html>
<head></head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). '/index.php/Crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>User</td>
				<td><input type="text" name="user" value="<?php echo $u->user ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="pass" value="<?php echo $u->pass ?>"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="level" value="<?php echo $u->level ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>