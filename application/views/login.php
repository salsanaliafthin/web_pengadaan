<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url('assets_login/');?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets_login/');?>css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url('assets_login/');?>images/signin-image.png" alt="sign up image"></figure>
                        <a href="<?php echo site_url('Register');?>" class="signup-image-link">Register Pegawai</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>

                        <?php echo $this->session->flashdata('message') ?>
                        <form method="POST" class="register-form" id="login-form" action="<?php echo site_url('login/proses');?>">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url('assets_login/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets_login/');?>js/main.js"></script>
</body>
</html>