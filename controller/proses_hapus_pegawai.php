<?php
    include '../config/koneksi.php';
    if  (isset($_GET['id'])) {
        // ambil id dari query string
        $id_pegawai = $_GET['id'];
        // buat query hapus
        $sql = "DELETE FROM pegawai WHERE id_pegawai = '$id_pegawai'";
        $query = mysqli_query($koneksi, $sql);
        // apakah query hapus berhasil
        if ($query) {
            header('Location: ../view/data_pegawai.php');
        } else {
            die("Gagal Menghapus...");
        }
    } else {
        die("Akses Dilarang...");
    }
?>