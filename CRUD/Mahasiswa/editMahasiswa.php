<?php
// Memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

// Mengecek apakah ada nilai GET idDosen
if (isset($_GET['npm'])) {
    // Ambil nilai idDosen dari URL
    $npm = $_GET['npm'];

    // Query untuk menampilkan data dosen berdasarkan idDosen
    $query = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($koneksi, $query);

    // Cek apakah query berhasil dijalankan
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }

    // Ambil data dan simpan dalam variabel
    $data = mysqli_fetch_assoc($result);
    $namaMhs = $data["namaMhs"];
    $prodi = $data["prodi"];
    $alamat = $data["alamat"];
    $noHp = $data["noHp"];
} else {
    // Redirect jika tidak ada ID yang dikirim
    header("location:viewMahasiswa.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        h1 {
            text-align: center;
        }

        .container {
            width: 400px;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <div class="container">
        <form action="prosesEditMahasiswa.php" method="post">
            <fieldset>
                <legend>Edit Data Mahasiswa:</legend>

                <p>
                    <label for="npm">NPM:</label>
                    <input type="hidden" name="npm" value="<?php echo $npm; ?>">
                    <input type="text" value="<?php echo $npm; ?>" disabled>
                </p>

                <p>
                    <label for="namaMhs">Nama Mahasiswa:</label>
                    <input type="text" name="namaMhs" id="namaMhs" value="<?php echo $namaMhs; ?>">
                </p>

                <p>
                    <label for="prodi">Prodi:</label>
                    <input type="text" name="prodi" id="prodi" value="<?php echo $prodi; ?>">
                </p>

                <p>
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
                </p>

                <p>
                    <label for="noHp">No HP:</label>
                    <input type="text" name="noHp" id="noHp" value="<?php echo $noHp; ?>">
                </p>
            </fieldset>

            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
        </form>
    </div>
</body>
</html>
