<?php include APPPATH . "views/includes/header.php"?>
<?php include APPPATH . "views/includes/sidebar.php"?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Add Staff
                <small class="text-muted">Welcome to afyasoft</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">               
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Hekima</a></li>
                    <li class="breadcrumb-item active">Add Staff</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Basic</strong> Information <small>Description text here...</small> </h2>
                        
                    </div>
                    <div class="body">
    <div class="row clearfix">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone">Username</label>
                <input type="text" name="username" id="phone" class="form-control" placeholder="Username">
            </div>
        </div>
    </div>
    <div class="row clearfix">                            
        <div class="col-sm-3">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email"  class="form-control" placeholder="email">
            </div>
        </div>
        <div class="col-sm-3">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" class="form-control show-tick">
                <option value="">- Gender -</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>                           
        <div class="col-sm-3">
            <label for="gender">Title:</label>
            <select id="gender" name="title" class="form-control show-tick">
                <option value="">- Title -</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
            </select>
        </div>                           
        <div class="col-sm-3">
        <div class="form-group">
        <label for="fileUpload">Profile picture</label>
        <input type="file" class="form-control-file" id="fileUpload" accept="image/png, image/jpeg">
    </div>
        </div>
        <div class="col-sm-3">
        <div class="form-group">
        <label for="fileUpload">Education Attachments</label>
        <input type="file" class="form-control-file" id="fileUpload" accept=".pdf, .doc, .docx">
    </div>
        </div>
        <div class="col-sm-3">
            <label for="gender">Department:</label>
            <select id="gender" name="title" class="form-control show-tick">
                <option value="">-select Department-</option>
                <option value="doctors">Doctors</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
            </select>
        </div>  
        <div class="col-sm-3">
            <div class="form-group">
                <label for="email">Password</label>
                <input type="number" id="email" class="form-control" placeholder="Enter Your Email">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="email">Confirm Password</label>
                <input type="number" id="email" class="form-control" placeholder="Enter Your Email">
            </div>
        </div>
    
    </div>
    <div class="row">
        <div class="col-sm-12 text-center" style="padding-top: 20px;">
            <button type="submit" class="btn btn-primary btn-round">Submit</button>
        </div>
    
</div>

                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card patients-list">
                    <div class="header">
                        <h2><strong>Staff</strong>&nbsp;<strong>Added</strong> Recently</h2>
                    
                    </div>
                    <div class="body">
                        <!-- Nav tabs -->

                        
                        <!-- <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#All">All</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#USA">USA</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#India">India</a></li>
                        </ul> -->
                            
                        <!-- Tab panes -->
                        <div class="tab-content m-t-10">
                            <div class="tab-pane table-responsive active" id="All">
                                <table class="table m-b-0 table-hover">
                                    <thead>
                                        <tr>                                       
                                            
                                            
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Department</th>
                                            <th>Phone Number</th>
                                            <th>Staff Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            
                                            <td>Daniel</td>
                                            <td>Daniel</td>
                                            <td>Dan</td>
                                            <td>James@gmail.com</td>
                                            <td>male</td>
                                            <td>Receptionist</td>
                                            <td>0712345678</td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        </tbody>
                                       </table>           
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">User System Access</h4>
            </div>
            <div class="modal-body">
                
            <div class="new">
  <form>
    <div class="form-group">
      <input type="checkbox" id="html">
      <label for="html">Patient Registration</label>
    </div>
    <div class="form-group">
      <input type="checkbox" id="css">
      <label for="css">Billing Settings</label>
    </div>
    <div class="form-group">
      <input type="checkbox" id="javascript">
      <label for="javascript">Setup Settings</label>
    </div>
  </form>
</div>
                      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">Submit</button>
            </div>
        </div>
    </div>

<?php include APPPATH . "views/includes/footer.php"?>
