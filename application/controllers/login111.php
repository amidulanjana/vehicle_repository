<?php


class Login111 extends CI_Controller{

    public function index(){

        $this->load->view("users/login_view");

    }



    public function loginUser()
    {
        // echo $this->input->post('username');

        $this->form_validation->set_rules('username','Username','trim|required|min_length[2]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[2]');

        if($this->form_validation->run()==False)
        {
            $data=array(
                'errors' => validation_errors(),
            );

            $this->session->set_flashdata($data);
            redirect('login/index');
        }

        else{

            $username=$this->input->post('username');
            $password=$this->input->post('password');

            $user_id=$this->user_model->login_user($username,$password);

            if($user_id){

                $user_data=array(

                    'user_id'=>$user_id,
                    'username'=> $username,
                    'logged_in'=>true

                );

                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success','You are now logged in');

                //$data['main_view']='admin_view';

                $this->load->view('users/user_profile');

                //redirect('home/index');

            } else{

                $this->session->set_flashdata('login_unsuccess','You are not logged in');

                //redirect('register');
            }

        }



    }




}