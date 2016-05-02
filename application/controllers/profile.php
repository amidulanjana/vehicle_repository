<?php


class profile extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model');
    }

    public  function  index(){

        $add_info['ad']=$this->profile_model->view_my_ads();
        $userInfo=$this->profile_model->userProfile(10);

        $add_info['userData']=array(
            'fname'=>$userInfo['first_name'],
            'lname'=>$userInfo['last_name'],
            'uname'=>$userInfo['username'],
            'company'=>$userInfo['company'],
            'address'=>$userInfo['address'],
            'email'=>$userInfo['email'],
            'phone'=>$userInfo['phoneNo'],
            'accountType'=>$userInfo['accountType']
        );

        $this->load->view('users/myProfile_view',$add_info);

    }

    public function userProfile($userID){

        $userInfo=$this->profile_model->userProfile($userID);
        $userData['data']= $this->profile_model->showFeedback();
        $userData['ad']=$this->profile_model->view_my_ads();

        $userData['userData']=array(
            'fname'=>$userInfo['first_name'],
            'lname'=>$userInfo['last_name'],
            'company'=>$userInfo['company'],
            'address'=>$userInfo['address'],
            'email'=>$userInfo['email'],
            'phone'=>$userInfo['phoneNo']
        );

        $this->load->view("users/userProfile_view",$userData);

    }

    public function feedBack(){

        //$loggedUser=$this->input->post('loggedUser');
        if($_POST['feedBack']){

        $user = $this->profile_model->addFeedback(1, $_POST['feedBack']);
        $list = array('message' => $user);
        $c = json_encode($list);

        echo $c;

        }
    }

    public function updateRating(){

        if(isset($_POST['rate'])) {
            $this->profile_model->updateRating($_POST['rate']);
        }
    }



}


?>