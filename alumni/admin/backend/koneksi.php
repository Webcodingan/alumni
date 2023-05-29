<?php

$host="localhost";
$user="root";
$password="";
$db="pendaftaran";

$kon = mysqli_connect($host,$user,$password);

$hasil=mysqli_select_db($kon,$db);

?>