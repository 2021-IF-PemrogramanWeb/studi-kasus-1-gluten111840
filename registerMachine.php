<?php
    require 'call.php';

    if(!empty($_GET['aksi'] == 'register'))
    {
        // validasi text untuk filter karakter khusus dengan fungsi strip_tags()
        $name = strip_tags($_POST['nama']);
        $email = strip_tags($_POST['email']);
        $username = strip_tags($_POST['username']);
        $phone = strip_tags($_POST['no_hp']);
        $pass = strip_tags($_POST['pass']);
        $repass = strip_tags($_POST['repass']);

        if($pass == $repass)
        {
            $result = $jembatan->register_process($name, $email, $username, $phone, $pass);
            echo "<script>window.location='login.php';</script>";
        }

        else 
        {
            echo "<script>window.location='register.php?get=gagal';</script>";
        }
        
    }