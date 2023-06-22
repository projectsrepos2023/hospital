<?php include APPPATH . "views/includes/header.php"?>
<?php include APPPATH . "views/includes/sidebar.php"?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>All Staff
                <small>Welcome to Afyasoft</small>
                </h2>
            </div>            
            <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                
               
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Staff</a></li>
                    <li class="breadcrumb-item active">All Staff</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Permanent">Admins</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Consultant">All Staff</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content m-t-10">
                    <div class="tab-pane active" id="Permanent">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card xl-blue member-card doctor">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="<?php echo base_url('public/assets/images/doctors/member4.png') ?>" class="img-fluid" alt="profile-image">                               
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Dr. Jonson</h4>
                                            <h6 class="text-muted">Doctor</h6>
                                            <p class="text-muted">0747587980</p>
                                            <p class="text-muted">jonson@gmail.com</p>                           
                                            <a href="<?php echo base_url('staff_profile') ?>"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="tab-pane" id="Consultant">
                        <div class="row clearfix">
                    
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card xl-blue member-card doctor">
                                    <div class="body">
                                        <div class="member-thumb">
                                            <img src="<?php echo base_url('public/assets/images/doctors/member8.png') ?>" class="img-fluid" alt="profile-image">                               
                                        </div>
                                        <div class="detail">
                                            <h4 class="m-b-0">Dr. Jonson</h4>
                                            <h6 class="text-muted">Doctor</h6>
                                            <p class="text-muted">0747587980</p>
                                            <p class="text-muted">jonson@gmail.com</p>                           
                                            <a href="<?php echo base_url('staff_profile') ?>"  class="btn btn-default btn-round btn-simple">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
    <?php include APPPATH . "views/includes/footer.php"?>