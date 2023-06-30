
<?php include APPPATH . "views/includes/header.php"?>
<?php include APPPATH . "views/includes/sidebar.php"?>


<section class="content invoice">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Invoice
                <small>Welcome to Oreo</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Invoice</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Single</strong> Invoice</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Print Invoices</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a href="javascript:void(0);">Export to XLS</a></li>
                                    <li><a href="javascript:void(0);">Export to CSV</a></li>
                                    <li><a href="javascript:void(0);">Export to XML</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <h3 class="m-b-0">Patient Name : <strong class="text-primary"><?= strtoupper($patient->first_name . " ". $patient->last_name) ?> </strong></h3>
                        <ul class="nav nav-tabs">
                          
                            <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab" href="#details" aria-expanded="true">Patient Transfer</a></li>
                            <!-- <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#notes" aria-expanded="false">Notes</a></li>
                            <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#history" aria-expanded="false">History</a></li> -->
                            
                        </ul>  
                                  
                    </div>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-12">
                                <div class="card member-card">
                                    <div class="header l-coral">
                                        <h4 class="m-t-10"> <?= strtoupper($patient->first_name . " ". $patient->last_name) ?> </h4>
                                    </div>
                                    <div class="member-img">
                                        <a href="patient-profile.html">
                                        <img src="<?php echo base_url('public/assets/images/sm/avatar2.png"') ?> class="rounded-circle" alt="profile-image">
                                        </a>
                                    </div>
                                    <div class="body">
                                        <strong>Name</strong>
                                        <p><?= $patient->first_name . " ".$patient->middle_name. " " . $patient->last_name ?></p>
                                        <strong>Phone</strong>
                                        <p><?= $patient->phone_number ?></p>                                        
                                        <strong>Gender</strong>
                                        <address><?= $patient->gender ?></address>                                        
                                        <hr>
                                        <!-- <div class="row">
                                            <div class="col-4">
                                                <h5>37</h5>
                                                <small>Visit</small>
                                            </div>
                                            <div class="col-4">
                                                <h5>5</h5>
                                                <small>Surgery</small>
                                            </div>
                                            <div class="col-4">
                                                <h5>1,256$</h5>
                                                <small>Spent</small>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="card" id="details">
                                    <div class="body">                                
                                        
                                    <?php echo form_open('Transfer/make_transfer')?>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Select Department</label>
                                                <select class="form-control" name="to">
                                                    <option value="">- Select Department -</option>
                                                    <?php foreach ($departiments as $departiment): ?>
                                                        <option value="<?= $departiment->name ?>"><?= $departiment->name ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <small class="error"><?php echo form_error('gender') ?></small>
                                        </div>
                                        
                                        <input type="hidden" name="from" id="">
                                        <input type="hidden" name="patient_id" value="<?= $patient->patient_id ?>">
                                        <input type="hidden" name="staff_id" value="<?= $this->session->userdata('staffId') ?>">
                                        </div>
                                
                                        <div class="hidden-print col-md-12 text-center">
                                            <button class="btn btn-primary btn-round">Transfer</button>
                                        </div>
  
                                   <?php form_close()?>
                                   
                                  </div>
                                  <?php if ($this->session->flashdata('transferSuccess')) : ?>
                                  <div class="alert alert-success"><?= $this->session->flashdata('transferSuccess')?></div> 
                                  <?php endif ?>
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
