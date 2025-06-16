<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_user_model extends CI_Model {

    // Simpan data ke tabel 'pendaftaran' (bukan 'pendaftaran_user' lagi)
    public function insert($data) {
        return $this->db->insert('pendaftaran', $data);
    }

    // Ambil semua data dokter
    public function get_all_dokter() {
        return $this->db->get('dokter')->result_array();
    }
}