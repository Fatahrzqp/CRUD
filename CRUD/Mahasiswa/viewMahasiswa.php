<?php
// Memanggil file koneksi.php untuk melakukan koneksi ke database
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 840px;
            margin: auto;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tabel Mahasiswa</h1>
    <center><a href="inputMahasiswa.php">Input Data Mahasiswa</a></center>
    <br/>
    <table border="1">
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>No Hp</th>    
        </tr>

        <?php
        // Menjalankan query untuk mengambil semua data dari tabel t_dosen
        $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
        $result = mysqli_query($koneksi, $query);

        // Mengecek apakah terjadi error saat menjalankan query
        if (!$result) {
            die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }

        // Menampilkan data hasil query dalam bentuk tabel
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$data['npm']}</td>";
            echo "<td>{$data['namaMhs']}</td>";
            echo "<td>{$data['prodi']}</td>";
            echo "<td>{$data['alamat']}</td>";
            echo "<td>{$data['noHp']}</td>";
            echo "<td>
                    <a href='editMahasiswa.php?npm={$data['npm']}'>Edit</a> /
                    <a href='hapusMahasiswa.php?npm={$data['npm']}'
                    onclick=\"return confirm('Anda yakin akan menghapus data?')\">Hapus</a>
                </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
