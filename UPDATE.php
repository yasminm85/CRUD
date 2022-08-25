<?php
require 'FUNCTION.php';
$id = $_GET["id"];
$pgw = query("SELECT * FROM pegawai WHERE id = $id")[0];
if(isset($_POST["ubah"]) ){
if(ubah($_POST) > 0 ){
echo "
<script>
alert('data berhasil diubah');
document.location.href = 'READ.php';
</script>
";
}else{
echo "
<script>
alert('data gagal diubah');
document.location.href = 'UPDATE.php';
</script>
";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ubah Daftar Pegawai</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td></td>
<td><input type="hidden" name="id" value="<?= $pgw["id"]; ?>"></td>
</tr>
<tr>
<td><label for="nip">NIP :</label></td>
<td><input type="text" name="nip" id="nip" value="<?= $pgw["NIP"]; ?>" required></td>
</tr>
<tr>
<td><label for="nama">Nama :</label></td>
<td><input type="text" name="nama" id="nama" value="<?= $pgw["nama"]; ?>" required></td>
</tr>
<tr>
<td><label for="tanggal_lahir">Tanggal Lahir :</label></td>
<td><input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $pgw["tanggal_lahir"]; ?>" required></td>
</tr>
<tr>
<td><label for="alamat">Alamat :</label></td>
<td><textarea name="alamat" id="alamat" cols="30" rows="10" value="<?= $pgw["alamat"]; ?>" required></textarea></td>
</tr>
<tr>
<td><label for="divisi">Divis :</label></td>
<td><select name="divisi" id="divisi" >
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
<td><button name="ubah">Ubah Data</button></td>
</tr>
</table>
</form>
</body>
</html>