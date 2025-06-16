<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Pendaftaran</h1>
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
          <h3 class="card-title">Form Pendaftaran</h3>

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
          <form action="<?php echo base_url('pendaftaran/update/'. $pendaftaran['id_pendaftaran']);?>" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $pendaftaran['pendaftaran']; ?>" id="pendaftaran" placeholder="Pendaftaran" required>
              <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control summernote" name="alamat" id="alamat" placeholder="Alamat" required></textarea>
                </div>
                <div class="form-group">
                    <label for="telp">Telepon</label>
                    <input type="text" class="form-control" name="telp" id="telp" placeholder="Telepon" required>
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan Penyakit</label>
                    <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Keluhan" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input type="time" class="form-control" name="jam" id="jam" placeholder="jam" required>
                </div>
                <div class="form-group">
                    <label for="dokter">Dokter</label>
                    <input type="text" class="form-control" name="dokter" id="dokter" placeholder="dokter" required>
                </div>
</div>
<div class="form-group">
  <label for="status">Status</label>
  <select class="form-control" name="status" id="status" required>
    <option value="" disabled selected>Pilih Status</option>
    <option value="setuju">Setuju</option>
    <option value="tidak_setuju">Tidak Setuju</option>
  </select>
</form>
</div>
<div class="card-footer">
</div>
</div>
</section>
</div>