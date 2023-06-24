<?php

class Labtest_model extends CI_Model
{
    public function labtests() {
        $query = $this->db->get('test_category');
        return $query->result();
    }

    public function get_labtest($id) {
        $query = $this->db->get_where('test_category', array("test_category_id" => $id));
        return $query->row();
    }

    public function add_labtest($category) {
        $this->db->insert('test_category', $category);
    }

    public function delete($id) {
        $query = $this->db->delete('test_category', array("test_category_id" => $id));
    }
}