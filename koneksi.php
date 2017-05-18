<?php
 $DBhost = "localhost";
 $DBuser = "root";
 $DBpass = "";
 $DBname = "sichili";

$con = mysqli_connect($DBhost,$DBuser,$DBpass,$DBname);

    if ($con->connect_errno) {
        die("ERROR : -> ".$con->connect_error);
    }
 ?>
