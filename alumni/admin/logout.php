<?php

    session_start(); //inisialisasi session
    session_destroy();//menghapus session
    session_start();
   $_SESSION['success'] = "Anda berhasil logout";
    header("Location: login.php"); //jika berhasil maka akan diredirect ke file index.php

    
?>