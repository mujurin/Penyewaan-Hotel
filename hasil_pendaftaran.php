<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
<?php
	include "koneksi.php" ;
    $idpelanggan = $_GET["idpelanggan"] ;
	$sql = "select * from pendaftaran where idpelanggan = '{$idpelanggan}' " ;
	$hasil = mysqli_query($kon, $sql) ;
	if (!$hasil)
		die ("Gagal query...".mysqli_error($kon)) ;
?>
<table border="1">
<tr>
	<th>No</th>
	<th>Id Anggota</th>
	<th>Nama</th>
	<th>Nomor Telpon</th>
	<th>Email</th>
	<th>Alamat</th>
	<th>Jenis Kelamin</th>
	<th>Tanggal Daftar</th>
	<th>Operasi</th>
</tr> 
<?php
$no = 1 ;
while($data=mysqli_fetch_assoc($hasil)) {
?>
  <tr>
	<td><?php echo $no ?></td>
	<td><?php echo $data["idpelanggan"] ?></td>
	<td><?php echo $data["nama"] ?></td>
	<td><?php echo $data["no_tlpn"] ?></td>
	<td><?php echo $data["email"] ?></td>
	<td><?php echo $data["alamat"] ?></td>
	<td><?php echo $data["jk"] ?></td>
	<td><?php echo $data["tgl_dftr"] ?></td>
	<td>
		<a href="tampil_anggota.php?idpelanggan=<?php echo $data["idpelanggan"] ?>">Lihat</a><br/>
		<a href="hapus_pelanggan.php?idpelanggan=<?php echo $data["idpelanggan"] ?>">Hapus</a><br/>
		<a href="update_anggota.php?idpelanggan=<?php echo $data["idpelanggan"] ?>">Edit</a><br/>
	</td>
  </tr>  
<?php
   $no++ ;	
}
?>
</table>
</body>
</html>
<a href="form_daftar.php">Daftar</a>