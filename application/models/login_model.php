<?php
/**
 * Created by PhpStorm.
 * User: Amila
 * Date: 1/17/2016
 * Time: 11:50 PM
 */

class login_model extends CI_Model
{

//    public function get_users($user_id,$name)
//    {
////        $query=$this->db->query('Select * from customer');
//
//        $this->db->where([
//
//            'id'=> $user_id,
//            'name' => $name
//
//
//        ]);
//
//
//        $query=$this->db->get('customer');
////        return $query->num_rows();
//        return $query->result();
//
//    }
//
//
//    public function create_users($data)
//    {
//        $this->db->insert('customer',$data);
//    }
//
//
//    public function update_users($data,$id)
//    {
//        $this->db->where('id',$id);
//        $this->db->update('customer',$data);
//    }
//
//
//    public  function delete_users($id)
//    {
//        $this->db->where('id',$id);
//        $this->db->delete('customer');
//    }


    public function login_user($username,$password)
    {

        $sql="SELECT * FROM users WHERE username='$username'";
        $result=$this->db->query($sql);
        $row=$result->row();


        if($result->num_rows()===1) {
            if($row->active){
                if($row->password==-sha1($this->config->item('salt').$password)){
                    $session_data=array(
                        'user_id'=>$row->user_id,
                        'user_name'=>$row->username,
                        'first_name'=>$row->first_name,
                        'email'=>$row->email
                    );
                    $this->set_session($session_data);
                    return 'logged_in';
                }else{
                    return '<div class="label label-danger" >incorrect Password </div>';
                }
            }else{
                return '<div class="label label-danger" >Account is not activated ! </div>';
            }
        }
        else{

            return '<div class="label label-danger" >username is not found </div>';
        }
    }


    private function set_session($session_data){

        $sess_data=array(
            'user_id'=>$session_data['user_id'],
            'user_name'=>$session_data['user_name'],
            'first_name'=>$session_data['first_name'],
            'email'=>$session_data['email'],
            'logged_in'=>1,
        );
        $this->session->set_userdata($sess_data);
        //echo $sess_data['user_id'];

    }





}