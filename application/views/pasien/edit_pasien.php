<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> DATA DAN JADWAL KONSULTANSI PASIEN</h1>
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
          <h3 class="card-title"></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="box-body">
          <form action="<?php echo base_url('nama_pasien/update/'. $pasien['idpasien']);?>" method="POST">
          <div class="box-body">
          <div class="form-group"><br>
                    <label for="nama_dokter">Dokter</label>
                    <select class="form-control" name="nama_dokter" id="nama_dokter" required>
                      <option value="">Pilih Dokter</option>
                      <?php if (!empty($dokter)): ?>
                        <?php foreach ($dokter as $dk): ?>
                          <option value = "<?=$dk->id_dokter; ?>"><?= $dk->dokter; ?></option>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </select>
                </div>
            </div>
        </div>
        <div class ="box-footer">
        <button type ="submit" class = "btn btn-primary">Update</button>
        <a href="<?= base_url('pasien'); ?>" class="btn btn_secondary">Batal</a>
        </div>
      </form>
    </div>
  <div class="card-footer">
</div>
</div>
</section>
</div>
