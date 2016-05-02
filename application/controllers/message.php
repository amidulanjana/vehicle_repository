<?php


class Message extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('message_model');
    }

    public function index(){

        $userData['data']=$this->getUser();
        $userData['conversationID']=$this->getMessage();
        $userData['user_one']=$this->input->get('id',true);

        $this->load->view("users/message_view",$userData);
    }

    public function getUser(){

        $result=$this->message_model->getUserData();
        return $result;
    }

    public function getMessage(){

            $result=$this->message_model->getMessage();
            return $result;

    }

    public function showMessage()
    {
        $conversationID=$this->input->get('c_id',true);
        $result = $this->message_model->showMessage();
        if ($result!=false) {
            foreach ($result as $row) {
                $user_from = $row['user_from'];
                $user_to = $row['user_to'];
                $message = $row['message'];

                $con_details = $this->message_model->getUser($user_from);
                $user_from_username = $con_details->username;
                $user_from_img = $con_details->img;

                //display the message
                echo "
                            <div class='message'>
                                <div class='img-con'>
                                    <img src='{$user_from_img}'>
                                </div>
                                <div class='text-con'>
                                    <a href='#''>{$user_from_username}</a>
                                    <p>{$message}</p>
                                </div>
                            </div> ";

            }
        }
    }

}