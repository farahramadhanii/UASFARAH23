<?php
class Laporan_model extends CI_Model {

    public function get_total_pasien() {
        return $this->db->count_all('pendaftaran');
    }

    public function get_pasien_diterima() {
        $this->db->where('status', 'disetujui');
        return $this->db->count_all_results('pendaftaran');
    }

    public function get_pasien_ditolak() {
        $this->db->where('status', 'tidak disetujui');
        return $this->db->count_all_results('pendaftaran');
    }
}