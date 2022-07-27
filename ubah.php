<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Ubah | Data Pegawai | LAPORAN KERJA</title>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
  <div class="container">
    <a class="navbar-brand" href="#">LAPORAN KERJA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Close Navbar -->

<!-- Container -->
<div class="container">
    <div class="row my-3">
        <div class="col-md">
            <h2><i class="bi bi-pencil-square"></i>&nbsp;Ubah Data Pegawai</h2>
        </div>
        <hr>
    </div>
    <div class="row mb-3">
        <div class="col-md">
            <form action="" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">ID Pegawai</label>
                <input type="number" class="form-control w-50" id="exampleFormControlInput1" name="id" autocomplete="off" readonly>
            </div>
            <div class="mb-3">
                <label for="nip_nik" class="form-label">NIP/NIK</label>
                <input type="number" class="form-control w-50" id="exampleFormControlInput1" name="nip_nik" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control w-50" id="exampleFormControlInput1" name="nama" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label>Jabatan</label>
                <select class="form-select w-50" name="jabatan">
                    <option selected disabled> ------------------------------------Pilih Jabatan-----------------------------------</option>
                    <option value="Kepala">Kepala</option>
                    <option value="Anggota">Anggota</option>
                    <option value="Kabid">Kabid</option>
                    <option value="Kasub">Kasub</option>
                </select>   
            </div>
            <div class="mb-3">
                <label>Golongan Ruang</label>
                <select class="form-select w-50" name="gol_ruang">
                    <option selected disabled> --------------------------------Pilih Golongan Ruang-------------------------------</option>
                    <option value="Kepala">Kepala</option>
                    <option value="Anggota">Anggota</option>
                    <option value="Kabid">Kabid</option>
                    <option value="Kasub">Kasub</option>
                </select>   
            </div>
            <div class="mb-3">
                <label>Bidang Tugas</label>
                <select class="form-select w-50" name="bid_tugas">
                    <option selected disabled> --------------------------------Pilih Bidang Tugas-------------------------------</option>
                    <option value="Kepala">Kepala</option>
                    <option value="Anggota">Anggota</option>
                    <option value="Kabid">Kabid</option>
                    <option value="Kasub">Kasub</option>
                </select>   
            </div>
            <div class="mb-3">
                <label for="Gambar" class="form-label">Gambar</label>
                <input class="form-control form-control-sm w-50" id="gambar" type="file" name="gambar">
            </div>
            <hr>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
            <button type="submit" name="ubah" class="btn btn-warning">Ubah</button>
           


            </form>
        </div>
    </div>
</div>
<!-- Close Container -->

<!-- Footer -->
<div class="container-fluid bg-dark text-white">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-uppercase fw-bold">About</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, labore suscipit, 
                ipsum deserunt itaque perspiciatis, animi fugit aperiam ullam quaerat placeat reiciendis 
                expedita obcaecati quos quae deleniti. Commodi, aliquid vitae.</p>
        </div>
        <div class="col-md-6 text-center link">
            <h4 class="text-uppercase fw-bold">Link Account</h4>
            <a href="https://web.facebook.com" target="_blank"><i class="bi bi-facebook fs-2"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
            <a href="https://library.usu.ac.id" target="_blank"><i class="bi bi-globe fs-2"></i></a>
        </div>
    </div>
    <footer class="text-center" style="padding: 5px;">
        <p>Aplikasi Versi 1.0 <i class="bi bi-suit-heart-fill" style="color: red;"></i> <u class="fw-bold">Perpustakaan USU</u></p>
    </footer>
</div>
<!-- close footer -->
    <!-- Bootstrap  -->
    
</body>
</html>