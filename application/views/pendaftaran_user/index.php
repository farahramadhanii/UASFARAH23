<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Pendaftaran Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Pendaftaran Pasien</h3>
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
                <form action="<?php echo base_url() . "pendaftaran/insert"; ?>" method="POST">
                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" required>
                    </div>

                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                    </div>

                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                    </div>

                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="telp">Telepon</label>
                        <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan Nomor Telepon Anda" required>
                    </div>

                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="keluhan">Keluhan Penyakit</label>
                        <textarea class="form-control summernote" name="keluhan" id="keluhan" placeholder="Keluhan yang Anda alami" required></textarea>
                    </div>

                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="tgl_pendaftaran">Tanggal Pendaftaran</label>
                        <input type="date" class="form-control" name="tgl_pendaftaran" id="tgl_pendaftaran" 
                               value="<?= date('Y-m-d'); ?>" readonly>
                    </div>

                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="tgl_kunjung">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tgl_kunjung" id="tgl_kunjung" required>
</div>
                    <label for="waktu_kunjung">Waktu Kunjungan</label>
<input type="time" name="waktu_kunjung" id="waktu_kunjung" class="form-control" required>
                    <div class="form-group" style="margin-left: 10px; margin-right: 10px;">
                        <label for="nama_dokter">Dokter</label>
                        <select class="form-control" name="nama_dokter" id="nama_dokter" required>
                            <option value="">Pilih Dokter</option>
                            <?php if (!empty($nama_dokter)): ?>
                                <?php foreach ($nama_dokter as $dk): ?>
                                    <option value="<?= $dk->iddokter; ?>"><?= $dk->nama_dokter; ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <!-- Optional Footer -->
            </div>
        </div>
    </section>
</div>
