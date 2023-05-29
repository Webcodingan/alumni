<?php
//Include file koneksi ke database
include "config1.php";

//menerima nilai dari kiriman form input-barang 
$nama=$_POST["nama"];
$tahun_lulus=$_POST["tahun_lulus"];
$email=$_POST["email"];


//Query input menginput data kedalam tabel barang
  $sql="insert into search (nama,tahun_lulus,email) values
		('$nama','$tahun_lulus','$email')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
header('location:cari.php');
?>