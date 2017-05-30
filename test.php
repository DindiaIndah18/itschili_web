<?php

  define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','itschillifix');

	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
  $datalok = array();
  $now = date('Y-m-d');

  $sql = "SELECT * FROM `pasar`";
  $p = mysqli_query($con,$sql);
  $hasil = array();
  while($data = mysqli_fetch_array($p)){
    $krt1 = "0";
    $rwt1 = "0";
    $rwt2 = "0";
    $rwt3 = "0";
    $rwt4 = "0";
    $rwt5 = "0";
    $tw1 = "0";

    $id = $data['id_pasar'];
    $sql = "SELECT * FROM harga h left join jenis j on h.id_jenis=j.id_jenis where tgl = '$now' and id_pasar = '$id'";
    $datalokasi = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($datalokasi)){
      if ($row['id_jenis'] == "KRT1") {
        $krt1 = $row['harga'];
      }elseif ($row['id_jenis'] == "RWT1") {
        $rwt1 = $row['harga'];
      }elseif ($row['id_jenis'] == "RWT2") {
        $rwt2 = $row['harga'];
      }elseif ($row['id_jenis'] == "RWT3") {
        $rwt3 = $row['harga'];
      }elseif ($row['id_jenis'] == "RWT4") {
        $rwt4 = $row['harga'];
      }elseif ($row['id_jenis'] == "RWT5") {
        $rwt5 = $row['harga'];
      }elseif ($row['id_jenis'] == "TW1") {
        $tw1 = $row['harga'];
      }

  	}
    array_push($hasil, array(
      'lokasi' => $data['nama_pasar']." - ".$data['nama_lokasi'],
      'Merah Keriting' => $krt1,
      'Rawit Hijau' => $rwt1,
      'Rawit Lokal Hijau' => $rwt2,
      'Rawit Lokal Putih' => $rwt3,
      'Rawit Super' => $rwt4,
      'Rawit Halus' => $rwt5,
      'Merah Besar' => $tw1
    ));
	}

	echo json_encode(array('result'=>$hasil));

	mysqli_close($con);
