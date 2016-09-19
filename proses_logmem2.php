<?php
   session_start();
   include "koneksi.php";
   $loginsaya = $_POST['idpelanggan'];
   $passwordsaya = $_POST['password'];
   $ingat = $_POST['simpan_user'];
  $perintahQuery = "SELECT * from pendaftaran where idpelanggan = '$loginsaya' or email = '$loginsaya'";

  $hasilQuery = mysqli_query($kon,$perintahQuery);
 if (mysqli_num_rows($hasilQuery)== 0){
 	$ketemu = false;
	$sudahdaftar = false;
 } else{
 	$sudahdaftar = true;
 	$data = mysqli_fetch_array($hasilQuery);
	
	if($passwordsaya == $data['password']){
	 	$ketemu=true;
		$_SESSION['idpelanggan'] = $loginsaya;
        $_SESSION['nama'] = $data['nama'] ;
	} else {
	   $ketemu=false;
    }
 }  
if ( ($loginsaya="admin") && ($passwordsaya=="admin")) {
	$_SESSION['NIM'] = '000';
	$_SESSION['idpelanggan'] = 'admin';//HARUS KAPITAL
	if($ingat==1){
		setcookie("idpelanggan",$loginsaya,time()+360) ;
		setcookie("password",$password,time()+360) ;
	}
	$alamat="http://localhost/projek/menu_admin.php";
	header ("location: $alamat");
}
if ($sudahdaftar == false) {   
   echo " <h3><center><br/><br/><br/><br/><br/><br/><br/><br/>
	  Maaf,<br/> Anda Belum Terdaftar sebagai Member Kami<br/></center></h3>
	  <center>Silakan <a href=daftar_mhs.php>Mendaftar</a> untuk dapat mengakses Halaman Ini</center>";
} else {
	 if ($ketemu == true){
	   $_SESSION['loginsaya'] = $loginsaya;
       header ("location: index.php");   
	} else  {    
		$alamat = "http://localhost/projek/login_pelanggan.php?pesan=login atau password salah";
       header ("location: $alamat");
   }
}
?>