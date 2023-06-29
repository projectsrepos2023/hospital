<?php 

class Staff extends CI_Controller

{
    public function __construct() {
        parent::__construct();
        $this->load->model('Staffmodel');
        
    }
    public function index() {
        $staffs = $this->Staffmodel->get_staffs();
        $departiments = $this->Staffmodel->get_departiments();
        $this->load->view('Admin/add_staff', ['staffs' => $staffs, 'departiments' => $departiments]);
        
    }

    public function all_staff() {
        $staffs = $this->Staffmodel->get_all_staffs();
        $this->load->view('Admin/all_staff', ["staff_members" => $staffs]);
        
    }

    public function staff_profile($id) {
        $staff = $this->Staffmodel->get_staff_profile($id);
        
        $updateAlert = $this->session->flashdata('updateSuccess');
        
        $this->load->view('Admin/staff_profile', ['staff_profile' => $staff, "updateSuccess" => $updateAlert]);
    }

    public function add_staff()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Email Account', 'required');
        $this->form_validation->set_rules('department', 'department', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('conf', 'Confirm Password', 'required|matches[password]');

        
        if ($this->form_validation->run() == true) {
             
        $staff_data=array(
                  
            'first_name'=> $this->input->post('first_name'),
            'last_name'=> $this->input->post('last_name'),
            'username'=> $this->input->post('username'),
            'phone_number'=> $this->input->post('phone_number'),
            'email'=> $this->input->post('email'),
            'department'=> $this->input->post('department'),
            'password'=> $this->input->post('password')
        );
        
        $q= $this->Staffmodel->insert_data($staff_data);

        if($q === true) {
            $this->session->set_flashdata('status', 'Staff Registered successfully');
        } else {
            $this->session->set_flashdata('danger', $q);
        }
        
        
        redirect('create','refresh');
             
        } else {

            $staffs = $this->Staffmodel->get_staffs();
            $departiments = $this->Staffmodel->get_departiments();

        $this->load->view('Admin/add_staff', ['staffs' => $staffs, "departiments" => $departiments]);
        
        } 
    }

    public function update_staff() {
        $data = array(
            'id'=> $this->input->post('id'),
            'first_name'=>$this->input->post('first_name'),
            'last_name'=> $this->input->post('last_name'),
            'username'=> $this->input->post('username'),
            'phone_number'=> $this->input->post('phone_number'),
            'email'=> $this->input->post('email'),
            'department'=> $this->input->post('departiment'),
            'confirm'=> $this->input->post('confirm')
        );

        $result = $this->Staffmodel->update_staff_member($data);

        if ($result) {
            $this->session->set_flashdata("updateSucces", $result);
        }
        
       redirect('staff-profile/'.$data['id']);
        
    }


    public function delete_staff()
    {

     $id= $this->input->post('id');

    $result= $this->Staffmodel->delete_staff_member($id);

    $this->session->set_flashdata('deletestatus', $result);
  
      
     return redirect('staff');
      
    
      

    }
    public function block_staff()
    {
        $data=
        [
            'status' => $this->input->post('status'),
            'id'=> $this->input->post('id')
        ];
      $result = $this->Staffmodel->block_staff_member($data);
      if ($result) {
        $this->session->set_flashdata('blockstatus', $result);
      }
  
     return redirect('staff-profile/'.$data['id']);
      
    }

    }







