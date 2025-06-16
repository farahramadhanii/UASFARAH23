<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_user extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Dokter_model'); 
    }

    public function index() {
        if ($this->session->userdata('role') != 'user') {
            redirect('auth/login');
        }

        $data['nama_dokter'] = $this->Dokter_model->get_all(); 
        $this->load->view('templates/header');
        $this->load->view('pendaftaran/form_pendaftaran', $data);
        $this->load->view('templates/footer');
    }
}