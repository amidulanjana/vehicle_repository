<?php

class register_validate_model extends CI_Model
{

    public function validate_user_email($email)
    {
        $this->db->where('email', $email);

        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {

            return $result->row(0)->id;

        } else {

            return false;
        }


    }

    public function validate_user_name($username)
    {

        $this->db->where('username', $username);

        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {

            return $result->row(0)->id;

        } else {

            return false;
        }


    }
}

