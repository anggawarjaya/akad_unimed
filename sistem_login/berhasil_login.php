<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Oswald&family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style3.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,600&family=Oswald&family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    
    <!-- Bootstrap JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">

    <!-- Bootsraps Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <title>AKAD UNIMED</title>
  </head>
  <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_left">
        <form action="" method="POST" class="login-email">
        <?php echo "<h1>Halo, " . $_SESSION['username'] ."!". "</h1>"; ?>
        </form>
          <h6>Selamat Datang di AKAD UNIMED</h6>
        </div>
        <div class="header_right">
          <div class="header_img"> <img src="img/fotoprofil.png" alt=""> </div>
          <div class="right_title">
            <h5 class="right_name">Khairul Abdi<i class="fas fa-cog"></i></h5> 
            <h6 class="right_nim">4213250019</h6> 
          </div>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <img src="img/logo.png"> <span class="nav_logo-name">AKAD UNIMED</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Profil</span> </a> <a href="#" class="nav_link"> <i class='bx bx-calendar nav_icon'></i> <span class="nav_name">Jadwal Kuliah</span> </a> <a href="#" class="nav_link"> <i class='bx bx-file nav_icon'></i> <span class="nav_name">Kartu  Rencana Studi</span> </a> <a href="#" class="nav_link"> <i class='bx bx-archive nav_icon'></i> <span class="nav_name">Kartu Hasil Studi</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Transkip NIlai</span> </a> </div>
            </div> 
            <form action="" method="POST" class="login-email">
                <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Keluar</span> </a>
            </form>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> <i class="fas fa-square"></i>  SKS yang ditempuh</h5>
              <p class="card-text">42 SKS</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-square"></i>  Indeks Perkuliahan Kumulatif</h5>
              <p class="card-text">4.0</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-square"></i>  Semester</h5>
              <p class="card-text">2 Semester</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> <i class="fas fa-square"></i>  Informasi Pengguna</h5>
              <img src="img/fotoprofil.png"> 
              <p class="card-text-profil">Khairul Abdi</p>
              <p class="card-text-profil">Ilmu Komputer</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><i class="fas fa-square"></i>  Indeks Perkuliahan Kumulatif</h5>
                <p class="card-text">4.0</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <script src="script.js"></script>
  </body>
</html>