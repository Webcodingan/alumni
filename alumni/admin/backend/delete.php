<?php
include "config2.php";
$id = $_GET['id'];

$query1 = "delete from donasi where id='$id'";
$result1 = mysqli_query($kon, $query1);
session_start();
$_SESSION['success'] = "Data berhasil dihapus";
header('location:donasi.php');


?>
