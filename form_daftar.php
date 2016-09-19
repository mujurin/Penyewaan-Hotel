<!DOCTYPE html>
<html>
<head><title>Form Daftar</title>
        <link rel="stylesheet" href="csss/bootstrap-theme.css">
        <link rel="stylesheet" href="csss/bootstrap-theme.css.map">
        <link rel="stylesheet" href="csss/bootstrap-theme.min.css">
        <link rel="stylesheet" href="csss/bootstrap-theme.min.css.map">        
        <link rel="stylesheet" href="csss/bootstrap.css">
        <link rel="stylesheet" href="csss/bootstrap.css.map">
        <link rel="stylesheet" href="csss/bootstrap.min.css">
        <link rel="stylesheet" href="csss/bootstrap.min.css.map">

    
</head>
<body>
<form action="tujuan_form_daftar.php" method="post" data-toggle="validator">
<table class="table table-striped" border="0" align="center">
<tr>
<td width="50%">Nama</td>
<td><input type="text" name="nama" required="true" /></td>
</tr>
<tr>
<td>Nomor Telpon</td>
<td><input type="text" name="nomor_telpon" data-error="Bruh, that email address is invalid" required /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" required/></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" required></td>
</tr>
<tr>
<td rowspan="2">Jenis Kelamin</td>
<td><input type="radio" name="jk" value="Laki-laki" checked> Laki-laki</td>
</tr>
<tr>
<td><input type="radio" name="jk" value="Perempuan"> Perempuan</td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" required/></td>
</tr>
<tr>
    <td align="center"><input class="btn btn-success btn-block" type="reset" value="RESET"/></td>
    <td><input class="btn btn-success btn-block" name="kirim" type="submit" value="SUBMIT"/></td>
    </tr>
</table>
</form>
</body>
</html>