<?php include APPPATH . "views/includes/header.php"?>
<?php include APPPATH . "views/includes/sidebar.php"?>

<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Profile
                <small>Welcome to Afyasoft</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">                
                <button class="btn btn-white btn-icon btn-round d-none d-md-inline-block float-right m-l-10" type="button">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i>Hekima</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>                
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card profile-header">
                    <div class="body text-center">
                        <div class="profile-image"> <img src="<?php echo base_url('public/assets/images/doctors/member4.png') ?>" alt=""> </div>
                        <div>
                            <h4 class="m-b-0"><strong>Dr. Jonson</strong></h4>
                            <span class="job_post">Doctor</span>
                        </div>
                    </div>                    
                </div>                               
                
            
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">Recent Activity</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Account Details</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                            
                            <h6>Today Activities</h6>
                            <hr>
                            <div class="sl-content">
                                    <small class="m-b-0">2 patients served</small>
                                    <small>08:30am <a href="javascript:void(0);" class="text-info"></a>.</small>
                                </div>
                                <br>
                            <div class="sl-content">
                                    <small class="m-b-0">john john serviced </small>
                                    <small>11:03am <a href="javascript:void(0);" class="text-info"></a>.</small>
                                </div>
                        </div>
                        <div class="tab-pane body" id="Account">
                        <div class="container">

  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Full Name:</label>
      <input type="text" name="full_name" class="form-control">
    </div>
    <div class="form-group">
      <label for="pwd">Username:</label>
      <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="pwd">Phone Number:</label>
      <input type="number" name="phone_number" class="form-control">
    </div>
    <div class="form-group">
      <label for="pwd">Department:</label>
      <input type="text" name="Department" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="submit" class="btn btn-danger">Block</button>
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div> 
                        </div>                        
                    </div>
                </div>
                              
            </div>
        </div>        
    </div>
</section>
<?php include APPPATH . "views/includes/footer.php"?>