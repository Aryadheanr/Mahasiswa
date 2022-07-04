<?php

class About extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('M_Mahasiswa');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'About';
        $this->load->view('header.php' , $data);
        $this->load->view('about.php');
        $this->load->view('footer.php');
    }

}