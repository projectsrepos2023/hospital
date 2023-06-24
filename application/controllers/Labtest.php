<?php

class Labtest extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Labtest_model');
    }
    public function index() {
        $labtests = $this->Labtest_model->labtests();
        $this->load->view('admin/lab_test', ["labtests" => $labtests]);
    }

    public function get_single_labtest($labtest_id) {
        $labtest = $this->labtest_model->get_labtest($labtest_id); 
    }

    public function set_labtest()
    {
        $labtest['name'] = $this->input->post('labtest');

        $this->form_validation->set_rules('labtest', 'Labtest', 'trim|required');
        
        if ($this->form_validation->run() == TRUE) {
            $result = $this->Labtest_model->add_labtest($labtest);
            return redirect('labtest', 'refresh');
        } else {
            $this->load->view('admin/labtest');
        } 
    }

    public function delete_labtest($labtest_id) {
        $this->Labtest_model->delete($labtest_id);
        return redirect('labtest');
    }
}