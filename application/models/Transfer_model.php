<?php

class Transfer_model extends CI_Model
{
    public function get_patient($id) {
        $q = $this->db->get_where("Patient", array("patient_id" => $id));
        return $q->row();
    }

    public function add_transfer($data) {
        $q = $this->db->insert("transfer", $data);
        return $q;
    }
}