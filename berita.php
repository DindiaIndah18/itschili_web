<?php
include 'koneksi.php';

$query = "SELECT * FROM berita";
$hasil = mysqli_query($con, $query) or die("Error in Selecting " . mysqli_error($connection));;

$data = array();
while ($row = mysqli_fetch_assoc($hasil)) {

  $data['data'][] = $row;


}
echo json_encode($data);

mysqli_close($con);
 ?>
