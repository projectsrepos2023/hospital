<?php

class Procedure extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Procedure_model');
    }
    public function index() {
        $procedures = $this->Procedure_model->procedures();
        $this->load->view('admin/procedure', ["procedures" => $procedures]);
    }

    public function get_single_procedure($procedure_id) {
        $procedure = $this->Procedure_model->get_procedure($procedure_id); 
    }

    public function set_procedure()
    {
        $data = array(
            array(
                "field" => "procedure",
                "label" => "Procedure",
                "rules" => "required"
            ),
            array(
                "field" => "price",
                "label" => "Price",
                "rules" => "required"
            ),
        );

        $this->form_validation->set_rules($data);
        
        if ($this->form_validation->run() == TRUE) {
            $procedure_data = array(
                "name" => $this->input->post('procedure'),
                "price" => $this->input->post('price')
            );

            $this->Procedure_model->add_procedure($procedure_data);
            return redirect('procedure', 'refresh');
        } else {
            $this->load->view('admin/procedure');
        } 
    }

    public function delete_procedure($procedure_id) {
        $this->Procedure_model->delete($procedure_id);
        return redirect('procedure');
    }
}