<?php 

class Admin extends CI_Controller

{

    public function departments()
    {
        $this->load->view('Admin/department');
        
    }

    public function staff()
    {
        $this->load->view('Admin/All_staff');
    }
    public function staff_profile()
    {
        $this->load->view('Admin/staff_profile');
    }
    public function add_staff()
    {
        $this->load->view('Admin/add_staff');
    }
}



