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
                    <li class="breadcrumb-item active">Doctor Profile</li>
                </ul>                
            </div>
        </div>
    </div>    
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card profile-header">
                    <div class="body text-center">
                        <div class="profile-image"> <img src="<?php echo base_url('public/assets/images/sm/avatar2.png"') ?>" alt=""> </div>
                        <div>
                            <h4 class="m-b-0"><strong>Dr. Charlotte</strong> Deo</h4>
                            <span class="job_post">Neurologist</span>
                            <p>795 Folsom Ave, Suite 600<br> San Francisco, CADGE 94107</p>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-round">Follow</button>
                            <button class="btn btn-primary btn-round btn-simple">Message</button>
                        </div>
                        <p class="social-icon m-t-5 m-b-0">
                            <a title="Twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="Facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="Google-plus" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="Behance" href="javascript:void(0);"><i class="zmdi zmdi-behance"></i></a>
                            <a title="Instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram "></i></a>
                        </p>
                    </div>                    
                </div>                               
                <div class="card">
                    <div class="body">
                        <div class="workingtime">
                            <h6>Working Time</h6>
                            <small class="text-muted">Tuesday</small>
                            <p>06:00 AM - 07:00 AM</p>
                            <hr>
                            <small class="text-muted">Thursday</small>
                            <p>06:00 AM - 07:00 AM</p>
                            <hr>
                        </div>
                        <div class="reviews">
                            <h6>Reviews</h6>
                            <small class="text-muted">Staff</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Punctuality</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Helpfulness</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Knowledge</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Cost</small>
                            <p>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                                <i class="zmdi zmdi-star-outline"></i>
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Followers">Followers</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#friends">Friends</a></li>                        
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="Followers">
                            <ul class="right_chat list-unstyled">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Chris Fox</span>
                                                <span class="message">Designer, Blogger</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Joge Lucky</span>
                                                <span class="message">Java Developer</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">CEO, Thememakker</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie</span>
                                                <span class="message">Art director, Movie Cut</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">Writter, Mag Editor</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                        
                            </ul>
                        </div>
                                               
                    </div>
                </div>                 
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#about">Vital Sign</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Gynacological">Gynacological History</a></li>                        
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Complaint">Main Complaint</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#patient_history">Patient History</a></li>                        
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">Past Medical</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Review Of Other System</a></li>                        
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">General Examination</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Systimatic Examination</a></li> 

                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Investgation</a></li>                        
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">Diagnosis</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Treatment</a></li>                        
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">Health Education</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Appointment</a></li>                        
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Transfer</a></li>                        
                                             
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane body active" id="about">
                        <div class="row clearfix">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="first_name">Body Temperature(BT):</label>
                <input type="text" name="Body_Temperature"   class="form-control">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="Blood Pressure">Blood Pressure (BP)</label>
                <input type="text" name="Blood_Pressure"  class="form-control">
               
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="Purse Rate">Purse Rate(PR)</label>
                <input type="text" name="Purse_Rate"  class="form-control">
               
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="Respiratory Rate">Respiratory Rate(RR):</label>
                <input type="text" name="email" value="<?php set_value('email') ?>" class="form-control" placeholder="enter email">
                <small class="error"><?php echo form_error('email'); ?></small>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone">Oxygen Saturation(O)</label>
                <input type="text" name="Oxygen_Saturation"  id="phone" class="form-control">
                
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone">Weight</label>
                <input type="password" name="Weight"  class="form-control">
            </div>
        </div>  
    </div>
    
            </div> 
          
                        <div class="tab-pane body active" id="Gynacological">
                        <div class="row clearfix">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="first_name">Body Temperature(BT):</label>
                <input type="text" name="Body_Temperature"   class="form-control">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="Blood Pressure">Blood Pressure (BP)</label>
                <input type="text" name="Blood_Pressure"  class="form-control">
               
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="Purse Rate">Purse Rate(PR)</label>
                <input type="text" name="Purse_Rate"  class="form-control">
               
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="Respiratory Rate">Respiratory Rate(RR):</label>
                <input type="text" name="email" value="<?php set_value('email') ?>" class="form-control" placeholder="enter email">
                <small class="error"><?php echo form_error('email'); ?></small>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone">Oxygen Saturation(O)</label>
                <input type="text" name="Oxygen_Saturation"  id="phone" class="form-control">
                
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone">Weight</label>
                <input type="password" name="Weight"  class="form-control">
            </div>
        </div>  
    </div>
    
            </div> 
                     <!-- end of Vital Sign -->
                               
                     


                        <div class="tab-pane body" id="patient_history">
                               
                            <div class="form-group">
                            <label for="my-textarea">Patient History:</label><br>
                            <textarea id="my-textarea" name="my-textarea" rows="8" cols="60"></textarea><br>
                        
                            </div>
                            <button class="btn btn-info btn-round">Save Changes</button>
                            <hr>
                            
                        </div>  
                          <!-- end of patient_history --> 
                          
                          
                    </div>
                </div>
                              
            </div>
        </div>        
    </div>
</section>

<?php include APPPATH . "views/includes/footer.php"?>