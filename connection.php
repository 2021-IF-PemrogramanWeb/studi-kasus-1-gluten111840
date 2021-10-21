<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "pweb_1";
    
    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
    if(mysqli_connect_errno()){
        echo 'Cannot connect to Database : '.mysqli_connect_error();
    }
?>