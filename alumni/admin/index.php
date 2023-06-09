
<?php
//inisialisasi session
session_start();

//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Admin</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style type="text/css">
h1 {
text-transform: uppercase;
color: Black;
text-align: left;
font-family: "Times new roman";
}
ul,li,a {
    font-family: "Times new roman";
}
</style>

</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <a href="index.php" class="navbar-brand">Admin</a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item">
                <a href="index.php" class="nav-link text-light">Home</a>

            </li>
            <li class="nav-item ml-4">
                <a href="backend/gallery.php" class="nav-link text-light"> Gallery </a>
            </li>
            <li class="nav-item ml-4">
                <a href="backend/donasi.php" class="nav-link text-light"> Donasi </a>
            </li>
            <li class="nav-item ml-4">
                <a href="backend/cari.php" class="nav-link text-light"> Cari alumni </a>
            </li>
            <li class="nav-item ml-4">
                <a href="backend/berita.php" class="nav-link text-light"> Berita </a>
            </li>
            <li class="nav-item ml-4">
                <a href="logout.php" class="nav-link text-light"> Log-out </a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid bg-light" style="height:80vh">
  <div class="container-fluid">
    
    <h1 class="display-4 text-center mt-3"></h1>
    <h2>Selamat datang, admin!!!</h2>
    <p class="lead text-center"></p>
  </div>
</div>
<div class="navbar bg-dark">
	<div style="color: #fff;"> &copy Copyright | Danniel ~ <?php $tgl=date('d-m-Y'); echo $tgl; ?> ~   
	</div>


</body>
 <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>