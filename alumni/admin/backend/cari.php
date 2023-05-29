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
    
	<title>Cari alumni</title>
	<style type="text/css">
		* {
			font-family: "Trebuchet MS";
		}
		h1 {
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
		ul,li,a,button,label {
    		font-family: "Times new roman";
		}
	</style>
<body>
    <br>
	<center><h1>Pencarian Nama Alumni</h1></center>
	<form method="GET" action="cari.php" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit" class="btn btn-primary">search</button>
	</form>
    <br>
	<div class="d-flex justify-content-center">
        <a href="inputalm.php" class="btn btn-success mr-3"><span class="fas fa-arrow-left"></span>Tambah Data</a>
		<a href="cetak1.php" class="btn btn-secondary mr-3"><span class="fas fa-arrow-left"></span>Cetak Laporan To PDF</a>
	    </div>
	<br>
	<table>
		<thead>
			<tr >
				
				<th>Id</th>
				<th>Nama</th>
				<th>Tahun lulus</th>
				<th>Email</th>
				<th colspan = "2">Opsi</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 
			//untuk meinclude kan koneksi
			include('config.php');

				//jika kita klik cari, maka yang tampil query cari ini
				if(isset($_GET['kata_cari'])) {
					//menampung variabel kata_cari dari form pencarian
					$kata_cari = $_GET['kata_cari'];

					//jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
					//jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
					$query = "SELECT * FROM search WHERE id like '%".$kata_cari."%' OR nama like '%".$kata_cari."%' OR email like '%".$kata_cari."%' ORDER BY id ASC";
				} else {
					//jika tidak ada pencarian, default yang dijalankan query ini
					$query = "SELECT * FROM search ORDER BY id ASC";
				}
				

				$result = mysqli_query($koneksi, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				//kalau ini melakukan foreach atau perulangan
				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['tahun_lulus']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
				<td><a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a></td>
			
			</tr>
			<?php
			}
			?>
             
		</tbody>
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