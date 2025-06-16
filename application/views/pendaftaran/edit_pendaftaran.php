<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Pendaftaran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Pendaftaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Pendaftaran</h3>
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
                <form action="<?php echo base_url('pendaftaran/update/'. $pendaftaran['id_pendaftaran']); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $pendaftaran['nama']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $pendaftaran['tgl_lahir']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control summernote" name="alamat" id="alamat" required><?= $pendaftaran['alamat']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="text" class="form-control" name="telp" id="telp" value="<?= $pendaftaran['telp']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="keluhan">Keluhan Penyakit</label>
                        <input type="text" class="form-control" name="keluhan" id="keluhan" value="<?= $pendaftaran['keluhan']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="tgl_kunjung">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tgl_kunjung" id="tgl_kunjung" value="<?= $pendaftaran['tgl_kunjung']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="waktu_kunjung">Waktu Kunjungan</label>
                        <input type="time" class="form-control" name="waktu_kunjung" id="waktu_kunjung" value="<?= $pendaftaran['waktu_kunjung']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_dokter">Dokter</label>
                        <select class="form-control" name="nama_dokter" id="nama_dokter" required>
                            <option value="">Pilih Dokter</option>
                            <?php foreach ($nama_dokter as $dk): ?>
                                <option value="<?= $dk->id_dokter; ?>" <?= $dk->id_dokter == $pendaftaran['id_dokter'] ? 'selected' : ''; ?>>
                                    <?= $dk->nama_dokter; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('pendaftaran'); ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>

            <div class="card-footer">
            </div>
        </div>
    </section>
</div>
