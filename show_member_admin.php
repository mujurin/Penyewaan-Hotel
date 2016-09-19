<?php
include("koneksi.php") ;
$idpelanggan = $_GET["idpelanggan"] ;
$sql = "select * from pendaftaran where idpelanggan = '{$idpelanggan}' " ;
$query = mysqli_query($kon, $sql) ;
$data = mysqli_fetch_assoc($query) ;
?>
<h1>Detail Member</h1>
<pre>
  Id Anggota 		: <?php echo $data['idpelanggan'] ?> <br/>
  Nama			: <?php echo $data['nama'] ?> <br/>
  Nomor Telpon		: <?php echo $data['no_tlpn'] ?> <br/>
  Email			: <?php echo $data['email'] ?> <br/>
  Alamat		: <?php echo $data['alamat'] ?> <br/>
  Jenis Kelamin 	: <?php echo $data['jk'] ?>  <br/>
  Tanggal Daftar 	: <?php echo $data['tgl_dftr'] ?>  <br/>
</pre>
<a href="daftar_member_admin.php">Back to show member list</a>