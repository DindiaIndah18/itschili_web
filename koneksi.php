<?php
$host 	="localhost";
$user	="root";
$pass	="";
$db 	="cabai";

//koneksi
mysql_connect($host, $user, $pass) or die (mysql_error());

//pilih database
mysql_select_db($db) or die (mysql_error(). "Database Not Found");
?>