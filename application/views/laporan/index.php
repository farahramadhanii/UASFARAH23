<div class="content-wrapper">
  <section class="content-header">
    <h1>Laporan & Statistik</h1>
  </section>

  <section class="content">
    <div class="row">
    <div class="col-md-12">
    <canvas id="grafikStatistik" height="100"></canvas>
  </div>
</div>
      <div class="row">
      <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $total_pasien ?></h3>
            <p>Total Pasien</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $pasien_diterima ?></h3>
            <p>Pasien Diterima</p>
          </div>
          <div class="icon">
            <i class="fas fa-check"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?= $pasien_ditolak ?></h3>
            <p>Pasien Ditolak</p>
          </div>
          <div class="icon">
            <i class="fas fa-times"></i>
          </div>
        </div>
      </div>
</div>
<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('grafikStatistik').getContext('2d');
  const grafikStatistik = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Total Pasien', 'Pasien Diterima', 'Pasien Ditolak'],
      datasets: [{
        label: 'Jumlah Pasien',
        data: [<?= $total_pasien ?>, <?= $pasien_diterima ?>, <?= $pasien_ditolak ?>],
        backgroundColor: [
          'rgba(0, 123, 255, 0.7)',
          'rgba(40, 167, 69, 0.7)',
          'rgba(220, 53, 69, 0.7)'
        ],
        borderColor: [
          'rgba(0, 123, 255, 1)',
          'rgba(40, 167, 69, 1)',
          'rgba(220, 53, 69, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false },
        tooltip: { enabled: true }
      },
      scales: {
        y: {
          beginAtZero: true,
          stepSize: 1
        }
      }
    }
  });
</script>
  </section>
</div>
