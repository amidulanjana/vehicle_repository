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
        $this->db->where('id', $user_id);
        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }

    }


}