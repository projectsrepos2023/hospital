<?php

class Departiment extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('Department_model');
    }
    public function index() {
        $departiments = $this->Department_model->departments();
        $this->load->view('admin/departiment', ["departiments" => $departiments]);
    }

    public function get_single_department($departiment_id) {
        $departiment = $this->Department_model->get_department($departiment_id); 
    }

    public function set_department()
    {
        $department['name'] = $this->input->post('departiment');

        $this->form_validation->set_rules('departiment', 'Departiment', 'trim|required');
        
        if ($this->form_validation->run() == TRUE) {
            $result = $this->Department_model->add_department($department);
            return redirect('departiment', 'refresh');
        } else {
            $this->load->view('admin/departiment');
        } 
    }

    public function delete_departiment($departiment_id) {
        $this->Department_model->delete($departiment_id);
        return redirect('departiment');
    }
}

