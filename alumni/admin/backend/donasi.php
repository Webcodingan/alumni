<?php
session_start();
if(isset($_SESSION['success'])) {
    echo "<script>alert('Data berhasil dihapus')</script>";
}
session_unset();
?>

<!DOCTYPE html>
<html>
<head>
    <!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
<title>Donasi </title>
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
		}
        ul,li,a {
            font-family: "Times new roman";
        }
    </style>
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
        <br>
   <center> <h2>Data Donasi</h2> </center>
   <br>
   <div class="d-flex justify-content-center">
   <a class="btn btn-warning mr-3" style="width: 180px" href="input.php">Tambah Data Donatur</a>
   <a class="btn btn-secondary mr-3" style="width: 180px" href="cetak.php" >Cetak Laporan to PDF</a> 
   </div>
    
   <br>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Email</td>
                <td>No Telepone</td>                 
                <td colspan="2" >Opsi</td>             
            </tr>
        </thead>
        <?php
        include "config2.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM donasi');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['no_telepone'] ?></td>
                <td><a class="btn btn-warning" href="edt.php?id=<?php echo $data['id']; ?>">Edit</a></td>
				<td><a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
            <br>
    <div class="navbar bg-dark">
	<div style="color: #fff;"> &copy Copyright | Danniel ~ <?php $tgl=date('d-m-Y'); echo $tgl; ?> ~   
	</div>

    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>