<?php 
    include '../config/koneksi.php';
    if (isset($_POST['ubah_bagian'])) {
        $kode_bagian = $_POST['kode_bagian'];
        $nama_bagian = $_POST['nama_bagian'];

        $query = mysqli_query($koneksi, "UPDATE bagian SET kode_bagian = '$kode_bagian', nama_bagian = '$nama_bagian' WHERE kode_bagian = '$kode_bagian'");

        if ($query) {
            header('Location: ../view/data_bagian.php?status=3');
        } else {
            header('Location: ../view/data_bagian.php?status=4');
        }
    }
?>