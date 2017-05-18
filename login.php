<?php
include "koneksi.php";  //memanggil fungsi koneksi di file db.php

//deklarasi

$email =$_POST['email'];
$password=$_POST['password'];
//$response = array();

//perintah SQL untuk meampilkan data
$query = "SELECT * FROM user WHERE pass='$password' AND email ='$email'";
$hasil = mysqli_query($con,$query);

//jika data nya ada atau lebih dari 0
$hasil = mysqli_num_rows($hasil);
if($hasil > 0){
    $response['result']= true ;
    $response['msg']="login berhasil";
    echo json_encode($response);

} else {

 $response['result']= false ;
    $response['msg']="maaf,terjadi kesalahan";
    echo json_encode($response);
    //echo $email, $password;
}

mysqli_close($connection);
?>
