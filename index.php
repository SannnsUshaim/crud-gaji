<?php 
    include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
    <?php include 'partials/navbar.php'?>
    <section class = "main-content">
        <div class="pegawai">
            <header>
                <h3>Data Pegawai</h3>
            </header>
            <table>
                <thead>
                    <tr>
                        <th>Id Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>Alamat</th>
                        <th>no_telp</th>
                        <th>Golongan</th>
                        <th>Nama Bagian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM pegawai, bagian WHERE pegawai.kode_bagian = bagian.kode_bagian";
                    $query = mysqli_query($koneksi, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>".$data['id_pegawai']."</td>";
                        echo "<td>".$data['nama_pegawai']."</td>";
                        echo "<td>".$data['alamat']."</td>";
                        echo "<td>".$data['no_telp']."</td>";
                        echo "<td>".$data['golongan']."</td>";
                        echo "<td>".$data['nama_bagian']."</td>";
                        echo "</td>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <p>Total: <?php echo mysqli_num_rows($query)?></p>
        <br>
        <div class="bagian">
            <header>
                <h3>Data Bagian</h3>
            </header>
            <table>
                <thead>
                    <tr>
                        <td>Kode Bagian</td>
                        <td>Nama Bagian</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT * FROM bagian";
                        $query = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>".$data['kode_bagian']."</td>";
                            echo "<td>".$data['nama_bagian']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <p>Total: <?php echo mysqli_num_rows($query)?></p>
    </section>
    <?php include 'partials/footer.php'?>
</body> 
</html>