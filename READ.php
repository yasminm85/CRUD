<?php
require 'FUNCTION.php';
$pgw = query("SELECT * FROM pegawai");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman</title>
</head>
<body>
<h1>Daftar Pegawai</h1>
<a href="CREATE.php">Tambah Daftar Pegawai</a>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
<th>NO.</th>
<th>Aksi</th>
<th>NIP</th>
<th>Nama</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>Divisi</th>
<th>Foto</th>
</tr>
<?php $i = 1;?>
<?php foreach($pgw as $row ) : ?>
<tr>
<td><?= $i; ?></td>
<td>
<a href="UPDATE.php?id=<?= $row["id"]; ?>">Ubah</a>
<a href="DELETE.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
</td>
<td><?= $row["NIP"]; ?></td>
<td><?= $row["nama"]; ?></td>
<td><?= $row["tanggal_lahir"];?></td>
<td><?= $row["alamat"];?></td>
<td><?= $row["divisi"];?></td>
<td><img src="<?= $row["foto"]; ?>" width="50" height="50"></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>