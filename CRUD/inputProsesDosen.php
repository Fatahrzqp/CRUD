<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'koneksi.php';

$nama = $_POST['namaDosen'];
$nohp = $_POST['noHP'];

$sql = "INSERT INTO t_dosen (namaDosen, noHP) VALUES ('$nama', '$nohp')";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    echo "Data berhasil disimpan. <a href='viewdosen.php'>Lihat Data</a>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>

</body>
</html>