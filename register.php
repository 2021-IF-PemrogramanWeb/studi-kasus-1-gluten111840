<?php
// session start();
if(!empty($_SESSION)){ }else{ session_start(); }
?>
<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(to right, #b92b27, #1565c0)
        }

        .card {
            margin-bottom: 20px;
            border: none
        }

        .box {
            width: 500px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            background: #191919;
            ;
            text-align: center;
            transition: 0.25s;
            margin-top: 100px
        }

        .box input[type="text"],
        .box input[type="password"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 10px 10px;
            width: 250px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s
        }

        .box h1 {
            color: white;
            text-transform: uppercase;
            font-weight: 500
        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            width: 300px;
            border-color: #2ecc71
        }

        .box button[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer
        }

        .box button[type="submit"]:hover {
            background: #2ecc71
        }

        .forgot {
            text-decoration: underline
        }

        ul.social-network {
            list-style: none;
            display: inline;
            margin-left: 0 !important;
            padding: 0
        }

        ul.social-network li {
            display: inline;
            margin: 0 5px
        }

        .social-network a.icoFacebook:hover {
            background-color: #3B5998
        }

        .social-network a.icoTwitter:hover {
            background-color: #33ccff
        }

        .social-network a.icoGoogle:hover {
            background-color: #BD3518
        }

        .social-network a.icoFacebook:hover i,
        .social-network a.icoTwitter:hover i,
        .social-network a.icoGoogle:hover i {
            color: #fff
        }

        a.socialIcon:hover,
        .socialHoverClass {
            color: #44BCDD
        }

        .social-circle li a {
            display: inline-block;
            position: relative;
            margin: 0 auto 0 auto;
            border-radius: 50%;
            text-align: center;
            width: 50px;
            height: 50px;
            font-size: 20px
        }

        .social-circle li i {
            margin: 0;
            line-height: 50px;
            text-align: center
        }

        .social-circle li a:hover i,
        .triggeredHover {
            transform: rotate(360deg);
            transition: all 0.2s
        }

        .social-circle i {
            color: #fff;
            transition: all 0.8s;
            transition: all 0.8s
        }</style>
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-md-6">
            <div id="notifikasi">
                <div class="alert alert-danger">
                    <small>Your registration was failed. Please check your data!</small>
                </div>
            </div>
            <div class="card">
                <form class="box" method="post" action="registerMachine.php?aksi=register" id="formregister">
                    <h1>Register</h1>
                    <p class="text-muted">Register Your Account</p> 
                    <input type="text" name="nama" placeholder="Name" class="form-control" required="required" autocomplete="off">
                    <input type="text" name="email" placeholder="E-mail" class="form-control" required="required" autocomplete="off"> 
                    <input type="text" name="username" placeholder="Username" class="form-control" required="required" autocomplete="off">
                    <input type="text" name="no_hp" placeholder="Phone Number" class="form-control" required="required" autocomplete="off">
                    <input type="password" name="pass" placeholder="Password" class="form-control" required="required" autocomplete="off">
                    <input type="password" name="repass" placeholder="Re-type Password" class="form-control" required="required" autocomplete="off">
                    <p class="text-muted">Already had an account? <a href="login.php">Login</a></p>
                    <button type="submit" name="proses_login">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
    <script>
        // notifikasi gagal di hide
        <?php if(empty($_GET['get'])){?>
        $("#notifikasi").hide();
        <?php }?>
        let reggagal = function(){
            $("#notifikasi").fadeOut('slow');
        };
        setTimeout(reggagal, 4000);
    </script>
</body>
</html>