<?php
require 'FUNCTION.php';
if(isset($_POST["tambah"] )){
if(tambah($_POST) > 0){
echo "
<script>
alert('data berhasil ditambahkan');
document.location.href = 'view_pegawai.php';
</script>
";
}else{
echo "
<script>
alert('data gagal ditambahkan');
document.location.href = 'tambah_pegawai.php';
</script>
";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tambah Daftar Pegawai</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><label for="nip">NIP :</label></td>
<td><input type="text" name="nip" id="nip" required></td>
</tr>
<tr>
<td><label for="nama">Nama :</label></td>
<td><input type="text" name="nama" id="nama" required></td>
</tr>
<tr>
<td><label for="tanggal_lahir">Tanggal Lahir :</label></td>
<td><input type="date" name="tanggal_lahir" id="tanggal_lahir" required></td>
</tr>
<tr>
<td><label for="alamat">Alamat :</label></td>
<td><textarea name="alamat" id="alamat" cols="30" rows="10" required></textarea></td>
</tr>
<tr>
<td><label for="divisi">Divis :</label></td>
<td><select name="divisi" id="divisi">
<option value="IT">IT</option>
<option value="HRD">HRD</option>
<option value="Umum">Umum</option>
</select></td>
</tr>
<tr>
<td><label for="foto">Foto :</label></td>
<td><input type="file" name="foto" id="foto"/></td>
</tr>
<tr>
<td></td>
<td><button name="tambah">Tambah</button></td>
</tr>
</table>
</form>
</body>
</html>