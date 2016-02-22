<?php
/**
 * Created by PhpStorm.
 * User: Amila
 * Date: 1/17/2016
 * Time: 11:50 PM
 */

class User_model extends CI_Model
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

        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $result=$this->db->get('users');

        if($result->num_rows()==1)
        {

            return $result->row(0)->id;

        }
        else{

            return false;
        }



    }



}