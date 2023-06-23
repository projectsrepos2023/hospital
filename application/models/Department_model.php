<?php

class Department_model extends CI_Model
{
    public function departments() {
        $query = $this->db->get('Departiment');
        return $query->result();
    }

    public function get_department($id) {
        $query = $this->db->get_where('Departiment', array("departiment_id" => $id));
        return $query->row();
    }

    public function add_department($department) {
        $this->db->insert('Departiment', $department);
    }

    public function delete($id) {
        $query = $this->db->delete('Departiment', array("departiment_id" => $id));
    }
}