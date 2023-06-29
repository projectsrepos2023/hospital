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
                        <div class="profile-image"> <img src="<?php echo $staff_profile->image_url != null ? $staff_profile->image_url :  base_url('public/assets/images/doctors/staff-avator.jpg') ?>" alt=""> </div>
                        <div>
                            <h4 class="m-b-0"><strong><?= $staff_profile->first_name ?></strong></h4>
                            <span class="job_post"><?= $staff_profile->department ?></span>
                            <?php if($staff_profile->status == 'blocked'): ?>
                                <div class="badge badge-danger" ><?= $staff_profile->status ?></div>
                            <?php else: ?>
                                 <div class="badge badge-success" ><?= $staff_profile->status ?></div>
                             <?php endif ?>
                            
                        </div>
                    </div>                  
                </div> 
                <!-- block staff -->
         <div style="display:flex; gap: 20px">
             <?php  echo  form_open('staff/block_staff') ?>
                    <input type="hidden" name="id" value="<?= $staff_profile->id ?>">
                    <input type="hidden" name="status" value="<?= $staff_profile->status?>">
                    <?php if($staff_profile->status == "active"): ?>
                    <input class="btn btn-danger"type="submit" value="Block" name="block-btn">
                    <?php else: ?>
                     <input class="btn btn-danger"type="submit" value="Unblock" name="block-btn">
                    <?php endif ?>
             <?php echo form_close() ?>
                    <!-- delete staff -->
              <?php  echo  form_open('staff/delete_staff') ?>
                    <input type="hidden" name="id" value="<?= $staff_profile->id ?>">
                    <input class="btn btn-danger"type="submit" value="Delete" name="delete-btn">
               <?php echo form_close();?>
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
                                    <small class="m-b-0">Under maintainance</small>
                                    <small>08:30am <a href="javascript:void(0);" class="text-info"></a>.</small>
                                </div>
                                <br>
                            <div class="sl-content">
                                    <small class="m-b-0">under maintainance </small>
                                    <small>11:03am <a href="javascript:void(0);" class="text-info"></a>.</small>
                                </div>
                        </div>
                        <div class="tab-pane body" id="Account">
                        <div class="container">

                            <?php echo form_open('staff/update_staff')?>
                            <input type="hidden" name="id" id="id" class="form-control" value="<?= $staff_profile->id ?>">
                                <div class="form-group">
                                    <label for="fname">First Name:</label>
                                    <input type="text" name="first_name" id="fname" class="form-control" value="<?= $staff_profile->first_name ?>">
                                </div>

                                <div class="form-group">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" name="last_name" id="lname" class="form-control" value="<?= $staff_profile->last_name ?>">
                                </div>

                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" name="username" id="username" class="form-control" value="<?= $staff_profile->first_name ?>" >
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" name="email" id="email" class="form-control" value="<?= $staff_profile->email ?>">
                                </div>

                                <div class="form-group">
                                    <label for="pnumber">Phone Number:</label>
                                    <input type="number" name="phone_number" id="pnumber" class="form-control" value="<?= $staff_profile->phone_number ?>">
                                </div>

                                <div class="form-group">
                                    <label for="departiment">Department:</label>
                                    <input type="text" name="departiment" id="departiment" class="form-control" value="<?= $staff_profile->department ?>">
                                </div>
                                <div class="form-group">
                                    <label for="departiment">Change Password:</label>
                                    <input type="text" name="confirm" id="confirm" class="form-control" placeholder="Enter New Password">
                                </div>

                                <input class="btn btn-primary" type="submit"value="Update" name="update-btn">
                                
                             <?php form_close()?>
                          </div> 
                        </div>                        
                    </div>
                </div>
                              
            </div>
        </div>        
    </div>
</section>

<!-- <script>
    const form =document.querySelector('#profile-info')
    const fnameInput = document.querySelector('#fname')
    const lnameInput = document.querySelector('#lname')
    const usernameInput = document.querySelector('#username')
    const emailInput = document.querySelector('#email')
    const pnumberInput = document.querySelector('#pnumber')
    const departimentInput = document.querySelector('#departiment')
    const idInput = document.querySelector('#id')

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const xhr = new XMLHttpRequest()

        const payload = {
            "id":parseInt(idInput.value),
            "first_name":fnameInput.value,
            "last_name":lnameInput.value,
            "username":usernameInput.value,
            "phone_number":pnumberInput.value,
            "email":emailInput.value,
            "department":departimentInput.value
        }

        xhr.open('POST', "<?php// echo base_url('staff/update_staff') ?>", true) 
        xhr.setRequestHeader('Content-Type', 'application/json')
        xhr.onreadystatechange = () => {
            if(xhr.readyState == 4 && xhr.status == 200) {
                const res = JSON.parse(xhr.responseText)
                console.log(res)
            }
        }

        xhr.send(JSON.stringify(payload))
    })
</script> -->
<?php include APPPATH . "views/includes/footer.php"?>