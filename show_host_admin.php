<?php
include "koneksi.php" ;
$idtuan = $_GET["idtuan"] ;
$sql = "select * from tuan where idtuan = '$idtuan' " ;
$query = mysqli_query($kon, $sql) ;
$data = mysqli_fetch_assoc($query) ;
?>
<h1>Detail Host</h1>
<pre>
  Id Host 		: <?php echo $data['idtuan'] ?> <br/>
  Type of Home		: <?php echo $data['tiperumah'] ?> <br/>
  Accomodation		: <?php echo $data['akomodasi'] ?> <br/>
  Ordered		: <?php echo $data['terpesan'] ?> <br/>
  Location		: <?php echo $data['lokasi'] ?> <br/>
  Price 	        : <?php echo $data['harga'] ?>  <br/>
  Phone Number 	        : <?php echo $data['notelp'] ?>  <br/>
</pre>
<a href="daftar_tuan_admin.php">Back to show host list</a>