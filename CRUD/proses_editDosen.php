<?php
    if (isset($_POST['edit'])) {
        include ("koneksi.php");

        $id = $_POST['idDosen'];
        $namaDosen = $_POST['namaDosen'];
        $noHP = $_POST['noHP'];

        $query = "UPDATE t_dosen SET namaDosen = '$namaDosen', noHP = '$noHP' WHERE idDosen = '$id' ";
        $result = mysqli_query($koneksi, $query);

        if(!$result) {
            die ("querry gagal dijalankan : ".mysqli_errno($koneksi).
            "   -   ".mysqli_error($koneksi)) ;
            
        }
    }

    header("location:viewDosen.php");
?>