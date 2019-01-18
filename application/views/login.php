<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets');?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url('assets');?>/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets');?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url('assets');?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="/index.html"><img class="logo-img" src="<?php echo base_url('assets/');?>/assets/images/logo.png" alt="logo"></a><span class="splash-description">Login</span></div>
            <div class="card-body">
                <?php echo $this->session->flashdata('message') ?>
                <form method="post" action="<?php echo site_url('Login/proses') ?>">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url('assets');?>/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url('assets');?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>