<?php


class profile extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model');
    }

    public  function  index(){

        $add_info=$this->profile_model->view_my_ads();
        $add_details=array(
            'id'=>$add_info['id'],
            'brand_name'=>$add_info['brand_name'],
            'location'=>$add_info['location'],
            'engine'=>$add_info['engine'],
            'mileage'=>$add_info['mileage'],
            'condition'=>$add_info['condition'],
            'image'=>$add_info['image'],
        );

        $this->load->view('users/user_profile',$add_details);

    }

    public function show_my_ads(){


    }

}


?>