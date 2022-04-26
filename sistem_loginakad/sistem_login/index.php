<?php

include "koneksi.php";

error_reporting(0);
 
session_start();

if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
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
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <title>AKAD UNIMED</title>
  </head>
  <body>

  <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
  </div>

  <div class="global-container">
    <div class="column-left">
      <div class="card login-form">
        <div class="card-body">
          <h1 class="card-title">Log in</h1>
          <div class="form-description">Selamat Datang di Akad Unimed. Silahkan masuk untuk mengakses Akad</div>
        </div>
        <div class="card-text">
          <form action="" method="POST">
            <div class="row mb-3">
              <label for="email" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="inputPassword3" value="<?php echo $_POST['password']; ?>" required>
              </div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember NIM</label>
            </div>
            <button name="submit" type="submit" class="btn btn-success">Masuk</button>
          </form>
        </div>
      </div>
    </div>

    <div class="column-right">
      <div class="text">
        <h1>Universitas Negeri Medan</h1>
        <h2>Learning Management System</h2>
        </div>
        <img src="img/logo.png">

    </div>
        
      </div>
  </body>
</html>