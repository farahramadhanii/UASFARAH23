<!-- Load header dari AdminLTE -->
<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/sidebar'); ?>

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DATA DAN DAFTAR PASIEN KONSULTANSI</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <p><b>Cek Data dan Jadwal Konsultansi Anda</b></p>
        <a href="<?= base_url('pasien/tambah'); ?>" class="btn btn-primary mb-3">TAMBAH DATA</a>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama Pasien</th>
              <th>Nama Dokter</th>
              <th>Jadwal Pasien</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pasien as $ps): ?>
              <tr>
                <td><?= $ps->nama_pasien ?></td>
                <td><?= $ps->nama_dokter ?></td>
                <td><?= $ps->jadwal_pasien ?></td>
                <td>
                  <a href="<?= base_url('pasien/edit/' . $ps->idpasien); ?>" class="btn btn-info btn-sm">Edit</a>
                  <a href="<?= base_url('pasien/delete/' . $ps->idpasien); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

<!-- Load footer dari AdminLTE -->
<?php $this->load->view('template/footer'); ?>
