<?php
//koneksi database
include './config.php';

// menangkap data yang dikirim dari form
$idmobil = $_POST['idmobil'];
$merkmobil = $_POST['merkmobil'];
$jenismobil = $_POST['jenismobil'];
$hargasewa = $_POST['hargasewa'];

// update data ke database 
mysqli_query($koneksi, "update mobil set merkmobil='$merkmobil', jenismobil='$jenismobil', hargasewa='$hargasewa' where idmobil='$idmobil'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
