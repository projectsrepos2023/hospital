<?php

class Patient extends CI_Controller 
{
      
      public function __construct()
      {
        parent::__construct();
        $this->load->model('Patient_model');
        $this->load->model('Staffmodel');
        $this->load->model('Department_model');
        
      }

      public function index()
      {
        $departiments = $this->Department_model->departments();
        $staffs = $this->Staffmodel->get_all_staffs();
        $patients = $this->Patient_model->get_patient();
        $this->load->view('patient/add_patient', ["patients" => $patients, "staffs" => $staffs, "departiments" => $departiments] );
      }
      
      
    public function create() {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('middle_name', 'Second Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
       
        
        if ($this->form_validation->run() == TRUE) {
             $data=array(
               'first_name'=> $this->input->post('first_name'),
               'middle_name'=> $this->input->post('middle_name'),
               'last_name'=> $this->input->post('last_name'),
               'age'=> $this->input->post('age'),
               'gender'=> $this->input->post('gender'),
               'phone_number'=> $this->input->post('phone_number')
                     
             );
              
               $q= $this->Patient_model->create_patient($data);
               if(is_string($q)) {
                 $this->session->set_flashdata('patientstatus',$q);
               } else {
                $this->session->set_flashdata('patientstatus',null);
               }
    
               return redirect("register-patient");
           
        } else {
            $this->load->view('patient/add_patient');
            
        }
        

       
    }
    public function patient_profile()

    {
              $this->load->view('patient/patient_profile');
              

    }

   
}