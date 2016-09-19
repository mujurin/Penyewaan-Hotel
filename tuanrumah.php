<!DOCTYPE html>
<html>
<head><title>Form Host</title>
<style>
input[type=submit] {
    background: linear-gradient(to bottom, #0088CC, #0044CC);
    border: 1px solid #0088CC;
    color: #FFF;
    margin: 4px 10px;
    padding: 5px;
    width: 100px;
}

input[type=submit]:hover {
    cursor: pointer;
}

input[type=submit]:active {
    background: #0044CC;
}

input[type=reset] {
    background: linear-gradient(to bottom, #0088CC, #0044CC);
    border: 1px solid #0088CC;
    color: #FFF;
    margin: 4px 10px;
    padding: 5px;
    width: 100px;
}

input[type=reset]:hover {
    cursor: pointer;
}

input[type=reset]:active {
    background: #0044CC;
}
:-moz-placeholder {
    color: blue;
}
 
::-webkit-input-placeholder {
    color: blue;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
form {
	font-family: "Calibri";
	font-size: 15px;
}
img {
	width : 25px;
	height : 25px;
}
</style>
</head>
<body>
<form action="prosestuanrumah.php" method="post" enctype="multipart/form-data">
<table class="table table-striped" align="center" width="800px" cellpadding="10">
<tr>
<td>Home Type</td>
<td><img src="img/centang.jpg"></td>
<td colspan="3">
<input type="radio" name="tipe" value="Apartment" checked="checked"> Apartment
<input type="radio" name="tipe" value="Hotel" > Hotel
<input type="radio" name="tipe" value="House" > House
</td>
</tr>
<tr>
<td>Many Room</td>
<td><img src="img/orangpake.jpg"></td>
<td colspan="3"><input type="text" name="akomodasi" required style="height: 30px; width: 200px;"></td>
</tr>
<tr>
<td>Location</td>
<td><img src="img/lokasi.jpg"></td>
<td colspan="3"><select name="lokasi"  required style="height: 30px; width: 200px;">
<option value="">Choose</option>
<option value="North Lombok">North Lombok</option>
<option value="West Lombok">West Lombok</option>
<option value="Central Lombok">Central Lombok</option>
<option value="East Lombok">East Lombok</option>
</select></td>
</tr>
<tr>
<td>Price per Room</td>
<td><img src="img/dollar.jpg"></td>
<td colspan="3"><input type="text" name="harga"  required placeholder = "Rp." style="height: 30px; width: 200px;"></td>
</tr>
<tr>
<td>Photo</td>
<td><img src="img/foto.jpg" width = "40px" height = "30px"></td>
<td colspan="3"><input type="file" name="foto"></td>
</tr>
<tr>
<td>Telephone Number</td>
<td><img src="img/telpon.jpg"></td>
<td colspan="3"><input type="text" name="tlp"  required style="height: 30px; width: 200px;"></td>
</tr>
<tr>
<td colspan="6" align="center"><input type="submit" value="Simpan" style="height:40px; width:80px">
<input type="reset" value="Reset" style="height:40px; width:80px"></td>
</tr>
</table>
</form>
</body>
</html>