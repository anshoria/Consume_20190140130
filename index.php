<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <title>Data Mobil</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Daftar Mobil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="create.ph++++++++++++++++++++p">Tambah Mobil</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    
    <!-- Modal -->
    <div class="container data-mobil mt-5">
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
            Tambah Data
        </button>
        <!--Modal tambah data-->
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                   <form method="post" action="create.php" name="form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahDataLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="merkmobil" class="form-label">Merk Mobil</label>
                                    <input type="text" class="form-control" id="merkmobil" placeholder="Masukkan Merk Mobil" name="merkmobil" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jenismobil" class="form-label">Jenis Mobil</label>
                                    <textarea type="text" class="form-control" id="jenismobil" placeholder="Masukkan Jenis Mobil" name="jenismobil" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="hargasewa" class="form-label">Harga Sewa</label>
                                    <textarea type="text" class="form-control" id="hargasewa" placeholder="Masukkan Harga Sewa" name="hargasewa" required></textarea>
                                </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
    <!--Akhir Modal-->

    <!--tabel-->
    <div class="container mt-5">
      <table class="table table-striped" id="tabelRentalmobil">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Merk Mobil</th>
            <th scope="col">Jenis Mobil</th>
            <th scope="col">Harga Sewa</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

      <tbody>
          <?php
          include 'config.php';
          $no = 1;
          $rentalmobil = mysqli_query($koneksi, "select * from mobil");
          while ($data = mysqli_fetch_array($rentalmobil)){
            ?>
              <tr>
                  <td><?php echo $no++; ?> </td>
                  <td><?php echo $data['merkmobil']; ?> </td>
                  <td><?php echo $data['jenismobil']; ?> </td>
                  <td><?php echo $data['hargasewa']; ?> </td>
                  <td>
                      <a href="detail.php?idmobil=<?php echo $data['idmobil']; ?>" class= "btn btn-success btn-sm text-white">DETAIL</a>
                      <a href="edit.php?idmobil=<?php echo $data['idmobil']; ?>" class= "btn btn-warning btn-sm text-white">EDIT</a>
                      <a href="delete.php?idmobil=<?php echo $data['idmobil']; ?>" class= "btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data mobil ini?')">HAPUS</a>
                  </td>
              </tr>
            <?php
          }
          ?>
      </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#tabelRentalmobil').DataTable();
        });
    </script>
</body>
</html>