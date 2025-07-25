<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url('assets/adminlte/plugins/jquery/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/chart.js/chart.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/sparklines/sparklines.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/jqvmap/jquery.vmap.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/moment/moment.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.vmap.min/js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/summernote/summernote-bs4.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.jsv')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/adminlte/dist/js/adminlte.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/dist/js/pages/dashboard.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets/adminlte/dist/js/demo.js')?>"></script>
<!-- Data Tables & export button -->
<script src="<?=base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?=base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/0.2.7/vfs_fonts.js"></script>
<script>
  $(document).ready(function(){
    const table = $('#datatable').DataTable({
      responsive : true,
      lengthChange : true,
      autoWidth : true,
      dom : 'Bfrtip',
      buttons : [
        {
          extend : 'excelHtml5',
          className: 'btn btn-success btn-sm',
          title: 'Data_dan_Daftar_Pasien'
        },
        {
          extend: 'pdfHtml5',
          className: 'btn btn-danger btn-sm',
          title: 'Data_dan_Daftar_Pasien',
          orientation: 'landscape',
          pageSize: 'A4'
        },
        {
          extend: 'print',
          className: 'btn btn-danger btn-sm',
          title: 'Data_dan_Daftar_Pasien'
        }
      ]
    });
      table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
    $('.summernote').summernote({
      height:300,
      toolbar:[
        ['style', ['style']],
        ['font', ['bold', 'underline','italic','clear']],
        ['color',['color']],
        ['para',['ul','ol','paragraph']],
        ['table',['table']],
        ['insert',['link','picture','video']],
        ['view',['fullscreen','codeview','help']]
      ],
      callbacks : {
        onImageUpload: function (files) {
          for (let i = 0; i < files.length; i++) {
            uploadSummernoteImage(files[i]);
          }
        }
      }
    });

    function uploadSummernoteImage(file) {
      let data = new FormData();
      data.append('image', file);

      $.ajax({
        url: '<?= base_url('berita/upload_summernote_image'); ?>',
        type: 'POST',
        data: data,
        contentType: false,
        cache: false,
        processData: fslse,
        success: function(response) {
          try {
            let imageUrl = JSON.parse(response).url;
            $('.summernote').summernote('insertImage', imageUrl);
          } catch (e) {
            console.error('Error parsing JSON response:', e);
            console.log('Raw response:', response);
          }
        },
        error: function (jqXHR, textStatus, errorThrown){
          console.error(textStatus, errorThrown);
        }
      });
    }
  });
</script>
</body>
</html>
