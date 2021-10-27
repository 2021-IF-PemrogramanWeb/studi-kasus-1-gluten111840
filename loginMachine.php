<?php
    require 'call.php';

    if(!empty($_GET['aksi'] == 'login'))
    {
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $user = strip_tags($_POST['email']);
        $pass = strip_tags($_POST['pass']);
        // panggil fungsi proses_login() yang ada di class prosesCrud()
        $result = $jembatan->login_process($user,$pass);
        if($result == 'gagal')
        {
            echo "<script>window.location='login.php?get=gagal';</script>";
        }else{
            // status yang diberikan
            session_start();
            $_SESSION['ADMIN'] = $result;
            // status yang diberikan
            echo "<script>window.location='index.php';</script>";
        }
    }