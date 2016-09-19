<?php
include("koneksi.php") ;

$idpelanggan = $_GET["idpelanggan"] ;

$sql = "delete from pendaftaran where idpelanggan = '{$idpelanggan}'" ;

$query = mysqli_query($kon, $sql) ;

if($query){
	echo "Data berhasil di hapus";
}else{
	echo "Data gagal di hapus";
}
?>
<br/>
<a href="daftar_member_admin.php">Back to show order list</a>