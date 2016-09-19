<?php
   session_start();
   include "koneksi.php";
   $loginsaya = $_POST['idpelanggan'];
   $passwordsaya = md5($_POST['password']);
   error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
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
	header("location: menu_admin.php");
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
		header("location: gagal_login.php");
   }
}
?>