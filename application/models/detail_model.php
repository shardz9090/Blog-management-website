<?php
class detail_model extends CI_Model
{
    public function getUsers()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }
    public function products()
    {
        $query = $this->db->get('price');
        return $query->result_array();
    }
    public function getBlogCount()
    {
        return $this->db->count_all_results('blogs');
    }
}
