<?php 
 
include 'config2.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telepone = $_POST['no_telepone'];
 
mysqli_query($kon,"UPDATE donasi SET nama='$nama', email='$email', no_telepone='$no_telepone' WHERE id='$id'");
 
header("location:donasi.php?pesan=update");
?>