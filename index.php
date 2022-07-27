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
    <title>Data Pegawai | LAPORAN KERJA</title>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
  <div class="container">
    <a class="navbar-brand" href="#">LAPORAN KERJA PEGAWAI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
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
            <h2 class="text-uppercase text-center fw-bold">Data Pegawai</h2>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md">
            <a href="tambah.php" class= "btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data Pegawai </a>
            <a href="#" class="btn btn-success ms-1" target="blank"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Export ke Excel</a>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-md">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr>
        </tbody>
        </table>
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
    <!-- Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


    <script>
        $(document).ready(function () {
        $('#example').DataTable();
        });
    </script>
</body>
</html>