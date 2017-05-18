<?php
require ("koneksi.php");
?>
<html>
    <head>
        <title>Iput data</title>
    </head>
    <body>
        <form action="?action=add" method="post">
            <label>Nama </label>
<!--            <select name="mahasiswa">
                <?php
 
                    $sql = mysql_query("select * from mahasiswa");
                    while ($row = mysql_fetch_array($sql)) {
                        echo '<option value="'.$row['id'].'">'.$row['nama_mahasiswa'].'</option>';
                    }
                ?>
            </select> -->
            <br>
           <!-- <label>Mata Kuliah</label>
                <?php
                    $sql = mysql_query("select * from matkul");
                    while ($row = mysql_fetch_array($sql)) {
                        echo '<input type="checkbox" name="matkul[]" value="'.$row['id'].'">'.$row['nama_matkul'].' ';
                    }
                ?>
            <br>-->
            <input type="submit" value="simpan">
        </form>
    </body>
</html>
 
<?php
 
if ($_GET['action'] == "add") {
 
    $mahasiswa = $_POST['mahasiswa'];
    $matkuls   = $_POST['matkul'];
 
    $matkul = json_encode($matkuls);
 
    $sql = mysql_query("INSERT INTO `krs` (`mahasiswa`,`matkul`) VALUES ('".$mahasiswa."', '".$matkul."')");
 
    if ($sql) {
        echo "data berhasil disimpan";
    } else {
        echo "data gagal disimpan";
    }
}