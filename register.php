<?php
include 'koneksi.php';  //memanggil file db.php

//mengecek variabel
if(isset($_POST["email"]) && isset ($_POST["password"]))
 {
 $email = $_POST['email'];
 $password = $_POST['password'];

 //perintah SQL untuk memasukan data
 $query = "INSERT INTO user VALUES ('','$password','$email')";
 $hasil  = mysqli_query($con,$query);
 if($hasil)
  {
      $response["result"]= true ;
      $response["msg"]= "Register berhasil, silakan login";
      echo json_encode($response);
  }
 else {
     $response['result']= false ;
     $response['msg']="maaf,terjadi kesalahan";
     echo json_encode($response);
  }
}else{
    $response['result']= false ;
    $response['msg']="maaf, data salah";
    echo json_encode($response);
}
mysqli_close($connection);
?>
