<?php

class Auth_model extends CI_Model
{
    function autheticate_user($user_input) {
        $db_user = $this->db->query("SELECT * FROM staff WHERE username = '".$user_input["username"]."' AND password = '".$user_input["password"]."'");
        $result = $db_user->row();

        if ($result != null ) {
            return $result;
        } else {
            return false;
        }
    }
}