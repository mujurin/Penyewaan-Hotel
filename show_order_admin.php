<?php
include "koneksi.php" ;
$idpesan = $_GET['idpesan'] ;
$sql = "select * from pesan where idpesan = '{$idpesan}' " ;
$query = mysqli_query($kon, $sql) ;
$data = mysqli_fetch_array($query) ;
?>
<h1>Detail Ordered</h1>
<pre>
  Id Order		: <?php echo $data['idpesan'] ?> <br/>
  Id Member		: <?php echo $data['idpelanggan'] ?> <br/>
  Id Host		: <?php echo $data['idtuan'] ?> <br/>
  Number of Rooms	: <?php echo $data['jlhkamar'] ?> <br/>
  Length of Stay	: <?php echo $data['lama'] ?> <br/>
  Date	                : <?php echo $data['tgl'] ?>  <br/>
</pre>
<a href="daftar_pesan_admin.php">Back to show order list</a>