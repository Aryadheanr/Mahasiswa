<?php

class M_Login extends CI_Model {

    public function getAllUser()
    {
        return $this->db->get_where('user');
    }
   

}