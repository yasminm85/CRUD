<?php
$conn = mysqli_connect("localhost", "root","", "phpdasar");
function query($query) {
global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while($row = mysqli_fetch_assoc($result)){
$rows[] = $row;
}
return $rows;
}
function tambah($data) {
global $conn;
$nip = htmlspecialchars($data["nip"]);
$nama = htmlspecialchars($data["nama"]);
$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
$alamat = htmlspecialchars($data["alamat"]);
$divisi = htmlspecialchars($data["divisi"]);
$foto = $_FILES["foto"]["name"];
if($error === 4){
echo "<script>
alert('choose your image!');
</script>";
return false;
}
if($foto !=''){
$allowFoto = ['jpg', 'png'];
$ekstensiFoto = explode('.', $foto);
$ekstensiFoto = strtolower(end($ekstensiFoto));
if(in_array($ekstensiFoto, $allowFoto)){
$upload = 'img/'.$foto;
move_uploaded_file($_FILES["foto"]["tmp_name"], $upload);
}else{
echo "<script>
alert('Please upload image in jpg and png!');
</script>";
return false;
}
}
//query insert data
$query = "INSERT INTO pegawai VALUES
('','$nip', '$nama', '$tanggal_lahir','$alamat','$divisi','$upload')
";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
function hapus($id){
global $conn;
mysqli_query($conn, "DELETE FROM pegawai WHERE id = $id");
return mysqli_affected_rows($conn);
}
function ubah($data){
global $conn;
$id = $data["id"];
$nip = htmlspecialchars($data["nip"]);
$nama = htmlspecialchars($data["nama"]);
$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
$alamat = htmlspecialchars($data["alamat"]);
$divisi = htmlspecialchars($data["divisi"]);
$foto = $_FILES["foto"]["name"];
if($error === 4){
echo "<script>
alert('choose your image!');
</script>";
return false;
}
if($foto !=''){
$allowFoto = ['jpg', 'png'];
$ekstensiFoto = explode('.', $foto);
$ekstensiFoto = strtolower(end($ekstensiFoto));
if(in_array($ekstensiFoto, $allowFoto)){
$upload = 'img/'.$foto;
move_uploaded_file($_FILES["foto"]["tmp_name"], $upload);
}else{
echo "<script>
alert('Please upload image in jpg and png!');
</script>";
return false;
}
}
//query update data
$query = "UPDATE pegawai SET
NIP = '$nip',
nama = '$nama',
tanggal_lahir = '$tanggal_lahir',
alamat = '$alamat',
divisi = '$divisi',
foto = '$upload'
WHERE id = $id
";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
?>