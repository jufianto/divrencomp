<div class="container-fluid">
    <?php echo validation_errors();
     ?>
  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
        Tambah Data Sparepart
      </h1>
      <ol class="breadcrumb">
        <li>
          <i class="fa fa-dashboard"></i>  <a href="<?= base_url('dashboard')?>">Dashboard</a>
        </li>
        <li class="active">
          <i class="fa fa-edit"></i> <a href="<?= base_url('sparepart')?>">Data Sparepart</a>
        </li>
        <li class="active">
          <i class="fa fa-edit"></i> Tambah Data Sparepart
        </li>
      </ol>
    </div>
  </div>
  <!-- /.row -->
  <!-- form edit data service -->
  <div class="row">
    <div class="col-md-6">


      <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">


        <div class="form-group">
          <label>Nama Barang</label>
          <input class="form-control" value="<?= $record->nama_sparepart ?>"  required name="nama">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input class="form-control" value="<?= $record->harga_sparepart ?>" required name="harga">
        </div>

      </br>
    </br>

    <div class="form-group">
      <Button class="btn btn-primary btn-xl page-scroll">Simpan</button>

      </div>
    </form>

  </div>

</div>
