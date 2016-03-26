<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        $this->load->view("layout/login_view");

    }

    public function validate_login_user()
    {

        $name=$this->input->post('username');
        $password=$this->input->post('password');

        $user_id=$this->login_model->login_user($name,$password);

        $list = array('message' => $user_id);
        $c=json_encode($list);

        echo $c;
    }

    public function logout()
    {
        if ($this->session->userdata('logged_in')) {

            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('user_name');
            $this->session->unset_userdata('first_name');
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            redirect('home', 'refresh');
        }else{
            redirect('home', 'refresh');
        }

    }
}