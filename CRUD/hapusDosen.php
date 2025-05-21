<?php
    include ("koneksi.php");

    if (isset($_GET["idDosen"])) {

        $id = $_GET["idDosen"];

        $query = "DELETE FROM t_dosen WHERE idDosen ='$id' ";
        $hasil_query = mysqli_query($koneksi, $query);

        if (!$hasil_query) {
            die ("Gagal menghapus data: ".mysqli_errno($koneksi). 
            "    -   ".mysqli_error($koneksi));
        }
    }

    header("location:viewdosen.php");
?>