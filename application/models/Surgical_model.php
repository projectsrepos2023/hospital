<?php

class Surgical_model extends CI_Model
{
    public function get_surgicals() {
        return $this->db->get('Surgical')->result();
    }
    public function add_surgical($data) {
        $this->db->insert('Surgical', $data);
    }

    public function delete_surgical($id) {
        $this->db->delete('Surgical', array('surgical_id' => $id));
    }
}