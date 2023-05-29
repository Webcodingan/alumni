<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$isi = $_POST['isi'];
$gambar = $_POST['gambar'];
$tanggal = $_POST['tanggal'];

mysqli_query($kon,"UPDATE berita SET judul='$judul', deskripsi='$deskripsi', isi='$isi', gambar='$gambar', tanggal='$tanggal' WHERE id='$id'");
 
header("location:berita.php?pesan=update");
?>