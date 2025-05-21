<?php
    include ("../koneksi.php");

    if (isset($_GET["npm"])) {

        $npm = $_GET["npm"];

        $query = "DELETE FROM t_mahasiswa WHERE npm ='$npm' ";
        $hasil_query = mysqli_query($koneksi, $query);

        if (!$hasil_query) {
            die ("Gagal menghapus data: ".mysqli_errno($koneksi). 
            "    -   ".mysqli_error($koneksi));
        }
    }

    header("location:viewMahasiswa.php");
?>