<?php include '../config/koneksi.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji - Data Bagian</title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include '../partials/navbar.php'?>
    <div class="container">
        <section class="main-content pt-36">
            <div class="flex lg:w-4/8">
                <div id="sidebar" class="bg-lighter rounded-md h-[350px]">
                    <ul id="sidebar" >
                        <li class="py-3 pl-6 pr-10 text-darker"><a href="/crud_2"><i class="bi bi-house-fill mr-2"></i> Dashboard</a></li>
                        <li class="py-3 pl-6 pr-10 text-darker"><a href="/crud_2/view/data_pegawai.php"><i class="bi bi-building-fill mr-2"></i> Data Pegawai</a></li>
                        <li class="py-3 pl-6 pr-10 bg-dark text-lighter font-bold rounded-md"><a href="/crud_2/view/data_bagian.php"><i class="bi bi-suitcase-lg-fill mr-2"></i> Data Bagian</a></li>
                        <li class="py-3 pl-6 pr-10 text-darker"><a href=""><i class="bi bi-person-fill mr-2"></i> Data User</a></li>
                    </ul>
                </div>
                <div id="content" class="px-10">
                    <header>
                        <h3 class="text-xl font-bold mb-5">Data Bagian</h3>
                    </header>
                    <nav class="tambah">
                        <?php if(isset($_GET['status'])):?>
                        <p class="status">
                            <?php
                                if ($_GET['status'] == 1) {
                                    echo "Penambahan data berhasil!";
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
                        <a href="tambah_bagian.php" class="bg-dark text-lighter px-5 py-2 rounded-md font-[500]">Tambah Bagian</a>
                    </nav>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <th class="pl-4 pr-8 bg-primary py-2 text-lighter text-left">Kode Bagian</th>
                                <th class="pl-4 pr-8 bg-primary py-2 text-lighter text-left">Nama Bagian</th>
                                <th class="pl-4 pr-8 bg-primary py-2 text-lighter text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM bagian";
                                $query = mysqli_query($koneksi,$sql);
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<tr>";
                                    echo "<td class='pl-4 pr-8 font-[400]'>".$data['kode_bagian']."</td>";
                                    echo "<td class='pl-4 pr-8 font-[400]'>".$data['nama_bagian']."</td>";
                                    echo "<td class='pl-4 pr-8 font-[400]'>";
                                    echo "<a class='text-dark font-bold' href='ubah_bagian.php?id=".$data['kode_bagian']."'><i class='bi bi-pencil-square'></i></a> | "; 
                                    echo "<a class='text-red font-bold' font-weight: 500;' href='../controller/proses_hapus_bagian.php?id=".$data['kode_bagian']."'><i class='bi bi-trash-fill'></i></a>"; 
                                    echo "</td>";
                                }
                            ?>
                        </tbody>
                    </table>
                    <p class="mt-4">Total: <?php echo mysqli_num_rows($query)?></p>
                </div>
            </div>
        </section>
    </div>
    <?php include '../partials/footer.php'?>
    <script src="../assets/js/script.js"></script>
</body>
</html>