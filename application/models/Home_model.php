<?php
class Home_model extends CI_Model {
    public function getall(){
        return $this->db->get('biodata')->row_array();
    }

    public function getbyid(){
        return $this->db->get_where('biodata', ["id" => $id])->row();
    }
}
?>