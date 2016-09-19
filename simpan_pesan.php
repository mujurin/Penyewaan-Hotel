        <link rel="stylesheet" href="css/bootstrap.min.css">
<style type="text/css">
@media print{
	#tombol{
		display: none;
	}
    a {
        display: none;
    }
}
</style>
<div id="tombol"></br>
	<input  type="button" value="Back to Homepage" onClick="window.location.assign('index.php')">
	<input type="button" value="Print" onClick="window.print()">
</div>

<?php
include("koneksi.php") ;
//tangkap data
$idpelanggan = $_POST['idpelanggan'] ;
$idtuan = $_POST['idtuan'] ;
$jlhkamar = $_POST['jlhkamar'] ;
$lama = $_POST['lama'] ;

$sql_mulai_transaksi = "start transaction" ;
mysqli_query($kon, $sql_mulai_transaksi);

	//memeriksa sisa kursi
	$sql_sisa = "select *, (akomodasi-terpesan) as sisakamar from tuan where idtuan = '$idtuan'" ;
	$query_sisa = mysqli_query($kon, $sql_sisa);
	$data_sisa = mysqli_fetch_assoc($query_sisa) ;
	if($data_sisa['terpesan'] == $data_sisa['akomodasi'] )
	{
		echo "Room with id {$data_sisa['idtuan']} full." ;
		$sql_roolback = "roolback" ;
		mysqli_query($kon, $sql_roolback ) ;
		exit ;
	}

    if($jlhkamar > $data_sisa['sisakamar'] )
	{
		echo "Order too much" ;
		$sql_roolback = "roolback" ;
		mysqli_query($kon, $sql_roolback ) ;
		exit ;
	}


	//menyimpan krs
	$jlhkamar = $_POST['jlhkamar'] ;
	$lama = $_POST['lama'] ;
	$tanggal_pesan = date('Y-m-d h:i:s') ;
	$sql_pesan = "insert into pesan (idpelanggan, idtuan, jlhkamar, lama, tgl) 
	values ('{$idpelanggan}','{$idtuan}','{$jlhkamar}','{$lama}','{$tanggal_pesan}')" ;
	$query_pesan = mysqli_query($kon, $sql_pesan) ;
	if(!$query_pesan)
	{
		echo "Simpan pesanan gagal" ;
		$sql_roolback = "roolback" ;
		mysqli_query($kon, $sql_roolback ) ;
		exit ;
	}
	
	//update data terisi
	$sql_update_terpesan = "update tuan set terpesan = terpesan + '{$jlhkamar}' where idtuan = '{$idtuan}'" ;
	$query_update_terpesan = mysqli_query($kon, $sql_update_terpesan) ;
	if(!$query_update_terpesan){
		echo "Update data isi pesanan gagal" ;
		$sql_roolback = "roolback" ;
		mysqli_query($kon, $sql_roolback ) ;
		exit ;	
	} 

$sql_commit = "commit" ;
mysqli_query($kon, $sql_commit);
?>

<h1>The booking process successfully</h1>
<hr/>
<h1>Ordered</h1>
Email : <?php echo $idpelanggan ?><br/>
List Booking
<ol>
	<?php
		$sql_pesan_diambil = "select tuan.idtuan, tuan.tiperumah,  (tuan.harga*'{$jlhkamar}'*'{$lama}') as harga from tuan where idtuan = '{$idtuan}'";
		$query_pesan_diambil = mysqli_query($kon, $sql_pesan_diambil);
		$data_pesan_diambil = mysqli_fetch_assoc($query_pesan_diambil) ;
        $harga = $data_pesan_diambil['harga'];
		?>
		<table class="table table-striped" width="50%" border="1">
			<tr>
                <td width="50%">Id Host    </td><td width="50%">: <?php echo $data_pesan_diambil['idtuan']?> </td>
            </tr>
            <tr>
                <td>Type </td><td>: <?php echo $data_pesan_diambil['tiperumah']?> </td>
            </tr>
            <tr>
                <td>Many Booking </td><td>: <?php echo $jlhkamar ?></td>
            </tr>
            <tr>
                <td>Length of stay </td><td>: <?php echo $lama ?>  </td>
            </tr>
            <tr>    
                <td>Price </td><td>: <?php echo $harga?> </td>
            </tr>
            </table>
		
</ol>

<?php
    	//update data terisi
	$sql_update_pesan = "update pesan set harga = '{$harga}' where tgl = '{$tanggal_pesan}'" ;
	$query_update_pesan = mysqli_query($kon, $sql_update_pesan) ;
	if(!$query_update_pesan){
		$sql_roolback = "roolback" ;
		mysqli_query($kon, $sql_roolback ) ;
		exit ;	
	}
    ?>