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
                    
                    <?php if($this->session->flashdata('danger')):?>
                        <div class="mt-4 alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('danger') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>

                    <?php else:?>
                        <div class="mt-4 alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('status') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php endif?>
                
                    </div>
                    <div class="body">
    <div class="row clearfix">
        <div class="col-sm-4">
            <div class="form-group">
           
            <?php echo form_open_multipart('Staff/add_staff') ?>
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name"  value="<?php echo set_value('first_name') ?>" class="form-control" placeholder="Enter First Name">
                 <small class="error"><?php echo form_error('first_name'); ?></small>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="last-name">Last Name:</label>
                <input type="text" name="last_name" value="<?php echo set_value('last_name') ?>" class="form-control" placeholder="enter Last Name">
                <small class="error"><?php echo form_error('last_name'); ?></small>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="last-name">Username:</label>
                <input type="text" name="username" name="<?php echo set_value('username') ?>" class="form-control" placeholder="enter Username">
                <small class="error"><?php echo form_error('username'); ?></small>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="last-name">email:</label>
                <input type="text" name="email" value="<?php set_value('email') ?>" class="form-control" placeholder="enter email">
                <small class="error"><?php echo form_error('email'); ?></small>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone_number" value="<?php echo set_value('phone_number') ?>" id="phone" class="form-control" placeholder="Phone Number">
                <small class="error"><?php echo form_error('phone_number'); ?></small>
            </div>
        </div>
        
        <!-- <div class="col-sm-4">
        <label for="Title">Title:</label>
            <select name="title" id="title" >
                <option value="">-select title-</option>
                <option value="Male">Mr</option>
                <option value="Female">Mrs</option>
                <option value="Female">Miss</option>
            </select>
            <small class="error"><?php echo form_error('title'); ?></small>
        </div>  -->
        <div class="col-sm-4">
        <label for="fileUpload">Profile picture</label>
        <input type="file" class="form-control-file" id="fileUpload" accept="image/png, image/jpeg">
        </div>
        <div class="col-sm-4">
        <label for="fileUpload">Education Attachments</label>
        <input type="file" class="form-control-file" id="fileUpload" accept=".pdf, .doc, .docx">
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone">Password</label>
                <input type="password" name="password" value="" class="form-control" placeholder="Enter Password">
                <small class="error"><?php echo form_error('password'); ?></small>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="phone">Confirm Password</label>
                <input type="password" name="conf"  class="form-control" placeholder="Confirm Password">
                <small class="error"><?php echo form_error('conf'); ?></small>
            </div>
        </div>
        
        <div class="col-sm-4">
            <div class="form-group">
                <label for="Department">Department:</label>

                <?php foreach($departiments as $departiment): ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="department"  value="<?= $departiment->name ?>" >
                    <label class="form-check-label" for="<?= $departiment->name ?>"><?= $departiment->name ?></label>
                </div>
                <?php endforeach ?>
                <small class="error"><?php echo form_error('department'); ?></small>
            </div>
        </div>
        
    </div>
    
    <div class="row">
        <div class="col-sm-12 text-center" style="padding-top: 20px;">
            <button type="submit" class="btn btn-primary btn-round">Submit</button>
        </div>
     <?php echo form_close() ?>
</div>
 
                </div>
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
                                            
                                            <th>S/NO</th>
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
                                        <?php $rowId = 1 ?>
                                        <?php foreach($staffs as $staff):?>
                                        <tr>
                                            <td><?= $rowId < 10 ? "0".$rowId++ : $rowId++ ?></td>
                                            <td><?= $staff->first_name ?></td>
                                            <td><?= $staff->last_name ?></td>
                                            <td><?= $staff->username ?></td>
                                            <td><?= $staff->email ?></td>
                                            <td>M</td>
                                            <td><?= $staff->department ?></td>
                                            <td><?= $staff->phone_number ?></td>
                                            <td><span class="badge badge-success">Active</span></td>
                                        </tr>
                                        <?php endforeach ?>
                                    
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
  <!-- </form> -->
</div>
                      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">Submit</button>
            </div>
        </div>
    </div>

<?php include APPPATH . "views/includes/footer.php"?>
