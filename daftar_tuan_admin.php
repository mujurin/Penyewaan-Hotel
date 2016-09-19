<html>
<head>
<meta http-equiv='refresh' content='10';url='daftar_tuan_admin.php'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	include "koneksi.php" ;
	$sql = "select * from tuan order by idtuan desc" ;
	$hasil = mysqli_query($kon, $sql) ;
	if (!$hasil)
		die ("Gagal query...".mysqli_error($kon)) ;
?>
<div class="table-responsive">   
<table class="table">
<thead>
<tr>
	<th>No</th>
	<th>Id Host</th>
	<th>Type of Home</th>
	<th>Accomodation</th>
	<th>Ordered</th>
	<th>Location</th>
	<th>Price</th>
	<th>Phone Number</th>
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
	<td><?php echo $data["idtuan"] ?></td>
	<td><?php echo $data["tiperumah"] ?></td>
	<td><?php echo $data["akomodasi"] ?></td>
	<td><?php echo $data["terpesan"] ?></td>
	<td><?php echo $data["lokasi"] ?></td>
	<td><?php echo $data["harga"] ?></td>
	<td><?php echo $data["notelp"] ?></td>
	<td>
		<a href="show_host_admin.php?idtuan=<?php echo $data["idtuan"] ?>">Detail</a><br/>
		<a href="delete_host_admin.php?idtuan=<?php echo $data["idtuan"] ?>">Delete</a><br/>
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