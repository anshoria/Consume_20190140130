<?php
// Include koneksi database
include './config.php';

// Menangkap data yang di kirim dari form
$merkmobil = $_POST['merkmobil'];
$jenismobi = $_POST['jenismobil'];
$hargasewa = $_POST['hargasewa'];

// Menginput data ke database
mysqli_query($koneksi, "insert into mobil values('','$merkmobil','$jenismobil','$hargasewa')");
// Mengembalikan ke halaman awal
header ("Location:./index.php");
