<?php include APPPATH . "views/includes/header.php"?>
<?php include APPPATH . "views/includes/sidebar.php"?>
<!-- Favicon-->

<link rel="stylesheet" href="<?php echo base_url('public/css/main.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('public/css/color_skins.css') ?>">
</head>
<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="https://thememakker.com/templates/oreo/hospital/html/assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- Top Bar -->

<!-- Left Sidebar -->

<!-- Right Sidebar -->

<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Doctor Team</h2></li>
                <li>
                    <img src="../assets/images/xs/avatar2.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="../assets/images/xs/avatar3.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="../assets/images/xs/avatar4.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="../assets/images/xs/avatar6.jpg" alt="Avatar">
                </li>
                <li>
                    <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                </li>
            </ul>                       
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="../assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="#">Alexander</a>
                        <span class="datetime">6:12</span>                            
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="#">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Add Patient
                <small class="text-muted">Welcome to Afyaso</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">               
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Afyasoft</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Patient</a></li>
                    <li class="breadcrumb-item active">Add Patient</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Patients</strong> <small></small> </h2>
                    </div>

                    <?php if($this->session->flashdata('patientstatus') == "User exist.") {?>
                        <div class="mt-1 alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('patientstatus') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>

                        <?php } elseif($this->session->flashdata('patientstatus') == "patient Registered Successfully"
                        ) {?>
                        <div class="mt-1 alert alert-success alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('patientstatus') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <?php } else {?>
                        
                    <?php }?>

                 <?php echo form_open("patient/create")?>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="first-name">First Name:</label>
                                    <input type="text" id="first-name" class="form-control" placeholder="First Name" name="first_name">
                                    <small class="error"><?php echo form_error('first_name') ?></small>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="last-name">Middle Name:</label>
                                    <input type="text" id="last-name" class="form-control" placeholder="Middle Name" name="middle_name">
                                    <small class="error"><?php echo form_error('middle_name') ?></small>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="phone">Last Name</label>
                                    <input type="text" id="phone" class="form-control" placeholder="Last Name" name="last_name">
                                    <small class="error"><?php echo form_error('last_name') ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="text" id="age" class="form-control" placeholder="Age" name="age">
                                    <small class="error"><?php echo form_error('age') ?></small>
                                </div>
                            </div>
                            <div class="col-sm-3">

                    <label for="gender">Gender:</label>
                    <select name="gender" id="gender" class="form-control" name="gender">
                        <option value="">- Select Gender -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <small class="error"><?php echo form_error('gender') ?></small>
                        </div>                           
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="email">Phone Number</label>
                                    <input type="number" id="email" class="form-control" placeholder="Phone number" name="phone_number">
                                    <small class="error"><?php echo form_error('phone_number') ?></small> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center" style="padding-top: 20px;">
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                            </div>
                    </div>

                </div>
                <?php echo form_close() ?>
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
                        <h2><strong>Recently</strong>&nbsp;Patients</h2>
                    
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
                                <table id="myTable" class="table m-b-0 table-hover">
                                    <thead  class="bg-info">
                                        <tr>                                       
                                            
                                            <th>Patients ID</th>
                                            <th>First Name</th>
                                            <th>Second Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Transfer/Status</th>
                                            <th>Phone Number</th>
                                            <th>Patient Status</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php $rowId = 1 ?>
                                        <?php foreach($patients as $patient) :?>
                                        <tr>
                                        <td><span class="list-name"><?php echo $rowId < 10 ? "0".$rowId++ : $rowId++ ?></span></td>
                                           <td><?= $patient->first_name?></td>
                                            <td><?=$patient->middle_name?></td>
                                            <td><?= $patient->last_name?></td>
                                            <td><?= $patient->gender?></td>
                                            <td><?= $patient->age?></td>
                                            <td>
                                                
                                            <a href="<?php echo base_url('patient_transfer/'.$patient->patient_id) ?>" type="button" class="btn btn-primary  btn-success waves-effect" >Reception</a>
                                            <button class="btn btn-simple btn-sm btn-primary btn-round d-xl-none m-t-0 float-right" data-toggle="collapse" data-target="#open-events" aria-expanded="false" aria-controls="collapseExample"><i class="zmdi zmdi-chevron-down"></i></button>
                                            </td>
                                            <td><?= $patient->phone_number?></td>
                                            <td><span class="badge badge-success">Discharged</span></td>
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

    <?php echo form_open('Departiment/set_department')?>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Transfer Patient</h4>
            </div>
            <hr>
            <form>
  <div class="row">
    <div class="col">
    <label for="last-name">Select Departiment:</label>
            <select name="departiment" class="form-control" id="departiment" onchange="updateStaff()">
            <?php foreach ($departiments as $departiment) : ?>
                    <option id="departimentOptions" value="<?= $departiment->name ?>"><?= $departiment->name ?></option>
                <?php endforeach ?>
            </select>
    </div>
    <div class="col">
    <label for="last-name">Select Name</label>
            <select name="staff" class="form-control" id="staff">
                <?php foreach ($staffs as $staff) : ?>
                    <option id="staffOptions" value="<?= $staff->first_name. " ". $staff->last_name ?>"><?= $staff->first_name. " ". $staff->last_name ?></option>
                <?php endforeach ?>
            </select>
    </div>
  </div>
</form>

            <div class="modal-footer">
                
                <button type="submit" class="btn btn-primary btn-round waves-effect">Transfer</button>
                <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
        <?php echo form_close()?>
    </div>


<!-- Jquery Core Js --> 





</script>
<script src="<?php echo base_url('public/bundles/libscripts.bundle.js') ?>"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="<?php echo base_url('public/bundles/vendorscripts.bundle.js') ?>"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


<script src=" <?php echo base_url('public/assets/plugins/dropzone/dropzone.js') ?>"></script> <!-- Dropzone Plugin Js -->
<script src="<?php echo base_url('public/assets/plugins/momentjs/moment.js') ?>"></script> <!-- Moment Plugin Js -->
<script src="<?php echo base_url('public/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') ?>"></script>

<script src="<?php echo base_url('public/bundles/mainscripts.bundle.js') ?>"></script><!-- Custom Js -->

<script>
    let table = new DataTable('#myTable');
</script>


</body>

<!-- Mirrored from thememakker.com/templates/oreo/hospital/html/light/add-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 18:34:26 GMT -->
</html>




