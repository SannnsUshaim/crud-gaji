<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Tambah Pegawai</title>
    <link rel="stylesheet" href="../assets/css/tambah-pegawai.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <header>
        <h3>Tambah Data Pegawai</h3>
    </header>
    <form action="../controller/proses_simpan_pegawai.php" method="post">
        <fieldset>
            <p>
                <label for="id_pegawai">ID Pegawai </label>
                <input type="text" name="id_pegawai"/>
            </p>
            <p>
                <label for="nama_pegawai">Nama Pegawai </label>
                <input type="text" name="nama_pegawai"/>
            </p>
            <p>
                <label for="alamat">Alamat </label>
                <textarea name="alamat" cols="30" rows="10"></textarea>
            </p>
            <p>
                <label for="no_telp">No.Telpon </label>
                <input type="text" name="no_telp" maxlength="13"/>
            </p>
            <p>
                <label for="golongan">Golongan </label>
                <input type="text" name="golongan">
            </p>
            <p>
                <label for="nama_bagian">Bagian </label>
                <select name="kode_bagian" style="width:160px">
                    <?php
                        include '../config/koneksi.php';
                        // query menampilkan nama bagian ke dalam combo box
                        $query = mysqli_query($koneksi, "SELECT * FROM bagian");
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?=$data['kode_bagian'];?>"><?php echo $data['nama_bagian'];?></option>
                            <?php
                        }
                        ?>
                    ?>
                </select>
            </p>
            <button type="submit" name="simpan">Simpan</button>
            <a href="data_pegawai.php">Batal</a>
        </fieldset>
    </form>
</body>
</html>