<?php

class Transfer extends CI_Controller

{
    public function __construct() {
        parent::__construct();
        $this->load->model('Transfer_model');
        $this->load->model('Department_model');
        
    }
    public function transfer_patient($id)
    {
        $departiments = $this->Department_model->departments();
        $patient_data = $this->Transfer_model->get_patient($id);
        $this->load->view('patient/patient_transfer', ["patient" => $patient_data, "departiments" => $departiments]);
        
    }

    public function make_transfer() {
        $data = array(
            "from" => $this->input->post('from'),
            "to" => $this->input->post('to'),
            "staff_id" => $this->input->post('staff_id'),
            "patient_id" => $this->input->post('patient_id')
        );
        $result = $this->Transfer_model->add_transfer($data);
        if($result) {
            $this->session->set_flashdata('transferSuccess', "Patient transfered to ".$data["to"]);
            redirect('Transfer/transfer_patient/'.$data["patient_id"]);
        }
        
    }


}