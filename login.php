<?php

session_start();

if(isset($_SESSION['login'])){
    header('location: index.php');
    exit;
}

require 'fungsi.php';

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = md5($_POST["password"]);

  //$result = mysqli_query($koneksi, "SELECT * FROM user where username = '$username'");
  $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

  $cek = mysqli_num_rows($result);
  if($cek > 0){
    $_SESSION['login'] = true;

    header('location: index.php');
    exit;
  }

  $error = true;
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
    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">
    <title>Login | LAPORAN KERJA</title>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
            <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Close Navbar -->

<!-- Container -->
<div class="container">
    <div class="row">
      <div class="col-md-6 text-center" style="background-image: url('img/bg/moroccan-flower.png');">
          <?php if(isset($error)) : ?>
          <?php echo '<script>alert("Username atau Password Salah");</script>';?>
          <?php endif; ?>
        <form action="" method="POST">
          <h4 class="my-5 fw-bold">Login</h4>
          <div class="mb3">
          <div class="my-5">
            <input type="text" class="form-control w-50" name="username" placeholder="Username">
          </div>
          <div class="my-5">
            <input type="password" class="form-control w-50" name="password" placeholder="Password">
          </div> 
          <button type="submit" name="login" class="btn btn-primary text-uppercase">Login</button>
        </form>
      </div>
    </div>

</div>

<!-- Close Container -->


    <!-- Bootstrap  -->


    
</body>
</html>