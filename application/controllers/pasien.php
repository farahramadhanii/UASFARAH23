<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('pasien_model');
        $this->load->library('session');
    }

    public function index() {
        // ambil data gabungan pasien + dokter + kunjungan dari tabel pendaftaran
        $data['kunjungan'] = $this->pasien_model->get_detail_pasien_kunjungan();
        $this->load->view('templates/header');
        $this->load->view('pasien/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->model('dokter_model');
        $data['nama_pasien'] = $this->pasien_model->get_all_pasien();
        $data['nama_dokter'] = $this->dokter_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('pasien/form_pasien', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $pasien = $this->input->post('nama_pasien');

        $data = array(
            'nama_pasien' => $pasien,
        );

        $result = $this->pasien_model->insert_pasien($data);

        if ($result) {
            $this->session->set_flashdata('success', 'Data Daftar Pasien berhasil disimpan');
            redirect('pasien');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyimpan Data Daftar Pasien');
            redirect('pasien');
        }
    }

    public function hapus($idpasien) {
        $this->pasien_model->delete_pasien($idpasien);
        redirect('pasien');
    }

    public function edit($idpasien) {
        $data['pasien'] = $this->pasien_model->get_pasien_by_id($idpasien);
        $this->load->view('templates/header');
        $this->load->view('pasien/edit_pasien', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $this->form_validation->set_rules('nama_pasien', 'pasien', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->index($id);
        } else {
            $data = [
                'nama_pasien' => $this->input->post('nama_pasien'),
            ];
            $this->pasien_model->update_pasien($id, $data);
            redirect('pasien');
      }
    }
}
