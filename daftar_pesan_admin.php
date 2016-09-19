<html>
<head>
	<meta http-equiv='refresh' content='10';url='daftar_pesan_admin.php'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	include "koneksi.php" ;
	$sql = "select * from pesan order by idpesan desc" ;
	$hasil = mysqli_query($kon, $sql) ;
	if (!$hasil)
		die ("Gagal query...".mysqli_error($kon)) ;
?>
<div class="table-responsive">   
<table class="table">
<thead>
<tr>
	<th>No</th>
	<th>Id Order</th>
	<th>Id Member</th>
	<th>Id Host</th>
	<th>Number of Rooms</th>
	<th>Length of Stay</th>
	<th>Date</th>
	<th>Operation</th>
</tr> 
</thead>
<tbody> 
<?php
$no = 1 ;
while($data=mysqli_fetch_assoc($hasil)) {
?>
  <tr>
	<td><?php echo $no ?></td>
	<td><?php echo $data["idpesan"] ?></td>
	<td><?php echo $data["idpelanggan"] ?></td>
	<td><?php echo $data["idtuan"] ?></td>
	<td><?php echo $data["jlhkamar"] ?></td>
	<td><?php echo $data["lama"] ?></td>
	<td><?php echo $data["tgl"] ?></td>
	<td>
		<a href="show_order_admin.php?idpesan=<?php echo $data["idpesan"] ?>">Detail</a><br/>
		<a href="delete_order_admin.php?idpesan=<?php echo $data["idpesan"] ?>">Delete</a><br/>
	</td>
  </tr>  
<?php
   $no++ ;	
}
?>
</tbody>
 </table>
  </div>
</body>
</html>