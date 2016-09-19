<?php
	$nama = $_POST ["name"];
	$email = $_POST ["email"];
	$komentar = $_POST ["komentar"];
	include "koneksi.php" ;
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$sql = "insert into komen (nama,email, komen) values 
	('$nama','$email','$komentar')";
	$hasil = mysqli_query($kon,$sql) ;
    
	if (!$hasil) {
		echo "gagal simpan, silahkan diulangi! <br/> " ;
		echo mysqli_error($kon) ;
		echo "<br/><input class='btn btn-success btn-block' type='button' value='kembali' onClick='self.history.back()'>";
		exit;
	}else{
	header('Location: katakomen.php');
}
?>