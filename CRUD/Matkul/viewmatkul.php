<?php
include '../koneksi.php';
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Matakuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-container input[type="text"] {
            padding: 8px;
            width: 250px;
            font-size: 14px;
        }

        .search-container button {
            padding: 8px 16px;
            background-color: #2196F3;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: #0b7dda;
        }

        .add-link {
            display: block;
            width: fit-content;
            margin: 10px auto;
            text-decoration: none;
            padding: 8px 16px;
            background-color:rgb(0, 52, 240);
            color: white;
            border-radius: 5px;
        }

        .add-link:hover {
            background-color:rgb(4, 37, 145);
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color:rgb(13, 102, 184);
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .action-links a {
            text-decoration: none;
            padding: 6px 12px;
            margin: 0 2px;
            border-radius: 4px;
            color: white;
        }

        .edit {
            background-color: #2196F3;
        }

        .edit:hover {
            background-color: #0b7dda;
        }

        .delete {
            background-color: #f44336;
        }

        .delete:hover {
            background-color:rgb(164, 22, 12);
        }
    </style>
</head>
<body>

    <h1>Tabel Matakuliah</h1>

    <div class="search-container">
        <form action="" method="get">
            <input type="text" name="keyword" placeholder="Cari kode atau nama matakuliah..." value="<?= htmlspecialchars($keyword) ?>">
            <button type="submit">Cari</button>
        </form>
    </div>

    <a href="inputmatkul.php" class="add-link">Input Matakuliah</a>

    <table>
        <tr>
            <th>Kode Matakuliah</th>
            <th>Matakuliah</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Aksi</th>
        </tr>
        <?php
        $keyword_safe = mysqli_real_escape_string($koneksi, $keyword);
        $query = "SELECT * FROM t_matakuliah";
        if (!empty($keyword_safe)) {
            $query .= " WHERE kodeMK LIKE '%$keyword_safe%' OR namaMK LIKE '%$keyword_safe%'";
        }
        $query .= " ORDER BY kodeMK ASC";

        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }

        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$data['kodeMk']}</td>";
            echo "<td>{$data['namaMk']}</td>";
            echo "<td>{$data['sks']}</td>";
            echo "<td>{$data['jam']}</td>";
            echo "<td class='action-links'>
                    <a href='editmatkul.php?kodeMk={$data['kodeMk']}' class='edit'>Edit</a>
                    <a href='hapusmatkul.php?kodeMk={$data['kodeMk']}' class='delete' onclick=\"return confirm('Anda yakin akan menghapus matakuliah?')\">Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
