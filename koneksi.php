<?php
error_reporting(E_ALL ^ E_DEPRECATED) ;
	$host = "localhost" ;
	$user = "root" ;
	$pass = "" ;
	
	$kon = mysqli_connect($host, $user, $pass) ; 
	if (!$kon)
		die("gagal koneksi....") ;
	$hasil = mysqli_select_db($kon, "penyewaan") ;
?>