<?php

class Home extends CI_Controller
{


    public function index()
    {
        $this->load->view('users/main_view');
        //$this->load->view('users/validate_email_view');

    }

}