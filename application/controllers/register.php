<?php


class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');

    }

    public function index(){

        $this->load->view('users/register_view') ;

    }

    //validate user email
    public function validate_email()
    {

        $email=$this->input->post('email');

        //getting a return message from the register model
        $user_id=$this->register_model->validate_user_email($email);

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

        $username=$this->input->post('username');
        $user_id=$this->register_model->validate_user_name($username);

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
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $firstName = $this->input->post('firstName');
        $lastName = $this->input->post('lastName');
        $password = sha1($this->config->item('salt') . $this->input->post('password'));

        $user_id = $this->register_model->register_user($email, $username, $firstName, $lastName, $password);
        $this->session->set_flashdata('message',$user_id );
        redirect("home");

    }

    public function verify_email($email_address,$email_code){

        $email_code=trim($email_code);
        $validated=$this->register_model->validate_email($email_address,$email_code);

        if($validated===true){
            $this->load->view('users/validate_email_view');
        }else{
            echo "There was an Error when activating the Email";
        }

    }

}