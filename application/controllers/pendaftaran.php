<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->model('Dokter_model');
        $this->load->library('session');
    }

    public function index(){
        $data['pendaftaran'] = $this->Pendaftaran_model->get_all_pendaftaran();
        $this->load->view('templates/header');
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah(){
        $data['pendaftaran'] = $this->Pendaftaran_model->get_all_pendaftaran();
        $data['nama_dokter'] = $this->Dokter_model->get_all(); // ambil semua data dokter
        $this->load->view('templates/header');
        $this->load->view('pendaftaran/form_pendaftaran', $data);
        $this->load->view('templates/footer');
    }

    public function insert(){
        $nama = $this->input->post('nama');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $keluhan = $this->input->post('keluhan');
        $tgl_kunjung = $this->input->post('tgl_kunjung');
        $waktu_kunjung = $this->input->post('waktu_kunjung');
        $id_dokter = $this->input->post('nama_dokter'); // ini value dari <select>

        $data = array(
            'nama' => $nama,
            'tgl_lahir' => $tgl_lahir,
            'alamat' => $alamat,
            'telp' => $telp,
            'keluhan' => $keluhan,
            'tgl_kunjung' => $tgl_kunjung,
            'waktu_kunjung' => $waktu_kunjung,
            'id_dokter' => $id_dokter, // simpan ID dokter, bukan nama
        );

        $result = $this->Pendaftaran_model->insert_pendaftaran($data);

        if ($result) {
            $this->session->set_flashdata('success', 'Pendaftaran berhasil disimpan');
            redirect('pendaftaran');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyimpan pendaftaran');
            redirect('pendaftaran');
        }
    }

    public function hapus($id_pendaftaran){
        $this->Pendaftaran_model->delete_pendaftaran($id_pendaftaran);
        redirect('pendaftaran');
    }

    public function edit($id_pendaftaran){
        $data['pendaftaran'] = $this->Pendaftaran_model->get_pendaftaran_by_id($id_pendaftaran);
        $data['nama_dokter'] = $this->Dokter_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('pendaftaran/edit_pendaftaran', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('tgl_lahir','tgl_lahir','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('telp','telp','required');
        $this->form_validation->set_rules('keluhan','keluhan','required');
        $this->form_validation->set_rules('tgl_kunjung','tgl_kunjung','required');
        $this->form_validation->set_rules('waktu_kunjung','waktu_kunjung','required');
        $this->form_validation->set_rules('nama_dokter','nama_dokter','required');

        if ($this->form_validation->run() === FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat' => $this->input->post('alamat'),
                'telp' => $this->input->post('telp'),
                'keluhan' => $this->input->post('keluhan'),
                'tgl_kunjung' => $this->input->post('tgl_kunjung'),
                'waktu_kunjung' => $this->input->post('waktu_kunjung'),
                'id_dokter' => $this->input->post('nama_dokter'), // perbarui juga dokter-nya
            ];
            $this->Pendaftaran_model->update_pendaftaran($id, $data);
            redirect('pendaftaran');
        }
    }
    public function ubah_status($id_pendaftaran)
{
    $status = $this->input->post('status');
    $data = ['status' => $status];
    $this->Pendaftaran_model->update_pendaftaran($id_pendaftaran, $data);
    redirect('pendaftaran');
}

    public function laporan() {
        $this->load->view('templates/header');
        $this->load->view('laporan/laporan_form');
        $this->load->view('templates/footer');
    }

    public function cetak_laporan() {
        $tanggal_dari = $this->input->post('tanggal_dari');
        $tanggal_sampai = $this->input->post('tanggal_sampai');

        $data['pendaftaran'] = $this->Pendaftaran_model->get_laporan_pendaftaran($tanggal_dari, $tanggal_sampai);
        $data['tanggal_dari'] = $tanggal_dari;
        $data['tanggal_sampai'] = $tanggal_sampai;

        $this->load->view('templates/header');
        $this->load->view('pendaftaran/laporan_hasil', $data);
        $this->load->view('templates/footer');
    }
}
