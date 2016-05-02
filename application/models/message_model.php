<?php
class message_model extends CI_Model
{

    public function getUserData(){

        $logged_user=$this->session->userdata('user_id');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id !=',1 );
        $result = $this->db->get();
        return ($result->result_array());
    }

    public function getMessage(){

        $userId=$this->input->get('id');
        if(isset($userId)) {
            $this->db->select('id');
            $this->db->from('user');
            $this->db->where('id', $userId);
            $this->db->where('id !=', 1);
            $result = $this->db->get();
            if ($result->num_rows() == 1) {

                $sql = "SELECT * FROM `conversation` WHERE (user_one='$userId' AND user_two=1) OR (user_one=1 AND user_two='$userId')";
                $conversation = $this->db->query($sql);
                if ($conversation->num_rows() == 1) {
                    $row = $result->row();
                    return $row->id;
                } else {
                    $sql = "INSERT INTO `conversation` VALUES ('','1',$userId)";
                    $conversation = $this->db->query($sql);
                    $conversationId = $this->db->mysql_insert_id();
                    return $conversationId;
                }

            } else {
                return false;
            }
        }else{
            return false;
        }
    }

    public function showMessage(){
        $conversation_id=$this->input->get('c_id');
        if(isset($conversation_id)) {
            $query = "SELECT * FROM `messages` WHERE conversation_id='$conversation_id'";
            $result = $this->db->query($query);
            if ($result->num_rows() > 0) {

                return $result->result_array();

            }
        }else{
            return false;
        }
    }

    public function getUser($userFrom){
        $query="SELECT username,img FROM `user` WHERE id='$userFrom'";
        $result=$this->db->query($query);
        if ($result->num_rows() == 1) {
            return $result->row();
        }

    }


}