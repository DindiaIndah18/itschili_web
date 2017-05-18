<?php require ("koneksi.php"); ?>
<html>
    <head>
        <title>Daftar</title>
    </head>
    <body>
        <form action="?action=add" method="post">
            <label>User Name</label>
             <input type="text" name="username">
            <br>
            <label>Password</label>
			
               <input type="text" name="password">
				
            <br>
			<label>Email</label>
            <input type="text" name="email">
            <br>
            <input type="submit" value="simpan">
        </form>
    </body>
</html>
 
<?php
 
if ($_GET['action'] == "simpan") {
 
    $username = $_POST['username'];
    $password   = $_POST['password'];
	$email   = $_POST['email'];
	
 
    $username = json_encode($username);
	$password = json_encode($password);
	$email = json_encode($email);
 
    $sql = mysql_query("INSERT INTO 'user' ('username','password','email') VALUES ('".$username."', '".$password."' , '".$email."')");
 
    if ($sql) {
        echo "data berhasil disimpan";
    } else {
        echo "data gagal disimpan";
    }
}