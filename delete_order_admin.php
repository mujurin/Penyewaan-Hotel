<?php
include("koneksi.php") ;

$idpesan = $_GET["idpesan"] ;

$sql = "delete from pesan where idpesan = '{$idpesan}'" ;

$query = mysqli_query($kon, $sql) ;

if($query){
	echo "Data berhasil di hapus";
}else{
	echo "Data gagal di hapus";
}

?><br/>
<a href="daftar_pesan_admin.php">Back to show order list</a>