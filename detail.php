<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Mobil</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">Data Mobil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    //memanggil file config.php
    include './config.php';
    //menangkap id yang dikirim melalui button detail di index.php
    $idmobil= $_GET['idmobil'];
    //melakukan query untuk mendapatkan data mahasiswa berdasarkan $id
    $rentalmobil = mysqli_query($koneksi, "select * from mobil where idmobil='$idmobil'");
    while ($data = mysqli_fetch_assoc($rentalmobil)){
    ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a> / Detail Mobil / <?php echo $data['merkmobil'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profil Mobil</p>
                </div>
                <div class="card-body fw-bold">
                    <p>Merk Mobil : <?php echo $data['merkmobil'];?></p>
                    <p>Jenis Mobil : <?php echo  $data['jenismobil'];?></p>
                    <p>Harga Sewa : <?php echo  $data['hargasewa'];?></p>
                    <a href="print.php?idmobil=<?php echo $data['idmobil']; ?>" class="btn btn-primary btn-sm text-white">CETAK</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>