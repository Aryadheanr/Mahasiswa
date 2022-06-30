<?php

class home extends CI_Controller {
    public function index ()
    {
        $data['judul'] = 'Data Mahasiswa';
        $this->load->view('header.php' , $data);
        $this->load->view('index.php');
        $this->load->view('footer.php');
    }

}