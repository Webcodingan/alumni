<?php

    if (isset($_POST['btn_simpan'])) {
        //Include file koneksi, untuk koneksikan ke database
        include 'database.php';
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $ekstensi_diperbolehkan	= array('png','jpg','pdf','gif','jpeg');
            $gambar = $_FILES['gambar']['name'];
            $x = explode('.', $gambar);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar']['tmp_name'];

            if (!empty($gambar)){
                if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    
                    //Mengupload gambar
                    move_uploaded_file($file_tmp, 'gambar/'.$gambar);

                    $sql="insert into u_file (gambar) values ('$gambar')";

                    $simpan_bank=mysqli_query($kon,$sql);

                    if ($simpan_bank) {
                        header("Location:gallery.php?add=berhasil");
                    }
                    else {
                        header("Location:gallery.php?add=gagal");
                    }
                    
                }
            }else {
                $gambar="bank_default.png";
            }
        }

    }
?>