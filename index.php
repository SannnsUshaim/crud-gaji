<?php 
    include 'config/koneksi.php';
?>

<!-- npx tailwindcss -i ./assets/css/input.css -o ./dist/output.css --watch -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Gaji</title>
    <link rel="stylesheet" href="./dist/output.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/icons/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <?php include 'partials/navbar.php'?>
        <section class ="main-content pt-36">
            <div class="flex lg:w-4/8">            
                <div id="sidebar" class="bg-lighter rounded-md h-[350px]">
                    <ul id="sidebar">
                        <li class="py-3 pl-6 pr-10 bg-dark text-lighter font-bold rounded-md"><a href="/crud_2"><i class="bi bi-house-fill mr-2"></i> Dashboard</a></li>
                        <li class="py-3 pl-6 pr-10 text-darker "><a href="/crud_2/view/data_pegawai.php"><i class="bi bi-building-fill mr-2"></i> Data Pegawai</a></li>
                        <li class="py-3 pl-6 pr-10 text-darker"><a href="/crud_2/view/data_bagian.php"><i class="bi bi-suitcase-lg-fill mr-2"></i> Data Bagian</a></li>
                        <li class="py-3 pl-6 pr-10 text-darker"><a href=""><i class="bi bi-person-fill mr-2"></i> Data User</a></li>
                    </ul>
                </div>
                <div id="content" class="px-10">
                    <div id="pegawai">
                        <header>
                            <h3 class="text-xl font-bold mb-5">Data Pegawai</h3>
                        </header>
                        <table>
                            <thead class="border border-b-4">
                                <tr>
                                    <th class="pl-4 pr-8 bg-primary py-2 text-lighter text-left">Id Pegawai</th>
                                    <th class="pl-4 pr-8 bg-primary py-2 text-lighter text-left">Nama Pegawai</th>
                                    <th class="pl-4 pr-8 bg-primary py-2 text-lighter text-left">Alamat</th>
                                    <th class="pl-4 pr-8 bg-primary py-2 text-lighter text-left">no_telp</th>
                                    <th class="pl-4 pr-8 bg-primary py-2 text-lighter text-left">Golongan</th>
                                    <th class="pl-4 pr-8 bg-primary py-2 text-lighter text-left">Nama Bagian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM pegawai, bagian WHERE pegawai.kode_bagian = bagian.kode_bagian";
                                $query = mysqli_query($koneksi, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<tr>";
                                    echo "<td class='pl-4 pr-8 font-[400]'>".$data['id_pegawai']."</td>";
                                    echo "<td class='pl-4 pr-8 font-[400]'>".$data['nama_pegawai']."</td>";
                                    echo "<td class='pl-4 pr-8 font-[400]'>".$data['alamat']."</td>";
                                    echo "<td class='pl-4 pr-8 font-[400]'>".$data['no_telp']."</td>";
                                    echo "<td class='pl-4 pr-8 font-[400]'>".$data['golongan']."</td>";
                                    echo "<td class='pl-4 pr-8 font-[400]'>".$data['nama_bagian']."</td>";
                                    echo "</td>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-4">Total: <?php echo mysqli_num_rows($query)?></p>
                    <br>
                    <div class="">
                        <header>
                            <h3 class="text-xl font-bold mb-5">Data Bagian</h3>
                        </header>
                        <table>
                            <thead class="border border-b-4">
                                <tr>
                                    <td class="pl-4 pr-8 bg-primary py-2 text-lighter text-left font-bold">Kode Bagian</td>
                                    <td class="pl-4 pr-8 bg-primary py-2 text-lighter text-left font-bold">Nama Bagian</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $sql = "SELECT * FROM bagian";
                                    $query = mysqli_query($koneksi, $sql);
                                    while ($data = mysqli_fetch_array($query)) {
                                        echo "<tr>";
                                        echo "<td class='pl-4 pr-8 font-[400]'>".$data['kode_bagian']."</td>";
                                        echo "<td class='pl-4 pr-8 font-[400]'>".$data['nama_bagian']."</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <p class="mt-4">Total: <?php echo mysqli_num_rows($query)?></p>
                </div>
            </div>
        </section>
    </div>
    <?php include 'partials/footer.php'?>
</body> 
</html>