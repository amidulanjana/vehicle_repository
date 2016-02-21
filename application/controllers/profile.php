<?php


class profile extends CI_Controller{

    public  function  index(){

        $data['profile']='users/user_profile';
        $this->load->view('users/user_profile');

    }

}


?>