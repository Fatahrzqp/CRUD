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

    <h1>Input Data</h1>

    <div class="container">
        <form name="form_dosen" action="inputProsesDosen.php" method="post">
            <fieldset>
                <legend>Input Data Dosen</legend>

                <p>
                    <label for="namaDosen">Nama Dosen : </label><br>
                    <input type="text" name="namaDosen" id="namaDosen" required>
                </p>

                <p>
                    <label for="noHP">No HP : </label><br>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081222334444" required>
                </p>
            </fieldset>
            <br>
            <input type="submit" name="input" value="Simpan">
        </form>
    </div>

</body>
</html>
