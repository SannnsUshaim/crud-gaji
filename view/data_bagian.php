<?php include '../config/koneksi.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Data Bagian</title>
    <link rel="stylesheet" href="../assets/css/data_bagian.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <?php include '../partials/navbar.php'?>
    <section class="main-content">
        <header>
            <h3>Data Bagian</h3>
        </header>
        <nav class="tambah">
            <?php if(isset($_GET['status'])):?>
            <p class="status">
                <?php
                    if ($_GET['status'] == 1) {
                        echo "Tambah data berhasil!";
                    } else if ($_GET['status'] == 2){
                        echo "Penambahan data gagal!";
                    } else if ($_GET['status'] == 3) {
                        echo "Data berhasil diubah!";
                    } else if ($_GET['status'] == 4) {
                        echo "Data gagal diubah!";
                    }
                ?>
            </p>
            <?php endif; ?>
            <a href="tambah_bagian.php">Tambah Bagian</a>
        </nav>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Kode Bagian</th>
                    <th>Nama Bagian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM bagian";
                    $query = mysqli_query($koneksi,$sql);
                    while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>".$data['kode_bagian']."</td>";
                        echo "<td>".$data['nama_bagian']."</td>";
                        echo "<td>";
                        echo "<a style='text-decoration: none; color: var(--dark); font-weight: 500;' href='ubah_bagian.php?id=".$data['kode_bagian']."'>Edit</a> | "; 
                        echo "<a style='text-decoration: none; color:red; font-weight: 500;' href='../controller/proses_hapus_bagian.php?id=".$data['kode_bagian']."'>Hapus</a>"; 
                        echo "</td>";
                    }
                ?>
            </tbody>
        </table>
        <p>Total: <?php echo mysqli_num_rows($query)?></p>
    </section>
    <?php include '../partials/footer.php'?>
</body>
</html>