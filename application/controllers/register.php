<?php


class Register extends CI_Controller{

    public function index(){

        $this->load->view('users/register_view');

    }

    public function validate_email()
    {
        $this->load->model('register_validate_model');
        $email=$this->input->post('email');
        $user_id=$this->register_validate_model->validate_user_email($email);

        global $isAvailable;
        if ($user_id==false) {
            $isAvailable = true;
        }
        // Finally, return a JSON
        echo json_encode(array(
            'valid' =>  $isAvailable,
        ));
    }

    public function validate_username()
    {
        $this->load->model('register_validate_model');
        $username=$this->input->post('username');
        $user_id=$this->register_validate_model->validate_user_name($username);

        global $isAvailable;
        if ($user_id==false) {
            $isAvailable = true;
        }
        // this return a JSON
        echo json_encode(array(
            'valid' =>  $isAvailable,
        ));
    }

    public function Add_user()
    {
        $this->load->model('register_model');
        $email=$this->input->post('email');
        $username=$this->input->post('username');
        $firstName=$this->input->post('firstName');
        $lastName=$this->input->post('lastName');
        $password=sha1($this->config->item('salt').$this->input->post('password'));

        $user_id=$this->register_model->register_user($email, $username,$firstName, $lastName,$password);
    }

}