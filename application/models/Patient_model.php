<?php 

class Patient_model extends CI_Model
{

    public function create_patient($data)
    {
        $q=$this->db->get_where('patient', array('first_name' => $data["first_name"],'middle_name'=>$data['middle_name'],'last_name'=>$data['last_name'] ));
        if($q->row() != null) {
            return "User exist.";
        }
         
        $q=$this->db->insert('patient', $data);
        return "patient Registered Successfully";

    }

    public function get_patient()
    {
        $q = $this->db->query("SELECT * FROM patient ");
        return $q->result();
    }

    


}