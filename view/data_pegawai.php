<?php include '../config/koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Data Pegawai</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/data_pegawai.css">
</head>
<body>
    <?php include '../partials/navbar.php'?>
    <section class="main-content">
        <header>
            <h3>Data Pegawai</h3>
        </header>
        <nav class="tambah">
            <?php if(isset($_GET['status'])):?>
            <p class="status">
                <?php
                    if ($_GET['status'] == 1) {
                        echo "Tambah data pegawai berhasil!";
                    } else if ($_GET['status'] == 2){
                        echo "Penambahan data pegawai gagal!";
                    } else if ($_GET['status'] == 3) {
                        echo "Data berhasil diubah!";
                    } else if ($_GET['status'] == 4) {
                        echo "Data gagal diubah!";
                    }
                ?>
            </p>
            <?php endif; ?>
            <a href="tambah_pegawai.php">Tambah Pegawai</a>
        </nav>
        <br>
        <table class="table">
        <thead class="table-head">
            <tr>
                <th>Id Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Golongan</th>
                <th>Bagian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table_body">
            <?php
                $sql = "SELECT * FROM pegawai,bagian WHERE pegawai.kode_bagian = bagian.kode_bagian";
                $query = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>".$data['id_pegawai']."</td>";
                    echo "<td>".$data['nama_pegawai']."</td>";
                    echo "<td>".$data['alamat']."</td>";
                    echo "<td>".$data['no_telp']."</td>";
                    echo "<td>".$data['golongan']."</td>";
                    echo "<td>".$data['nama_bagian']."</td>";
                    echo "<td>";
                    echo "<a style='text-decoration: none; color: var(--dark); font-weight: 500;' href='ubah_pegawai.php?id=".$data['id_pegawai']."'>Edit</a> | "; 
                    echo "<a style='text-decoration: none; color:red; font-weight: 500;' href='../controller/proses_hapus_pegawai.php?id=".$data['id_pegawai']."'>Hapus</a>"; 
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query)?></p>
    </section>
    <?php include '../partials/footer.php'?>
</body>
</html>
