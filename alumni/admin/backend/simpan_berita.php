<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$judul=$_POST["judul"];
$deskripsi=$_POST["deskripsi"];
$isi=$_POST["isi"];
$gambar=$_FILES["gambar"];
$tanggal=$_POST["tanggal"];

     if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
              $gambar = $_FILES['gambar']['name'];
            $x = explode('.', $gambar);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar']['tmp_name'];

            if (!empty($gambar)){
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
                    //Mengupload gambar
                    move_uploaded_file($file_tmp, 'gambar1/'.$gambar);

                    $sql="insert into berita (judul,deskripsi,gambar,isi,tanggal) values
                          ('$judul','$deskripsi','$gambar','$isi','$tanggal')";
                  
                  //Mengeksekusi/menjalankan query diatas	
                    $hasil=mysqli_query($kon,$sql);
                  
                  //Kondisi apakah berhasil atau tidak
                  header('location:berita.php');
                }
            }else {
                $gambar="bank_default.png";
            }
        }

//Query input menginput data kedalam tabel barang

?>