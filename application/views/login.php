<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/oreo/hospital/html/light/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 18:31:38 GMT -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Hekima Hospital | Login </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/authentication.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/color_skins.css') ?>">

    <style>
        .alert {
            background-color: rgb(252, 130, 130);;
            color: white;
            font-size: small;
            border-radius: 5px;
        }
    </style>
    
</head>

<body class="theme-cyan authentication sidebar-collapse">
<!-- Navbar -->
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(<?php echo base_url('public/assets/images/login.jpg') ?>)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">

                <?php echo form_open('auth/login') ?>
                    <div class="header">
                        <div class="logo-container">
                            <img src="https://thememakker.com/templates/oreo/hospital/html/assets/images/logo.svg" alt="">
                        </div>
                        <h5>Log in</h5>

                        <?php if(validation_errors()): ?>
                          <div class="alert alert-dismissible fade show" role="alert">
                            <?php echo validation_errors() ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span arial-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php elseif( $loginError ): ?>
                            <div class="alert alert-dismissible fade show" role="alert">
                            <?= $loginError ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span arial-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif ?>
                    </div>
                    <div class="content">                                                
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter User Name" name="username">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" class="form-control" name="password" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-primary btn-round btn-block  ">LOGIN</button>
                    </div>
                <?php echo form_close() ?>

            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="<?php echo base_url('public/bundles/libscripts.bundle.js') ?>"></script>
<script src="<?php echo base_url('public/bundles/vendorscripts.bundle.js') ?>"></script> <!-- Lib Scripts Plugin Js -->

<script>
//=============================================================================
$('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
}).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
});
</script>
</body>
</html>