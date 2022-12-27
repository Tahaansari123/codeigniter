<?php 
class Demo_model extends CI_Model{
    public function demo2()
    {
        // $this->load->database();
        $q = $this->db->query('select * from users');
        // return $q->result();
        return $q->result_array();
        // echo "<pre>";
    }
}

?>