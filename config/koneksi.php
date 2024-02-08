<?php
// deklarasi parametet koneksi database
$server = "localhost";
// username dan password adalah bawaan dari xampp
$username = "root";
$password = ""; 
$database = "belajar_crudrpl1"; 

$koneksi = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$koneksi){
    die("Koneksi Database Gagal : ". mysqli_connect_error());
}
?>