<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Tambah Data Bagian</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/tambah-bagian.css">
</head>
<body>
    <header>
        <h3>Tambah Data Bagian</h3>
    </header>
    <form action="../controller/proses_simpan_bagian.php" method="post">
        <fieldset>
            <p>
                <label for="kode_bagian">Kode Bagian </label>
                <input type="text" name="kode_bagian" maxlength="15">
            </p>
            <p>
                <label for="nama_bagian">Nama Bagian </label>
                <input type="text" name="nama_bagian" maxlength="20">
            </p>
            <button type="submit" name="simpan_bagian">Simpan</button>
            <a href="data_bagian.php">Batal</a>
        </fieldset>
    </form>
</body>
</html>