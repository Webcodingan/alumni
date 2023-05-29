<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style type="text/css">
        * {
			font-family: "Trebuchet MS";
		}
		h2 {
			text-transform: uppercase;
			color: Black;
            font-family: "Times new roman";
		}
		table {
			border: 1px solid #ddeeee;
			border-collapse: collapse;
			border-spacing: 0;
			width: 70%;
			margin: 10px auto 10px auto;
		}
		th, td {
			border: 1px solid #ddeeee;
			padding: 20px;
			text-align: center;
            font-family: "Times new roman";
		}
        ul,li,a {
            font-family: "Times new roman";
        }
    </style>
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
                <a href="gallery.php" class="nav-link text-light"> Gallery </a>
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
<center> <h2>Berita</h2> </center>
   <a class="btn btn-success d-flex mx-auto" style="width: 120px" href="input1.php">Tambah berita</a>
   <br>
   <div class= table-responsive>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Judul</td>
                <td>Deskripsi</td>
                <td>Isi</td>                 
                <td width='60px'>Gambar</td>                 
                <td>Tanggal</td>                 
                <td colspan="2" >Opsi</td>             
            </tr>
        </thead>
        <tbody>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM berita');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['judul'] ?></td>
                <td><?php echo $data['deskripsi'] ?></td>
                <td><?php echo $data['isi'] ?></td>
                <td><img src="gambar1/<?php echo $data['gambar'];?>" class="rounded" width='100%' alt="Cinque Terre"></td>
                <td><?php echo $data['tanggal'] ?></td>
                <td><a class="btn btn-warning" href="edt1.php?id=<?php echo $data['id']; ?>">Edit</a></td>
				<td><a class="btn btn-danger" href="delete1.php?id=<?php echo $data['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
        </div>
</div>
                    <br>
            <div class="navbar bg-dark">
            <div style="color: #fff;"> &copy Copyright | Danniel ~ <?php $tgl=date('d-m-Y'); echo $tgl; ?> ~   
            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>