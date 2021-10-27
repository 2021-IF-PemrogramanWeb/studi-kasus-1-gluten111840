<?php
// session start();
if(!empty($_SESSION)){ }else{ session_start(); }
?>
<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body style="background:#586df5;">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <br/><br/>
            <div id="logout">
                <?php if(isset($_GET['signout'])){?>
                    <div class="alert alert-success">
                        <small>Anda Berhasil Logout</small>
                    </div>
                <?php }?>
            </div>
            <div id="notifikasi">
                <div class="alert alert-danger">
                    <small>Login Anda Gagal, Periksa Kembali Username dan Password</small>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sign in</h4>
                </div>
                <div class="card-body">
                    <!-- form berfungsi mengirimkan data input
                    dengan method post ke proses login dengan paramater get aksi login -->
                    <form method="post" action="loginMachine.php?aksi=login" id="formlogin">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input name="email" class="form-control" placeholder="Input your E-mail" type="text" required="required" autocomplete="off">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Password</label>
                            <input name="pass" class="form-control" placeholder="Input your Password" type="password" required="required" autocomplete="off">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <button type="submit" name="proses_login" class="btn btn-primary btn-block"> Login  </button>
                        </div> <!-- form-group// -->
                    </form>
                    <div class="form-group">
                        <a href="index.php"> Back ke Home  </a>
                    </div> <!-- form-group//-->
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
    <script>
        // notifikasi gagal di hide
        <?php if(empty($_GET['get'])){?>
        $("#notifikasi").hide();
        <?php }?>
        let logingagal = function(){
            $("#logout").fadeOut('slow');
            $("#notifikasi").fadeOut('slow');
        };
        setTimeout(logingagal, 4000);
    </script>
</body>
</html>