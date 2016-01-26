<?php

class register_model extends CI_Model{

    public function register_user($data)
    {

        $this->db->insert('users',$data);
        $this->load->view('layout/main1');

    }

}