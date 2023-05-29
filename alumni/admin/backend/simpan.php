<?php
//Include file koneksi ke database
include "config2.php";

//menerima nilai dari kiriman form input-barang 
$nama=$_POST["nama"];
$email=$_POST["email"];
$no_telepone=$_POST["no_telepone"];


//Query input menginput data kedalam tabel barang
  $sql="insert into donasi (nama,email,no_telepone) values
		('$nama','$email','$no_telepone')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
header('location:donasi.php');
?>