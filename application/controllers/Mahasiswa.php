<?php

class Mahasiswa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('M_Mahasiswa');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->M_Mahasiswa->getAllMahasiswa(); 
        if ( $this->input->post('keyword') ) {
            $data['mahasiswa'] = $this->M_Mahasiswa->cariDataMahasiswa();
        }
        $this->load->view('header.php' , $data);
        $this->load->view('Mahasiswa/index' , $data);
        $this->load->view('footer.php');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if( $this->form_validation->run() == FALSE ) 
        {
            $this->load->view('header.php' , $data);
            $this->load->view('Mahasiswa/tambah');
            $this->load->view('footer.php');
        } 
        else
         {
            $this->M_Mahasiswa->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->M_Mahasiswa->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('Mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->M_Mahasiswa->getMahasiswaById($id);
        $this->load->view('header.php', $data);
        $this->load->view('Mahasiswa/detail', $data);
        $this->load->view('footer.php');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data';
        $data['mahasiswa'] = $this->M_Mahasiswa->getMahasiswaById($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Mesin', 'Ekonomi', 'Keperawatan'];
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if( $this->form_validation->run() == FALSE ) 
        {
            $this->load->view('header.php' , $data);
            $this->load->view('Mahasiswa/ubah', $data);
            $this->load->view('footer.php');
        } 
        else
         {
            $this->M_Mahasiswa->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Mahasiswa');
        }
    }

}