<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DATA DAN DAFTAR PASIEN KONSULTANSI</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pasien</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Cek Data dan Jadwal Konsultansi Anda</h3>
      </div>
      <div class="card-body">
        <?php if (!empty($kunjungan)): ?>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Nama Dokter</th>
                <th>Tanggal Kunjungan</th>
                <th>Waktu Kunjungan</th>
                <th> Status </th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($kunjungan as $k): ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= htmlspecialchars($k->nama_pasien); ?></td>
                  <td><?= htmlspecialchars($k->nama_dokter); ?></td>
                  <td><?= date('d-m-Y', strtotime($k->tgl_kunjung)); ?></td>
                  <td><?= $k->waktu_kunjung; ?></td>
                  <td>
  <?php if ($k->status == 'pending'): ?>
    <span class="badge badge-warning">Pending</span>
  <?php elseif ($k->status == 'disetujui'): ?>
    <span class="badge badge-success">Disetujui</span>
  <?php else: ?>
    <span class="badge badge-danger">Tidak Disetujui</span>
  <?php endif; ?>
</td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <p>Tidak ada jadwal konsultansi.</p>
        <?php endif; ?>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </section>
</div>
