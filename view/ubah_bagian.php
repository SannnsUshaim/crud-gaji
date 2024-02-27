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
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body class="bg-lighter">
    <div class="container">
        <header class="pt-10 pb-5">
            <h3 class="font-bold text-dark text-2xl">Ubah Data Bagian</h3>
        </header>
        <form class="bg-[#fff]" action="../controller/proses_ubah_bagian.php" method="post">
            <fieldset class="border border-2 border-dark rounded-lg">
                <div class="container">
                    <input type="hidden" name="kode_bagian" value="<?php echo $data['kode_bagian']?>"/>
                    <div class="pt-3">
                        <label class="block pb-1 font-[500]" for="nama_bagian">Nama Bagian </label>
                        <input class="border border-[1px] border-dark w-full rounded-md px-2 py-1" type="text" name="nama_bagian" value="<?php echo $data['nama_bagian']?>">
                    </div>
                    <div class="py-6">
                        <button class="bg-dark px-4 py-2 text-lighter rounded-[10px] mr-3" type="submit" name="ubah_bagian">Ubah</button>
                        <a class="text-dark font-medium" href="data_bagian.php">Batal</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>