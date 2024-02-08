<?php 
    include '../config/koneksi.php';
    if (isset($_POST['simpan_bagian'])) {
        $kode_bagian = $_POST['kode_bagian'];
        $nama_bagian = $_POST['nama_bagian'];

        $sql = "INSERT INTO bagian (kode_bagian, nama_bagian) VALUES ('$kode_bagian', '$nama_bagian')";
        $query = mysqli_query($koneksi, $sql);

        if ($query) {
            header('Location: ../view/data_bagian.php?status=1');
        } else {
            header('Location: ../view/data_bagian.php?status=2');
        }
    } 
?>