<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Mahasiswa extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }


    public function index()
    {


        $data['judul'] = 'Daftar Mahasiswa';

        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        /**ini utk mengambil dari model database (Mahasiswa_model) */
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {

        $data['judul'] = 'Form Tambah Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'reqiured');
        $this->form_validation->set_rules('nrp', 'NRP', 'reqiured|numeric');
        $this->form_validation->set_rules('email', 'Email', 'reqiured|valid_email');



        if ($this->form_validation->run() == FALSE) {


            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {

            echo "Berhasil !!!";
        }
    }
}
