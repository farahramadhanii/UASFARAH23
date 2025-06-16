<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pasien_model extends CI_Model {

    // Ambil semua data dari tabel pasien
    public function get_all_pasien() {
        return $this->db->get('pasien')->result_array();
    }

    // Ambil semua data dalam format objek
    public function get_all() {
        return $this->db->get('pasien')->result();
    }

    // Insert data pasien
    public function insert_pasien($data) {
        return $this->db->insert('pasien', $data);
    }

    // Hapus data pasien berdasarkan id
    public function delete_pasien($idpasien) {
        return $this->db->delete('pasien', ['idpasien' => $idpasien]);
    }

    // Ambil pasien berdasarkan ID
    public function get_pasien_by_id($idpasien) {
        return $this->db->get_where('pasien', ['idpasien' => $idpasien])->row_array();
    }

    // Update data pasien
    public function update_pasien($id, $data) {
        $this->db->where('idpasien', $id);
        return $this->db->update('pasien', $data);
    }

    // ✅ Tambahan: Ambil data nama pasien, dokter, waktu kunjung, dan tanggal kunjung dari tabel pendaftaran
    public function get_detail_pasien_kunjungan() {
        $this->db->select('pendaftaran.nama as nama_pasien, dokter.nama_dokter, pendaftaran.waktu_kunjung, pendaftaran.tgl_kunjung, pendaftaran.status');
        $this->db->from('pendaftaran');
        $this->db->join('dokter', 'pendaftaran.id_dokter = dokter.id_dokter', 'left');
        $this->db->order_by('pendaftaran.tgl_kunjung', 'DESC');
        return $this->db->get()->result();
        $this->db->select('..., pendaftaran.status');
    }
}
