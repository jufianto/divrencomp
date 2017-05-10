<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Detail Data Service
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="<?= base_url('dashboard')?>">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> <a href= "<?= base_url('servis')?>" >Data Service</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> Detail Data Service
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
        
    <div class="row">
        
        <div class="col-md-8 col-md-offset-2">
            
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    
                    <tr>
                        <td>No Nota</td>
                        <td><?= $rc->no_nota ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Pelanggan</td>
                        <td><?= $rc->id_pelanggan == 1 ? 'Umum' : 'Toko' ?></td>
                    </tr>
                    <tr>
                        <td>Nama Pelanggan</td>
                        <td><?= $rc->nama_pelanggan ?></td>
                    </tr>
                    <tr>
                        <td>Tipe Barang</td>
                        <td><?= $rc->tipe ?></td>
                    </tr>
                    <tr>
                        <td>Kategori Barang</td>
                        <td>
                            <?php
                            foreach ($kategori as $kat){
                                if($kat->id == $rc->kategori ){
                                    echo $kat->kategori;
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td><?= $rc->kontak ?></td>
                    </tr>
                    <tr>
                        <td>Kelengkapan</td>
                        <td><?= $rc->kelengkapan ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <?php 
                            if ($rc->status == 0){
                                $st = "Sedang Dicek";
                            } elseif($rc->status ==1){
                                $st = "Belum Dikonfirmasi";
                            }elseif($rc->status==2)
                            {
                                $st = "Sedang di Kerjakan";
                            }elseif($rc->status ==3){
                                $st = "ready";
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kerusakan</td>
                        <td><?= $rc->kerusakan ?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><?= $rc->harga ?></td>
                    </tr>
                    <tr>
                        <td>Action</td>
                        <td>
                            <a href="<?= base_url('servis/editServis/' . $rc->no_nota) ?>" > <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit &nbsp;</a>
                            <a href="#" > <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Print</a>
                            <a href="<?= base_url('servis/deleteServis/' . $rc->no_nota) ?>" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete </a>
                           
                        </td>
                    </tr>
                        
                    
                </table>
                    
            </div>
                
                
                
                
        </div>
    </div>