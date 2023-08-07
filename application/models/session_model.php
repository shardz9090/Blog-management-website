<?php
class session_model extends CI_Model
{
    public function getdata()
    {
        $uname = $this->session->userdata('uname');
        $this->db->where('uname', $uname);
        $query = $this->db->get('user');

        return $query->row_array();
    }
}
