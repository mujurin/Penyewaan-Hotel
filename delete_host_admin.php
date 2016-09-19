<?php
include("koneksi.php") ;

$idtuan = $_GET["idtuan"] ;

$sql = "delete from tuan where idtuan = '{$idtuan}'" ;

$query = mysqli_query($kon, $sql) ;

if($query){
	echo "Data berhasil di hapus";
}else{
	echo "Data gagal di hapus";
}
?><br/>
<a href="daftar_tuan_admin.php">Back to show host list</a>