<?php

class user_model extends CI_Model{

    private $email_code;

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
            $this->set_session($username,$email,$firstName);
            //print_r($this->session->all_userdata());

           // echo "successs";
            $this->send_validation_email();
        }



    }

    public function set_session($username,$email,$firstName){

        $sql="SELECT user_id,reg_time FROM users WHERE email ='".$email."'";
        $result=$this->db->query($sql);
        $row=$result->row();

        $sess_data = array(
            'user_id'=>$row->user_id,
            'username'=>$username,
            'email'=>$email,
            'firstName'=>$firstName,
            'logged_in'=>0
        );
        $this->email_code=md5((string)$row->reg_time);
        $this->session->set_userdata($sess_data);


    }


    public function send_validation_email(){

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'portalautomobile@gmail.com', // change it to yours
            'smtp_pass' => 'dlcqqvpdffibjvgx', // change it to yours
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $email=$this->session->userdata('email');
        $email_code=$this->email_code;

        $this->email->from('portalautomobile@gmail.com', 'Your Name');
        $this->email->to("{$email}");
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');

        $this->email->subject('Request for confirmation of your new account');

        $message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                  <html xmlns="http://www.w3.org/1999/xhtml">
                  <head>
                  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                  <title>Demystifying Email Design</title>
                  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                  </head>
                  </html>';
        $message.='<p>Dear '.$this->session->userdata('firstName'). '</p>

                   <p>Thank you for registering on ::: Automobile Portal !

                    Your account has been created and is awaiting to be confirmed.
                    Please follow the confirmation link below to validate your account and have your account activated:</p>

                   <p>Please <strong><a href="'. base_url().'register/verify_email/'. $email . '/' .$email_code.'">Click here</a></strong> </p>';
        $message.= '<p>Thank you <br/>Automobile Portal</p>';

        $this->email->message($message);

        $this->email->send();

        echo $this->email->print_debugger();

    }

    public function validate_email($email_address,$email_code){

        $sql="SELECT email,reg_time,first_name FROM users WHERE email='{$email_address}'";
        $result=$this->db->query($sql);
        $row=$result->row();

        if($result->num_rows()===1 && $row->first_name){
            if(md5((string)$row->reg_time)===$email_code){
                $result=$this->activate_account($email_address);
            }else{
                return false;
            }
            if($result===true){
                return true;
            }else{
                echo "There was an Error when activating the Email";
                return false;
            }
        }else{
            echo "There was an Error when activating the Email";
        }
    }


    public function activate_account($email_address){
        $sql="UPDATE users SET active=1 WHERE email='{$email_address}'";
        $this->db->query($sql);
        if($this->db->affected_rows()===1){
            return true;
        }else{
            return false;
        }
    }



}