<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tambah Data Service
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="<?= base_url('dashboard')?>">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> <a href="<?= base_url('servis')?>">Data Service</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> Tambah Data Service
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <form role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="col-md-6">




                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" required placeholder="Nama" name="nama">
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input onkeypress='validate(event)' class="form-control" maxlength="12" required placeholder="No Hp" name="nohp">
                </div>

                <div class="form-group">
                    <label >Kategori</label>
                    <select class="form-control" name="kategori">
                        <?php
                        foreach ($kategori as $kat){
                            ?>
                        <option value="<?= $kat->id_kategori ?>"><?= $kat->kategori ?></option>
                        <?php
                        }
                        ?>


                    </select>
                </div>



                <div class="form-group">
                    <label>Tipe Barang</label>
                    <input class="form-control" required placeholder="Tipe Barang" name="tipe">
                </div>
                <div class="form-group">
                    <label>Kelengkapan</label>
                    <input class="form-control" required placeholder="Kelengkapan" name="kelengkapan">
                </div>
                </br>




            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Masalah</label>
                    <textarea name="kerusakan" class="form-control" rows="5" id="comment"></textarea>
                </div>

                <div class="form-group">
                    <Button class="btn btn-primary btn-xl page-scroll">Simpan</button>

                </div>

            </div>


         </form>

    </div>
    <!-- /.row -->

</div>

<script>
    function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
</script>
<!-- /.container-fluid -->
