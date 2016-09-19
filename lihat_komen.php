<html>
<head>
	<meta http-equiv='refresh' content='10';url='daftar_member_admin.php'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	include "koneksi.php" ;
	$sql = "select * from komen order by email desc" ;
	$hasil = mysqli_query($kon, $sql) ;
	if (!$hasil)
		die ("Gagal query...".mysqli_error($kon)) ;
?>
<div class="table-responsive">   
<table class="table">
<thead>
<tr>
	<th>Email</th>
	<th>Name</th>
	<th>Comment</th>
</tr>
</thead>
<tbody> 
<?php
$no = 1 ;
while($data=mysqli_fetch_assoc($hasil)) {
?>
  <tr>
	<td><?php echo $no ?></td>
	<td><?php echo $data["email"] ?></td>
	<td><?php echo $data["nama"] ?></td>
	<td><?php echo $data["komen"] ?></td>
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