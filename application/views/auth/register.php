<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Najwa's Hospital</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css');?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/jqvmap/jqvmap.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/overlayScrollbars/css/overlayScrollbars.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/summernote/summernote-bs4.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/dist/css/adminlte.min.css');?>">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300;400;400i;700">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/custom-theme.css'); ?>">
<!-- Tambahkan font lucu -->
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Comic+Neue:wght@700&display=swap" rel="stylesheet">

</head>


  
    <!-- Content Header (Page header) -->

    <section class="content">
  <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card" style="width: 100%; max-width: 500px;">
      <div class="card-header text-center">
        <h2>Form Pendaftaran</h2>
      </div>
      <div class="card-body">
        <?php if ($this->session->flashdata('success')):?>
          <p style="color:green;"><?= $this->session->flashdata('success'); ?></p>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')):?>
          <p style="color:red;"><?= $this->session->flashdata('error'); ?></p>
        <?php endif; ?>

        <?= validation_errors('<p style="color:red;">','</p>'); ?>

        <form action="<?= base_url('auth/process_register'); ?>" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="password" required>
          </div>
          <div class="form-group">
            <label for="confirm_password">Konfirmasi Password</label>
            <input type="password" class="form-control" name="confirm_password" placeholder="Konfirmasi Password" required>
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" name="role" required>
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</div>
