<?php include APPPATH . "views/includes/header.php"?>
<?php include APPPATH . "views/includes/sidebar.php"?>

<style>
    body {
        background-color: #eee !important;
    }

    section {
        margin-left: 240px;padding-left: 8px; padding-top: 60px;
        display: grid;grid-template-columns: 350px 1fr; align-items: start;
    }


    .head { grid-column: 1/ span 2; background-color: #01d8da; padding: 20px 25px; display: flex; justify-content: space-between; align-items: center;}
    .profile { text-align: center; display: grid; gap: 16px; justify-content: center; align-items: centercenter; margin: 18px; background-color: #fff; box-shadow: 3px 3px 5px #ccc; padding: 10px;}
    .steps { margin: 20px 10px; }
    .welcome > h6 { margin-block-end: 1px; color: white;}
    .bread-thumb { background-color: #38f8fc;padding: 10px; border-radius: 50px;}
    .wh { color: white; }
    .profile-head { text-align: center; display: grid;  justify-content: center; }
    .profile img { width: 150px; height: 150px; border-radius: 50%; border: 5px solid #ccc;}
    

    /* tabs styles */
    .patient-tabs .patient-nav {
            display: flex;
            flex-wrap: wrap;
            row-gap: 25px;
            list-style-type: none;
            
            margin: 0;
            padding: 0;
            }

            .patient-tabs .patient-nav li {
            margin-right: 10px;
            }

            .patient-tabs .patient-nav li a {
            padding: 10px;
            background-color: #eee;
            text-decoration: none;
            border: 2px solid #ccc;
            border-radius: 10px;
            color: #333;
            }

            .patient-tabs .patient-nav li a.active {
            background-color: greenyellow;
            }

            .patient-tabs .patient-tab-content {
            display: none;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            }

            .patient-tabs .patient-tab-content h3 {
            margin-top: 0;
            }

            /* vital sign form */
            .vital-sign-form {
                display: grid;
                grid-template-columns: auto auto auto;
                gap: 18px;
            }
            .vital-sign-form label {
                display: block;
            }
            input, textarea {
                display: block;
                border: 1px solid #ccc;
                padding: 5px 1rem;
                border-radius: 5px;
                outline: none;
                width: 100%;
            }
            input:focus, textarea:focus {
                outline: 2px solid #ddd;
            }
            button {
                display: block;
                width: 150px;
                background-color: #01d8da;
                padding: 8px 20px;
                border: none;
                border-radius: 5px;
                outline: none;
                margin: 20px 0;
            }
            button:focus {
                outline: 2px solid rgba(92, 91, 91, 0.4);
                background-color: #38f8fc;
            }
</style>

<section class="patient1" style="">
    <div class="head">
        <div class="welcome">
            <h6>Welcome to Afyasoft</h6>
            <p>Transfer patient to specific departiment</p>
        </div>
        <div class="bread-thumb">
            <span class="wh">Home</span> /
            <span class="wh">prescription</span> /
            <span>transfer patient</span>
        </div>
    </div>

    <div class="profile">
        <img src="<?php echo base_url("public/assets/images/sm/avatar2.png") ?>" alt="">
        <div>
            <h6>Emannuel John Songa</h6>
            <div>Description</div>
        </div>
    </div>

    <div class="steps">
    <div class="patient-tabs">
            <ul class="patient-nav">
                <li><a href="#patient-home">Vital Sign</a></li>
                <li><a href="#gynacological-history">Gynacological History</a></li>
                <li><a href="#main-complaint">Main Complaint</a></li>
                <li><a href="#patient-history">Patient History</a></li>
                <li><a href="#past-medical">Past Medical</a></li>
                <li><a href="#review-other-system">Review Other System</a></li>
                <li><a href="#general-examination">General Examination</a></li>
                <li><a href="#systimatic-examination">Systimatic Examination</a></li>
                <li><a href="#investigation">Investigation</a></li>
                <li><a href="#diagnosis">Diagnosis</a></li>
                <li><a href="#treatment">Treatment</a></li>
                <li><a href="#health-education">Health Education</a></li>
                <li><a href="#appointment">Appointment</a></li>
                <li><a href="#transfer">Transfer</a></li>

            </ul>
            
            <div id="patient-home" class="patient-tab-content">
                <h5>Vital Sign</h5>
                <div class="vital-sign">
                    <form class="vital-sign-form">
                        <div>
                            <label for="temp">Body Temperature(BT)</label>
                            <input type="text" value="20deg c"  readonly id="body_temperature" required>
                        </div>
                        <div>
                            <label for="blood_pressure">Blood Pressure(BP)</label>
                            <input type="text" value="233"  readonly id="blood_pressure" required>
                        </div>
                        <div>
                            <label for="respiratory_rate">Respiratory Rate</label>
                            <input type="text" value="1866" readonly id="blood_pressure" required>
                        </div>
                        <div>
                            <label for="oxygen_saturation">Oxygen Saturation(O)</label>
                            <input type="text" value="8978v"  readonly id="oxygen_saturation" required>
                        </div>
                        <div>
                            <label for="weight">Weight</label>
                            <input type="text" value="2kg" readonly id="weight" required> 
                        </div>
                        <div>
                            <label for="height">Height</label>
                            <input type="text" value="200cm"  readonly id="height" required>
                        </div>

                    </form>
                </div>
            </div>

            
            <div id="gynacological-history" class="patient-tab-content">
                <h5>Gynacological History</h5>
                <div class="gynacological-history">
                    <form class="gynacological-history-form">
                        <div>
                            <label for="gynacological-history">Description</label>
                            <textarea id="gynacological-history" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="gynacological-history-btn">Save</button>
                        </div>

                    </form>
                </div>
            </div>
            
            <div id="main-complaint" class="patient-tab-content">
                <h5>Main Complaint</h5>
                <div class="main-complaint">
                    <form class="main-complaint-form">
                        <div>
                            <label for="main-complaint">Description</label>
                            <textarea id="main-complaint" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="main-complaint-btn">Save</button>
                        </div>

                    </form>
                </div>
            </div>

            <div id="patient-history" class="patient-tab-content">
                <h5>Patient History</h5>
                <div class="patient-history">
                    <form class="patient-history-form">
                        <div>
                            <label for="patient-history">Description</label>
                            <textarea id="patient-history" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="patient-history-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>

                <div id="past-medical" class="patient-tab-content">
                <h5>Past Medical</h5>
                <div class="past-medical">
                    <form class="past-medical-form">
                        <div>
                            <label for="past-medical">Description</label>
                            <textarea id="past-medical" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="past-medical-btn">Save</button>
                        </div>
                    </form>
                </div>
                </div>

                <div id="review-other-system" class="patient-tab-content">
                <h5>Review Other System</h5>
                <div class="review-other-system">
                    <form class="review-other-system-form">
                        <div>
                            <label for="review-other-system">Description</label>
                            <textarea id="review-other-system" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="review-other-system-btn">Save</button>
                        </div>
                    </form>
                </div>
                </div>

                <div id="general-examination" class="patient-tab-content">
                <h5>General Examination</h5>
                <div class="general-examination">
                    <form class="general-examination-form">
                        <div>
                            <label for="general-examination">Description</label>
                            <textarea id="general-examination" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="general-examination-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="systimatic-examination" class="patient-tab-content">
                <h5>General Examination</h5>
                <div class="systimatic-examination">
                    <form class="systimatic-examination-form">
                        <div>
                            <label for="systimatic-examination">Description</label>
                            <textarea id="systimatic-examination" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="systimatic-examination-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="investigation" class="patient-tab-content">
                <h5>Investigation</h5>
                <div class="investigation">
                    <form class="investigation-form">
                        <div>
                            <label for="investigation">Description</label>
                            <textarea id="investigation" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="investigation-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="diagnosis" class="patient-tab-content">
                <h5>Diagnosis</h5>
                <div class="diagnosis">
                    <form class="diagnosis-form">
                        <div>
                            <label for="diagnosis">Description</label>
                            <textarea id="diagnosis" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="diagnosis-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="treatment" class="patient-tab-content">
                <h5>Treatment</h5>
                <div class="treatment">
                    <form class="treatment-form">
                        <div>
                            <label for="treatment">Description</label>
                            <textarea id="treatment" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="treatment-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="health-education" class="patient-tab-content">
                <h5>Health Education</h5>
                <div class="health-education">
                    <form class="health-education-form">
                        <div>
                            <label for="health-education">Description</label>
                            <textarea id="health-education" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="health-education-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="appointment" class="patient-tab-content">
                <h5>Appointment</h5>
                <div class="appointment">
                    <form class="appointment-form">
                        <div>
                            <label for="appointment">Description</label>
                            <textarea id="appointment" rows="10"></textarea>
                        </div>
                        <div>
                            <button id="appointment-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>




<?php include APPPATH . "views/includes/footer.php"?>