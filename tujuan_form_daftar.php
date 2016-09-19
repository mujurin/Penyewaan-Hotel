<!DOCTYPE html>
<html>
<head><title>Data Pendaftaran</title>
    <style>
h3 {
    border: 0px solid black;
    border-collapse: collapse;
    font-family: sans-serif;
}
</style></head>
<body>
<?php
    
	if (isset($_POST["nama"]) and !empty($_POST["nama"])) {
		$kode[]=substr($_POST["nama"], 0, 3) ;
	}
	if (isset($_POST["nomor_telpon"]) and !empty($_POST["nomor_telpon"])) {
		$kode[]=substr($_POST["nomor_telpon"], 1, 3) ;
	}
	if (isset($_POST["email"]) and !empty($_POST["email"])) {
	}
	if (isset($_POST["alamat"]) and !empty($_POST["alamat"])) {
	}
	if (isset($_POST["jk"]) and !empty($_POST["jk"])) {
	}
	if (isset($_POST["pass"]) and !empty($_POST["pass"])) {
	}
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$banyak_array = count($kode) ;
	if ($banyak_array == 2) {
		$set_kode = implode("/",$kode) ;
	}
	$nama = $_POST ["nama"];
	$nomor_telpon = $_POST ["nomor_telpon"];
	$email = $_POST ["email"];
	$alamat = $_POST ["alamat"];
	$jk = $_POST ["jk"];
	$password = md5($_POST['password']);
	include "koneksi.php" ;
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$sql = "insert into pendaftaran (idpelanggan,nama, no_tlpn, email, alamat, jk, tgl_dftr, password) values 
	('$set_kode','$nama','$nomor_telpon','$email','$alamat','$jk',NOW(),'$password')";
	$hasil = mysqli_query($kon,$sql) ;
    
	if (!$hasil) {
		echo "Failed to save the data <br/> " ;
		echo mysqli_error($kon) ;
		echo "<br/><input class='btn btn-success btn-block' type='button' value='kembali' onClick='self.history.back()'>";
		exit;
	}
	else {
		echo "<h3 >"."Your account has been successfully created. please login"."</h3>";
		echo "<h3>";
		echo "<table>";
		echo "<tr><td>Nama 	</td><td>: "."$nama</td></tr>";
		echo "<tr><td>Telepon </td><td>: "."$nomor_telpon</td></tr>";
		echo "<tr><td>Email </td><td>: "."$email</td></tr>";
		echo "<tr><td>Alamat </td><td>: "."$alamat</td></tr>";
		echo "<tr><td>Jenis Kelamin </td><td>: "."$jk</td></tr>";
		echo "</table>";
		echo "</h3>";
        
	}
?> <br/>
    
    
</body>
</html>