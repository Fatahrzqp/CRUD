<?php
// Memanggil file koneksi.php untuk melakukan koneksi ke database
include 'koneksi.php';
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
    <h1>Tabel Dosen</h1>
    <center><a href="input.php">Input Data</a></center>
    <br/>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>No HP</th>
            <th>Pilihan</th>    
        </tr>

        <?php
        // Menjalankan query untuk mengambil semua data dari tabel t_dosen
        $query = "SELECT * FROM t_dosen ORDER BY IdDosen ASC";
        $result = mysqli_query($koneksi, $query);

        // Mengecek apakah terjadi error saat menjalankan query
        if (!$result) {
            die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }

        // Menampilkan data hasil query dalam bentuk tabel
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$data['idDosen']}</td>";
            echo "<td>{$data['namaDosen']}</td>";
            echo "<td>{$data['noHp']}</td>";
            echo "<td>
                    <a href='editdosen.php?idDosen={$data['idDosen']}'>Edit</a> /
                    <a href='hapusdosen.php?idDosen={$data['idDosen']}'
                       onclick=\"return confirm('Anda yakin akan menghapus data?')\">Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
