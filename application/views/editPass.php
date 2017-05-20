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
          <i class="fa fa-edit"></i> <a href="<?= base_url('auth/profil')?>">Profil</a>
        </li>
        <li class="active">
          <i class="fa fa-edit"></i> Edit Password
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
          <label>Username</label>
          <input class="form-control" value="<?= $record->username ?>" readonly="true" required name="username">
        </div>
        <div class="form-group">
          <label>Password Lama</label>
          <input class="form-control" type="password" placeholder="Password Lama" required name="oldpass">
        </div>
        <div class="form-group">
        <label>Password Baru</label>
          <input  class="form-control" type="password" placeholder="Password Baru" required name="newpass1">
        </div>
         <div class="form-group">
        <label>Konfirmasi Password Baru</label>
          <input  class="form-control" type="password" placeholder="Konfirmasi Password Baru" required name="newpass2">
        </div>



    <div class="form-group">
      <Button class="btn btn-primary btn-xl page-scroll">Simpan</button>

      </div>
    </form>

  </div>

</div>
