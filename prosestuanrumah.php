<!DOCTYPE html>
<html>
<head><title>Data Tuan Rumah</title></head>
</html>
<?php
	if (isset($_POST["harga"]) and !empty($_POST["harga"])) {
		$kode[]=substr($_POST["harga"], 0, 3) ;
	}
	if (isset($_POST["tlp"]) and !empty($_POST["tlp"])) {
		$kode[]=substr($_POST["tlp"], 1, 3) ;
	}
	$banyak_array = count($kode) ;
	if ($banyak_array == 2) {
		$ini_kode = implode("/",$kode) ;
	}
	$tipe = $_POST["tipe"] ;
	$akomodasi = $_POST ["akomodasi"];
	$lokasi = $_POST ["lokasi"];
	$harga = $_POST ["harga"];
	$nomor_telpon = $_POST["tlp"] ;
	
	$foto = $_FILES['foto']['name'];
	$tmpName = $_FILES['foto']['tmp_name'];
	$size = $_FILES['foto']['size'];
	$type = $_FILES['foto']['type'];
	
	$maxsize = 1500000;
	$typeYgBoleh = array("image/jpeg","image/png","image/gif");
	
	$dirFoto = "pict";
	if (!is_dir($dirFoto))
		mkdir($dirFoto);
	$fileTujuanFoto = $dirFoto."/".$foto;
	
	$dirThumb = "thumb";
	if (!is_dir($dirThumb))
		mkdir($dirThumb);
	$fileTujuanThumb = $dirThumb."/t_".$foto;

if ($size > 0){
	if ($size > $maxsize){
		echo "Ukuran File Terlalu Besar<br/>";
		$dataValid="TIDAK";
	}
	if (!in_array($type, $typeYgBoleh)){
		echo "Type File Tidak Dikenal <br/>";
		$dataValid="TIDAK";
	}
}
	include "koneksi.php" ;
	$sql = "insert into tuan (idtuan, tiperumah, akomodasi, lokasi, harga, foto, notelp) values 
	('$ini_kode','$tipe','$akomodasi','$lokasi','$harga','$foto','$nomor_telpon')" ;
	$hasil = mysqli_query($kon, $sql) ;
	if (!$hasil) {
		echo "gagal simpan, silahkan diulangi! <br/> " ;
		echo mysqli_error($kon) ;
		echo "<br/><input type='button' value='kembali' onClick='self.history.back()'>";
		exit;
	}
	else {
		
	}
if ($size > 0){
		if (!move_uploaded_file($tmpName, $fileTujuanFoto)){
			echo "Gagal Upload Gambar...<br/>";
			echo "<a href='proses8.php'>Daftar Barang</a>";
			exit;
		} else {
			buat_thumbnail($fileTujuanFoto, $fileTujuanThumb);
		}
	}
	
	echo "<br/><h2>Upload successful</h2> <br/>";
	
	function buat_thumbnail($file_src, $file_dst){
		//hapus jika thumbnail sebelumnya sudah ada
		list($w_src,$h_src,$type) = getImageSize($file_src);
		
		switch ($type) {
			case 1; //gif -> jpg
				$img_src = imagecreatefromgif($file_src);
				break;
			case 2; // jpeg -> jpg
				$img_src = imagecreatefromjpeg($file_src);
				break;
			case 3; // png -> jpg
				$img_src = imagecreatefrompng($file_src);
				break;
		}
		
		$thumb = 100; //max size untuk thumb
		if($w_src > $h_src){
			$w_dst = $thumb;  //landscape
			$h_dst = round($thumb / $w_src * $h_src);
		} else {
			$w_dst = round($thumb / $w_src * $h_src); // potrait
			$h_dst = $thumb;
		}
		
		$img_dst = imagecreatetruecolor($w_dst,$h_dst); //resample
		
		imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $w_dst, $h_dst, $w_src, $h_src);
		imagejpeg ($img_dst, $file_dst); // Sempan Thumbnail
		//bersihkan memori
		imagedestroy($img_src);
		imagedestroy($img_dst);
	}
?>