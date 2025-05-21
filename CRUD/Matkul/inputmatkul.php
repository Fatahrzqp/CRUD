<!DOCTYPE html>
<html lang="en">
<head>
<style>
    h1{
        text-align: center;
    }
    .container {
        width: 400px;
        margin: auto;
    }
</style>
</head>
<body>
<h1>Input Data</h1>
    <div class="container">
        <form id="form_matkul" action="proses_inputmatkul.php" method="post">
            <fieldset>
                <legend>Input Matakuliah</legend>
                <p>
                    <label for="kodeMK">Kode Matakuliah: </label>
                    <input type="text" name="kodeMK" id="kodeMK">
                </p>
                <p>
                    <label for="namaMK">Nama Matakuliah: </label>
                    <input type="text" name="namaMK" id="namaMK" placeholder="Contoh: Desain Pemrograman Web">
                </p>
                <p>
                    <label for="sks">SKS: </label>
                    <input type="number" name="sks" id="sks" min="1" max="24" required>
                </P>
                <p>
                    <label for="jam">Jam: </label>
                    <input type="number" name="jam" id="jam" min="1" max="8" required>
                </P>
                <p>
                    <input type="submit" name="input" value="Simpan">
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>