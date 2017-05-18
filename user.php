<?php
//memanggil file koneksi
include "koneksi.php";

//syntax Mysql untuk melihat semua record yanng ada di tabel
$sql = "select * from user";

//execetute Query diatas
$query = mysql_query($sql);
while($dt=mysql_fetch_array($query)){
	$item[] = array(
		"username" => $dt["username"],
		"password"		=> $dt["password"],
		"email"	=> $dt["email"],
		);
}
//Menampung data yang dihasilkan
$json = array(
	'result' => 'Success',
	'item' => $item
	);

	//merubah data kedalam bentuk JSON
	echo json_encode($json);
?>