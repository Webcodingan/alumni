<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Berita</title>
	<!-- Bootstrap CSS -->
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
	<h3>Edit data Berita</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
    $query_mysql = mysqli_query($kon,"SELECT * FROM berita WHERE id='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){

    // $sql  = "SELECT * FROM berita WHERE id=$id";
	// $query_mysql = mysqli_query($kon, $sql);
	// $nomor = 1;
	// while($data = mysqli_fetch_assoc($query_mysql)){
	?>
	<form action="updt_berita.php" method="post">		
        
		<table>
			<tr>
				<td>Judul</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="judul" value="<?php echo $data['judul'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi" value="<?php echo $data['deskripsi'] ?>"></td>					
			</tr>			
			<tr>
				<td>Isi</td>
				<td><input type="text" name="isi" value="<?php echo $data['isi'] ?>"></td>					
			</tr>
            <tr>
				<td>Gambar</td>
				<td><input type="file" name="gambar" value="<?php echo $data['gambar'] ?>"></td>					
			</tr>
            <tr>
				<td>Tanggal</td>
				<td><input type="text" name="tanggal" value="<?php echo $data['tanggal'] ?>"></td>					
			</tr>						
		</table>
        <br>
        <button type="submit" class="btn btn-primary" value="Simpan"> Simpan </button>
	</form>
    </div>
	<?php } ?>
</body>
</html>
