<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Dokter</h1>
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
          <h3 class="card-title">Pilih Dokter</h3>

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
          <a href="<?=base_url('dokter/tambah');?>" class="btn btn-primary mb-3">Tambah Dokter</a>
          <?php if (!empty($dokter)):?>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Dokter</th>
                  <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php foreach ($dokter as $k): ?>
              <tr>
                    <td><?= $k['nama_dokter'];?></td>
                    <td>
                      <a href="<?=base_url('dokter/edit/'. $k['id_dokter']); ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?=base_url('dokter/hapus/'. $k['id_dokter']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin Hapus?')">Hapus</a>
            </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
            <?php else: ?>
            <p> Tidak ada Dokter yang tersedia </p>
            <?php endif; ?>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</div>