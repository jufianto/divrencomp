<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
        Laporan <small>Laporan </small>
      </h1>
      <ol class="breadcrumb">
        <li class="active">
          <i class="fa fa-dashboard"></i> Dashboard
        </li>
      </ol>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">

    </div>
  </div>

  <div class="row">
    <div class="col-md-6">




      <div class="panel panel-primary">
        <div class="panel-heading">
          Laporan Exe Komputer
        </div>

        <div class="panel-body">


          <div class="table-responsive" style="margin-top:20px">
            <table class="table table-hover">
              <tr>
                <th>Laporan</th>
                <th>Total</th>
              </tr>
              
              <tr>
                <td><a href="dataservice.php">Total Service Diterima</a></td>
                <td><?= $terima ?></td>
              </tr>
              <tr>
                <td><a href="<?= base_url('servis/batal') ?>"> Total Service Dibatalkan </a></td>
                <td><?= $batal ?></td>

              </tr>
              <tr>
                <td><a href="<?= base_url('Sparepart') ?>"> Total Sparepart Dibeli </a></td>
                <td> <?= $spare ?></td>

              </tr>
              <tr>
                <td>Pemasukan </td>
                <td><?= harga($pemasukan->harga);?></td>

              </tr>
              <tr>
                <td> Pengeluaran </td>
                <td><?= harga($pengeluaran->harga);?></td>

              </tr>

            </table>
          </div>

        </div>
      </div>
    </div>

    <!-- <div class="row">
      <div class="col-lg-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Pie Chart Example with Tooltips</h3>
          </div>
          <div class="panel-body">
            <div class="flot-chart">
              <div class="flot-chart-content" id="flot-pie-chart"></div>
            </div>
            <div class="text-right">
              <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>




</div>
