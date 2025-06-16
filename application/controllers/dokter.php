<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dokter extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('dokter_model');
        $this->load->library('session');
    }

    public function index() {
        $data['dokter'] = $this->dokter_model->get_all_dokter();
        $this->load->view('templates/header');
        $this->load->view('dokter/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->model('dokter_model');
        $data['dokter'] = $this->dokter_model->get_all_dokter();
        $this->load->view('templates/header');
        $this->load->view('dokter/form_dokter', $data);
        $this->load->view('templates/footer');
    }

    public function insert() {
        $dokter = $this->input->post('nama_dokter');

        $data = array(
            'nama_dokter' => $dokter,
        );

        $result = $this->dokter_model->insert_dokter($data);

        if ($result) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('dokter');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyimpan Data');
            redirect('dokter');
        }
    }
    public function hapus($id_dokter){
        $this->dokter_model->delete_dokter($id_dokter);
        redirect('dokter');
    }
    public function edit($id_dokter){
        $data['dokter'] = $this->dokter_model->get_dokter_by_id($id_dokter);
        $data['nama_dokter'] = $this->dokter_model->get_all_dokter(); // ← INI YANG KURANG
        $this->load->view('templates/header');
        $this->load->view('dokter/edit_dokter', $data);
        $this->load->view('templates/footer');
    }
    public function update($id){
        $this->form_validation->set_rules('nama_dokter','dokter','required');

        if ($this->form_validation->run()===FALSE){
            $this->index($id);
        } 
        else {
            $data = [
                'nama_dokter'=> $this->input->post('nama_dokter'),
            ];
            $this->dokter_model->update_dokter($id, $data);
            redirect('dokter');
        }
    }

}