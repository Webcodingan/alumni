<?php
include "koneksi.php";
$id = $_GET['id'];

$query1 = "delete from berita where id='$id'";
$result1 = mysqli_query($kon, $query1);
header('location:berita.php');

?>