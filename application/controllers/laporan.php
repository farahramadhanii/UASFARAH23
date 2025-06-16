<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('laporan_model');
    }

    public function index() {
        $data['total_pasien'] = $this->laporan_model->get_total_pasien();
        $data['pasien_diterima'] = $this->laporan_model->get_pasien_diterima();
        $data['pasien_ditolak'] = $this->laporan_model->get_pasien_ditolak();

        $this->load->view('templates/header');
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }
}