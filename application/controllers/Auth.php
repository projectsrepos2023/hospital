<?php

class Auth extends CI_Controller
{
    function index() {
        $this->load->view('login', ["loginError" => null]); 
    }

    public function dashboard() {
        //only staff member can access the dashbord route otherwise redirect to login
        $staffId = $this->session->userdata('staffId');
        if(!isset($staffId)) {
            return redirect('login');
        } else {
            $this->load->view('index');
        }
    }
    public function login() {
        //validate form inputs
        $inputs = array(
            array(
                "field" => "username",
                "label" => "Username",
                "rules" => "required"
            ),
            array(
                "field" => "password",
                "label" => "Password",
                "rules" => "required"
            )
            );
        $this->form_validation->set_rules($inputs);

        if ($this->form_validation->run() == TRUE) {
            //get all login input data
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            
            $model = $this->load->model('Auth_model');
            $user = $this->Auth_model->autheticate_user($data);

            if($user != false) {
                $user_session_data = array(
                    "staffId" => $user->id,
                    "staff_full_name" => $user->full_name,
                    "staff_username" => $user->username,
                    "staff_department" => $user->department
                );
                $this->session->set_userdata( $user_session_data );
                return redirect('dashboard', 'refresh');
            } else {
                $loginError = 'Invalid username or password.';

                $this->load->view('login', ['loginError' => $loginError]); 
            }
        } else {
                $this->load->view('login', ["loginError" => null]);
  
            } 
    }
}