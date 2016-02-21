<?php

class register_model extends CI_Model{

    public function register_user($email, $username,$firstName, $lastName,$password)
    {
        $data = array(
            'username' => $username,
            'password' => $password,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email

        );

        $this->db->insert('users',$data);

        if($this->db->affected_rows()==1)
        {
            echo "successs";
            //$this->send_validation_email();
        }

        //$this->load->view('layout/login_view');

    }

}