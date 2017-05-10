    <div class="container-fluid">
    
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Data Service
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-tasks"></i> Service
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
        <div class="row">
        
        <div class="col-md-9">
            <a href="<?= base_url('servis/tambahservis')?>" class="btn btn-default btn-md " style="margin-bottom:7px">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data Service
            </a>
        </div>
            <div class="col-md-3">
            

        </div>
    </div>
    <div class="row">
            <div class="col-lg-12">
                
            
            <div class="table-responsive">
                <table id="cunek" class="table table-bordered table-hover">
                        <thead>
                        
                        <tr>
                            <th width="80">No Nota</th>
                            <th width="180" style="text-align:center">tanggal order</th>
                            <th>Nama</th>
                            <th width="100">kontak</th>
                            <th width="150">Status</th>
                            <th width="300" colspan="2">Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                        <?php 
                        $no =1;
                        
                        if(count($record) == 0)
                        {?>
                            <tr>
                                <td colspan="6" style="text-align:center"> Tidak Ada Hasil </td>
                            </tr>    
                            
                        <?php    
                        }else{
                            
                        
                        foreach($record as $r){
                            ?>
                        <tr>
                            <td><?php echo $r->no_nota; ?></td>
                            <td align="center"><?php echo $r->tgl_order; ?></td>
                            <td><?php echo $r->nama_pelanggan; ?></td>
                            <td style="text-align:center"><?php echo $r->kontak; ?></td>
                            <?php 
                            if ($r->status == 0){
                                $st = "Sedang Dicek";
                            } elseif($r->status ==1){
                                $st = "Belum Dikonfirmasi";
                            }elseif($r->status==2)
                            {
                                $st = "Sedang di Kerjakan";
                            }elseif($r->status ==3){
                                $st = "ready";
                            } ?>
                            <td style="text-align:center"><?php echo $st ?></td>
                            <td width="320">
                                <a href="<?= base_url('servis/editServis/' . $r->no_nota) ?>" > <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit &nbsp;</a>
                                <a href="#" > <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Print</a>
                                <a href="<?= base_url('servis/deleteServis/' . $r->no_nota) ?>" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete </a>
                                <a href="<?= base_url('servis/detail/' . $r->no_nota) ?>" > <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Detail </a>

                                    
                                    
                            </td>
                                
                        </tr>
                        <?php }} ?>
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
    <!-- /.row -->
        
        
    <!-- /.row -->
        
</div>

