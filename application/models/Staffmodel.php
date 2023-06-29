<?php
// Model_name.php

class Staffmodel extends CI_Model {
    
    public function insert_data($staff_data)
    {
    // Insert data into the database
       $q = $this->db->query("SELECT * FROM staff WHERE username='".$staff_data["username"]."'")->row_array();
       if($q != null) {
        return "Username exist.";
       } else{
           $this->db->insert('staff', $staff_data);
           return true;
            // Replace 'table_name' with your actual table name
       }
           
    }

    public function get_staffs() {
        $q = $this->db->query("SELECT * FROM staff ORDER BY created_at DESC LIMIT 5");
        return $q->result();
    }

    public function get_departiments() {
        $q = $this->db->query("SELECT * FROM Departiment");
        return $q->result();
    }

    public function get_all_staffs() {
        $q = $this->db->query("SELECT * FROM staff");
        return $q->result();
    }

    public function get_staff_profile($id) {
        $q = $this->db->query("SELECT * FROM Staff WHERE id = '$id'");
        return $q->row();
    }

    public function update_staff_member($data) {
            $q = $this->db->query("UPDATE Staff 
            SET first_name = '".$data["first_name"]."', last_name = '".$data["last_name"]."', username = '".$data["username"]."', email = '".$data["email"]."', phone_number = '".$data["phone_number"]."', department = '".$data["department"]."', password = '".$data["confirm"]."' 
            WHERE id = '".$data["id"]."'
             ");

             if($q){
                return "Successfully updated!";
             } else {
                return "Errorr occurred when updating the user";
             }
    }

    public function delete_staff_member($id)
    {
        $q=$this->db->query("DELETE FROM staff WHERE id='$id'");

        if ($q) {
           return "staff deleted successfully";
        }
        else {
            return "couldnot delete staff due to unexpected error";
        }
    }
    public function block_staff_member($data)
    {
        if($data['status'] == "active") {
            $q=$this->db->query("UPDATE  staff  SET status= 'blocked' WHERE id = '".$data["id"]."' ");
            return "Staff is blocked";
        } else {
            $q=$this->db->query("UPDATE  staff  SET status= 'active' WHERE id = '".$data["id"]."' ");
            return "Staff is active";
        }
    }

}
?>
