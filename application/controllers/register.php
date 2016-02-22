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
        $this->load->model('user_model');
        $email=$this->input->post('email');
        $username=$this->input->post('username');
        $firstName=$this->input->post('firstName');
        $lastName=$this->input->post('lastName');
        $password=sha1($this->config->item('salt').$this->input->post('password'));

        $user_id=$this->user_model->register_user($email, $username,$firstName, $lastName,$password);
    }

    public function verify_email($email_address,$email_code){
        $this->load->model('user_model');
        $email_code=trim($email_code);
        $validated=$this->user_model->validate_email($email_address,$email_code);

        if($validated===true){
            $this->load->view('users/validate_email_view');
        }else{
            echo "There was an Error when activating the Email";
        }

    }

}