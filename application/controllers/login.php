<?php

class login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('M_Login');
    }


public function index()
{

    $data['judul'] = 'Login';
    $data['mahasiswa'] = $this->M_Login->getAllUser(); 
    $this->load->view('login.php', $data);

}


}