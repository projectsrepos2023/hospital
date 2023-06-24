<?php

class Procedure_model extends CI_Model
{
    public function procedures() {
        $query = $this->db->get('procedure');
        return $query->result();
    }

    public function get_procedure($id) {
        $query = $this->db->get_where('procedure', array("procedure_id" => $id));
        return $query->row();
    }

    public function add_procedure($data) {
        $this->db->insert('procedure', $data);
    }

    public function delete($id) {
        $query = $this->db->delete('procedure', array("procedure_id" => $id));
    }
}