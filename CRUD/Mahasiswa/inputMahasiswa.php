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

    <h1>Input Data Mahasiswa</h1>

    <div class="container">
        <form name="form_mahasiswa" action="inputProsesMahasiswa.php" method="post">
            <fieldset>
                <legend>Input Data Mahasiswa</legend>

                <p>
                    <label for="npm">NPM Mahasiswa : </label><br>
                    <input type="text" name="npm" id="npmMahasiswa" required>
                </p>

                <p>
                    <label for="namaMhs">Nama Mahasiswa : </label><br>
                    <input type="text" name="namaMahasiswa" id="namaMahasiswa" required>
                </p>

                <p>
                    <label for="prodi">Prodi Mahasiswa : </label><br>
                    <input type="text" name="prodi" id="prodiMahasiswa" required>
                </p>

                <p>
                    <label for="alamat">Alamat Mahasiswa : </label><br>
                    <input type="text" name="alamat" id="alamatMahasiswa" placeholder="contoh: Jl.blablabla" required>
                </p>


                <p>
                    <label for="noHp">No HP : </label><br>
                    <input type="text" name="noHP" id="noHp" placeholder="Contoh: 081222334444" required>
                </p>
            </fieldset>
            <br>
            <input type="submit" name="input" value="Simpan">
        </form>
    </div>

</body>
</html>
