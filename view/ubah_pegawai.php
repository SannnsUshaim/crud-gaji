<?php
    include '../config/koneksi.php';
    // kalau tidak ada di query string
    if (!isset($_GET['id'])) {
        header('Location: ../view/data_pegawai.php');
    }
    // ambil id dari query string
    $id_pegawai = $_GET['id'];
    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM pegawai WHERE id_pegawai = '$id_pegawai'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Ubah Data Pegawai</title>
    <link rel="stylesheet" href="../assets/css/ubah-pegawai.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <header>
        <h3>Ubah Data Pegawai</h3>
    </header>
    <form action="../controller/proses_ubah_pegawai.php" method="post">
        <fieldset>
            <input type="hidden" name="id_pegawai" value="<?php echo $data['id_pegawai'] ?>" />
            <p>
                <label for="nama_pegawai">Nama </label>
                <input type="text" name="nama_pegawai" value="<?php echo $data['nama_pegawai']?>"/>
            </p>
            <p>
                <label for="alamat">Alamat </label>
                <textarea name="alamat" cols="30" rows="10"><?php echo $data['alamat']?></textarea>
            </p>
            <p>
                <label for="no_telp">No.Telpon </label>
                <input type="text" name="no_telp" value="<?php echo $data['no_telp']?>"/>
            </p>
            <p>
                <label for="golongan">Golongan </label>
                <input type="text" name="golongan" value="<?php echo $data['golongan']?>">
            </p>
            <p>
                <label for="bagian">Bagian </label>
                <select name="kode_bagian" style="width: 160px;">
                    <?php
                        // query menampilkan nama barang ke dalam combo box
                        $query = mysqli_query($koneksi, "SELECT * FROM bagian");
                        while ($data = mysqli_fetch_array($query)){
                            ?>
                            <option value="<?=$data['kode_bagian'];?>"><?php echo $data['nama_bagian']; ?></option>
                            <?php
                        }
                        ?>
                    ?>
                </select>
            </p>
            <button type="submit" name="ubah">Ubah</button>
            <a href="data_pegawai.php">Batal</a>
        </fieldset>
    </form>
</body>
</html>