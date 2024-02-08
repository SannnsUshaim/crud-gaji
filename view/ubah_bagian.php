<?php
    include '../config/koneksi.php';
    // kalau tidak ada di query string
    if (!isset($_GET['id'])) {
        header('Location: ../view/data_bagian.php');
    }
    // ambil id dari query string
    $kode_bagian = $_GET['id'];
    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM bagian WHERE kode_bagian = '$kode_bagian'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Ubah Data Bagian</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/ubah-bagian.css">
</head>
<body>
    <header>
        <h3>Ubah Data Bagian</h3>
    </header>
    <form action="../controller/proses_ubah_bagian.php" method="post">
        <fieldset>
            <input type="hidden" name="kode_bagian" value="<?php echo $data['kode_bagian']?>"/>
            <p>
                <label for="nama_bagian">Nama Bagian: </label>
                <input type="text" name="nama_bagian" value="<?php echo $data['nama_bagian']?>">
            </p>
            <button type="submit" name="ubah_bagian">Ubah</button>
            <a href="data_bagian.php">Batal</a>
        </fieldset>
    </form>
</body>
</html>