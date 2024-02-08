<?php
    include '../config/koneksi.php';
    if (isset($_GET['id'])){
        $kode_bagian = $_GET['id'];

        $sql = "DELETE FROM bagian WHERE kode_bagian = '$kode_bagian'";
        $query = mysqli_query($koneksi, $sql);

        if  ($query) {
            header('Location: ../view/data_bagian.php');
        } else {
            header('Location: ../view/data_bagian.php');
        }
    }else {
        die("Akses Dilarang...");
    }
?>

