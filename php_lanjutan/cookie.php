<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Identitas dengan Cookie</title>
</head>
<body>
    <h2>Form Identitas dengan Penyimpanan Cookie</h2>

    <?php
    // Jika form dikirim, simpan atau perbarui cookie
    if (isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        setcookie("identitas_pengguna", $nama, time() + 7200); 
        $_COOKIE['identitas_pengguna'] = $nama;
        echo "<p>Data identitas berhasil disimpan/diperbarui.</p>";
    }

    // Tampilkan data jika sudah ada
    if (isset($_COOKIE['identitas_pengguna'])) {
        echo "<p>Halo, <strong>" . $_COOKIE['identitas_pengguna'] . "</strong>!</p>";
    }
    ?>

    <!-- Form tetap muncul agar bisa diisi berkali-kali -->
    <form method="post" action="">
        <label for="nama">Masukkan nama Anda:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo isset($_COOKIE['identitas_pengguna']) ? $_COOKIE['identitas_pengguna'] : ''; ?>" required>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>
