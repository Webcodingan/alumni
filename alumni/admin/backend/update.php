<?php 
 
include 'config1.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$tahun_lulus = $_POST['tahun_lulus'];
$email = $_POST['email'];

 
mysqli_query($kon,"UPDATE search SET nama='$nama', tahun_lulus='$tahun_lulus', email='$email' WHERE id='$id'");
 
header("location:cari.php?pesan=update");
?>