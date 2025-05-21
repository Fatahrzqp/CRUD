<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include '../koneksi.php';

$npm = $_POST['npm'];
$namaMhs = $_POST['namaMahasiswa'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$noHp = $_POST['noHP'];

$sql = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) 
VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHp')";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    echo "Data berhasil disimpan. <a href='viewMahasiswa.php'>Lihat Data</a>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>

</body>
</html>