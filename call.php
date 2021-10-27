<?php
    include 'Koneksi.php';
    include 'Controller.php';
    $db = new Koneksi();
    $koneksi = $db->DBConnect();
    $jembatan = new Controller($koneksi);
    error_reporting(0);
    $id = $_SESSION['ADMIN']['id'];
    $sesi = $jembatan->tampil_data_id('user','id',$id);
