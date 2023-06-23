<?php 

class Admin extends CI_Controller

{

    public function departments()
    {
        $this->load->view('Admin/department');
        
        $department['name'] = $this->input->post('departimet');
        $this->form_validation->set_rules('department', 'Department', 'trim|required');
        
        if ($this->form_validation->run() == TRUE) {
            
            $this->load->model('Department_model');
            $result = $this->Department_model->set_department($department);
            var_dump($result);
        } else {
            # code...
        }
        
        
        
    }
}



