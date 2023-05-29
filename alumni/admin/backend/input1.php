<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</head>
<body>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark text-light '>
    <div class="container">
        <a href="../index.php" class="navbar-brand">Admin</a>
        <button class="navbar-toggler" type="button" data-togle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto pt-2 pb-2">
            <li class="nav-item">
                <a href="../index.php" class="nav-link text-light">Home</a>

            </li>
            <li class="nav-item ml-4">
                <a href="../forum.php" class="nav-link text-light"> Forum </a>
            </li>
            <li class="nav-item ml-4">
                <a href="donasi.php" class="nav-link text-light"> Donasi </a>
            </li>
            <li class="nav-item ml-4">
                <a href="cari.php" class="nav-link text-light"> Cari alumni </a>
            </li>
            <li class="nav-item ml-4">
                <a href="berita.php" class="nav-link text-light"> Berita </a>
            </li>
            <li class="nav-item ml-4">
                <a href="../logout.php" class="nav-link text-light"> Log-out </a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <br>
<h2>Form Tambah Data Berita</h2>
    <form action="simpan_berita.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Judul:</label>
            <input type="text" name="judul" class="form-control" placeholder="" />
        </div>
        <div class="form-group">
            <label>Deskripsi:</label>
            <input type="text" name="deskripsi" class="form-control" placeholder="" />
        </div>

        <div class="form-floating">
        <textarea class="form-control" id="" name="isi" style="height: 100px"></textarea>
        <label>Isi</label>
        </div>
       <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <br>
                        <div id="msg"></div>
                        <input type="file" name="gambar" class="file" >
                        <br>
                        <img src="gambar/80x80.png" id="preview" class="img-thumbnail">
                    </div>
                </div>
            </div>

         <div class="form-group">
            <label>Tanggal:</label>
            <input type="text" name="tanggal" class="form-control" placeholder="" />
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="berita.php" class="btn btn-success">Back</a>
        <button type="reset" name="reset" class="btn btn-danger" style="width: 90px;">Reset</button>
    </form>
</div>
<br>
<br>
</body>
</html>



