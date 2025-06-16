<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulir Pendaftaran Online</h1>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pendaftaran Pasien</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a href="<?=base_url('pendaftaran/tambah');?>" class="btn btn-primary mb-3">Tambah Pendaftaran</a>
          <?php if (!empty($pendaftaran)):?>
            <table id="datatable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Nomor Telepon</th>
                  <th>Keluhan Penyakit</th>
                  <th>Tanggal Kunjungan</th>
                  <th>Waktu Kunjungan</th>
                  <th>Nama Dokter</th>
                  <th>Status</th>
                  <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php foreach ($pendaftaran as $b): ?>
              <tr>
                    <td><?= $b['nama'];?></td>
                    <td><?= $b['tgl_lahir'];?></td>
                    <td><?= $b['alamat'];?></td>
                    <td><?= $b['telp'];?></td>
                    <td><?= $b['keluhan'];?></td>
                    <td><?= $b['tgl_kunjung'];?></td>
                    <td><?= $b['waktu_kunjung'];?></td>
                    <td><?= $b['nama_dokter'];?></td>
                    <td>
  <form action="<?= site_url('pendaftaran/ubah_status/' . $b['id_pendaftaran']); ?>" method="post">
    <select name="status" onchange="this.form.submit()" class="form-control form-control-sm">
      <option value="pending" <?= $b['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
      <option value="disetujui" <?= $b['status'] == 'disetujui' ? 'selected' : '' ?>>Disetujui</option>
      <option value="tidak disetujui" <?= $b['status'] == 'tidak disetujui' ? 'selected' : '' ?>>Tidak Disetujui</option>
    </select>
  </form>
</td>
                    <td>
                      <a href="<?=base_url('pendaftaran/edit/'. $b['id_pendaftaran']); ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?=base_url('pendaftaran/hapus/'. $b['id_pendaftaran']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin Hapus?')">Hapus</a>

						</td>
						</tr>
						<?php endforeach; ?>
						</tbody>
						</table>
						<?php else: ?>
							<p> Tidak ada pendaftaran yang tersedia</p>
							<?php endif; ?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</div>
