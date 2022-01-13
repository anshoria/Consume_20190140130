<?php
// koneksi database
include 'config.php';

//\Menangkap data id yang dikirim dari url karena delete cuma membutuhkan id
$idmobil = $_GET['idmobil'];

// menghapus data dari database
mysqli_query($koneksi, "delete from mobil where idmobil='$idmobil'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
