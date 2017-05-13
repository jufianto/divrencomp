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
                    <label>No Nota</label>
                    <input class="form-control" required value="<?= $record->no_nota ?>" name="no_nota" readonly="">
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" required value="<?= $record->nama_pelanggan ?>" name="nama">
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input class="form-control" required value="<?= $record->kontak ?>" name="nohp">
                </div>

                <div class="form-group">
                    <label >Kategori</label>
                    <select class="form-control" name="kategori">
                        <?php
                        foreach ($kategori as $kat){
                            ?>
                        <option value="<?= $kat->id ?>" <?= $kat->id == $record->kategori ? "selected" : ""; ?>><?= $kat->kategori ?></option>
                        <?php
                        }
                        ?>


                    </select>
                </div>

                <div class="form-group">
                    <label>Tipe Barang</label>
                    <input class="form-control" required value="<?= $record->tipe ?>" name="tipe">
                </div>

                </br>




            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label>Kelengkapan</label>
                    <input class="form-control" required value="<?= $record->kelengkapan ?>" name="kelengkapan">
                </div>

                <div class="form-group">
                    <label >Status</label>
                    <select class="form-control" name="status">
                        <?php
                        $statusList = array(
                            '0' => 'Sedang Dicek',
                            '1' => 'Belum Konfirmasi',
                            '2' => 'Sedang Dikerjakan',
                            '3' => 'Ready',
                            '4' => 'Batal'
                        );
                        foreach ($statusList as $id => $val){
                            ?>
                        <option value="<?= $id ?>" <?= $id == $record->status ? "selected" : ""; ?>><?= $val ?></option>
                        <?php
                        }
                        ?>


                    </select>
                </div>

                <div class="form-group">
                    <label>Masalah</label>
                    <textarea name="kerusakan" class="form-control" rows="5" id="comment"><?= $record->kerusakan ?></textarea>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" required value="<?= $record->harga ?>" name="harga">
                </div>

                <div class="form-group">
                    <Button class="btn btn-primary btn-xl page-scroll">Simpan</button>

                </div>

            </div>


        </form>

    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
