<?php 

class Admin extends CI_Controller

{

    public function departments()
    {
        $this->load->view('Admin/department');
        
    }
}



