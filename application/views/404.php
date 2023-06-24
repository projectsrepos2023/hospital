<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Page Not Found</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/main.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/authentication.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/color_skins.css') ?>">
</head>

<body class="theme-cyan authentication sidebar-collapse">
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(<?php echo base_url('public/assets/images/login.jpg') ?>)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="" action="#">
                    <div class="header">
                        <div class="logo-container">
                            <img src="https://thememakker.com/templates/oreo/hospital/html/assets/images/logo.svg" alt="">
                        </div>
                        <h5>Error 404</h5>
                        <span>Page not found</span>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="<?php echo site_url('login') ?>" class="btn btn-primary btn-round btn-block  waves-effect waves-light">GO TO LOGIN PAGE</a>
                        <h5><a href="javascript:void(0);" class="link">Need Help?</a></h5>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="<?php echo base_url('public/bundles/libscripts.bundle.js') ?>"></script>
<script src="<?php echo base_url('public/bundles/vendorscripts.bundle.js') ?>"></script> 
</body>

</html>