<?php

class Surgical extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Surgical_model'); 
    }
    public function index()
    {
        $surgicals = $this->Surgical_model->get_surgicals();

        $this->load->view('admin/surgical', ["surgicals" => $surgicals]);
    }

    public function add()
    {
        $data = array(
            array(
                "field" => "name",
                "label" => "Surgical name",
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
            $surgical_data = array(
                "name" => $this->input->post('name'),
                "price" => $this->input->post('price') 
            );
            $this->Surgical_model->add_surgical($surgical_data);
            return redirect('surgical','refresh');
        
        } else {
            $this->load->view('admin/surgical');
            
        }
    }

    public function delete_surgicals($id) {
            $this->Surgical_model->delete_surgical($id);
            redirect('surgical', 'refresh');
    }
    

}