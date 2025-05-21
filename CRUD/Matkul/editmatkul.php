<?php
include '../koneksi.php';

if (isset($_GET['kodeMk'])) {
    $kodeMK = $_GET["kodeMk"];

    $stmt = $koneksi->prepare("SELECT * FROM t_matakuliah WHERE kodeMk = ?");
    $stmt->bind_param("s", $kodeMK);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        die("Data dengan Kode Matakuliah tersebut tidak ditemukan.");
    }

    $data = $result->fetch_assoc();
    $namaMK = htmlspecialchars($data["namaMk"]);
    $sks = htmlspecialchars($data["sks"]);
    $jam = htmlspecialchars($data["jam"]);
} else {
    header("Location:viewmatkul.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 40px 20px;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }

    .container {
        max-width: 500px;
        margin: auto;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    fieldset {
        border: none;
        padding: 0;
    }

    legend {
        font-size: 1.2rem;
        margin-bottom: 20px;
        font-weight: bold;
        color: #555;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus {
        border-color: #4CAF50;
        outline: none;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    input[disabled] {
        background-color: #eee;
        color: #777;
    }
</style>
</head>
<body>
    <h1>Edit Matakuliah</h1>
    <div class="container">
        <form action="proses_editmatkul.php" method="post">
            <fieldset>
                <legend>Form Edit</legend>
                <input type="hidden" name="kodeMK" value="<?php echo $kodeMK; ?>">
                <label>Kode Matakuliah</label>
                <input type="text" value="<?php echo $kodeMK; ?>" disabled>

                <label>Matakuliah</label>
                <input type="text" name="namaMK" value="<?php echo $namaMK; ?>" required>

                <label>SKS</label>
                <input type="number" name="sks" value="<?php echo $sks; ?>" required min="1">

                <label>Jam</label>
                <input type="number" name="jam" value="<?php echo $jam; ?>" required min="1" max="8">

                <input type="submit" name="edit" value="Update Data">
            </fieldset>
        </form>
    </div>
</body>
</html>
