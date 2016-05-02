<?php
/**
 * Created by PhpStorm.
 * User: Amila
 * Date: 3/6/2016
 * Time: 11:37 AM
 */

class profile_model extends CI_Model
{
    public function view_my_ads(){

        $user_id=1;
        $this->db->select('*');
        $this->db->from('myadd');
        $this->db->where('userID', $user_id);
        $query = $this->db->get();


        if ( $query->num_rows() > 0 ) {
            return $query->result_array();
        }else{
            return 0;
        }


    }

    public function userProfile($id){

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id',$id);
        $query=$this->db->get();

        if($query->num_rows() > 0){
            return $query->row_array();
        }
    }

    public function addFeedback($loggedUser,$feedback)
    {

        $data = array(
            'loggedUser' => $loggedUser,
            'feedback' => $feedback
        );

        $this->db->insert('feedback', $data);
        if ($this->db->affected_rows() == 1) {
            //$id=$this->db->insert_id();
            $this->db->select('*');
            $this->db->from('feedback');
            //$this->db->where('feedbackID',$id);
            $query=$this->db->get();
            if($query->num_rows()>0){
                return $query->result_array();
            }
        }
    }

    public function showFeedback(){

        $this->db->select('*');
        $this->db->from('feedback');
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
    }

    public function updateRating($rate){

        $this->db->select('*');
        $this->db->from('starrating');
        $this->db->where('userID',1);
        $query=$this->db->get();
        if($query->num_rows()>0){

            $data=$query->row_array();

            $array = array(
                'votes' => $data['votes']+1,
                'totalPoints' => $data['totalPoints']+$rate,
                'avgRate' => (($data['totalPoints']+$rate)/($data['votes']+1))
            );

            $this->db->where('userID',1 );
            $this->db->update('starrating', $array);
        }
        else{
            $array = array(
                'votes' => 1,
                'totalPoints' => $rate,
                'avgRate' => $rate,
                'userID'=>1
            );

            $this->db->insert('starrating',$array);
        }

    }

}