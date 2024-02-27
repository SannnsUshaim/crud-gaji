<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Tambah Pegawai</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body class="bg-lighter">
    <div class="container">
        <header class="pt-10 pb-5">
            <h3 class="font-bold text-dark text-2xl">Tambah Data Pegawai</h3>
        </header>
        <form class="bg-[#fff]" action="../controller/proses_simpan_pegawai.php" method="post">
            <fieldset class="border border-2 border-dark rounded-lg">
                <div class="container">
                    <div class="pt-3">
                        <label class="block pb-1 font-[500]" for="id_pegawai">ID Pegawai </label>
                        <input class="border border-[1px] border-dark w-full rounded-md px-2 py-1" type="text" name="id_pegawai"/>
                    </div>
                    <div class="pt-3">
                        <label class="block pb-1 font-[500]" for="nama_pegawai">Nama Pegawai </label>
                        <input class="border border-[1px] border-dark w-full rounded-md px-2 py-1" type="text" name="nama_pegawai"/>
                    </div>
                    <div class="pt-3">
                        <label class="block pb-1 font-[500]" for="alamat">Alamat </label>
                        <textarea class="border border-[1px] border-dark w-full rounded-md px-2 py-1" name="alamat" rows="5"></textarea>
                    </div>
                    <div class="pt-3">
                        <label class="block pb-1 font-[500]" for="no_telp">No.Telpon </label>
                        <input class="border border-[1px] border-dark w-full rounded-md px-2 py-1" type="text" name="no_telp" maxlength="13"/>
                    </div>
                    <div class="pt-3">
                        <label class="block pb-1 font-[500]" for="golongan">Golongan </label>
                        <input class="border border-[1px] border-dark w-full rounded-md px-2 py-1" type="text" name="golongan">
                    </div>
                    <div class="pt-3">
                        <label class="block pb-1 font-[500]" for="nama_bagian">Bagian </label>
                        <select class="border border-[1px] border-dark w-[350px] rounded-md px-2 py-1" name="kode_bagian" style="width:160px">
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
                    </div>
                    <div class="py-6">
                        <button class="bg-dark px-4 py-2 text-lighter rounded-[10px] mr-3" type="submit" name="simpan">Simpan</button>
                        <a class="text-dark font-medium" href="data_pegawai.php">Batal</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>