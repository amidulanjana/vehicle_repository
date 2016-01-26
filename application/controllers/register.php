<?php


class Register extends CI_Controller{

    public function index(){

        $data['main_view']='users/register_view';

        $this->load->view('layout/main_page',$data);

    }

}