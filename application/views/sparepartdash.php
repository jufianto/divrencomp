<div class="container-fluid">
    
    
    <div id="page-wrapper">
        
        <div class="container-fluid">
            
            
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Data Sparepart
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-tasks"></i> Sparepart
                        </li>
                    </ol>
                </div>
            </div>
                
                
                
                
            <!--  tulisan tambah data sparepart    --> 
                
                
            <div class="row">
                
                <div class="col-md-9">
                    <a href="<?php echo base_url('sparepart/tambah'); ?>" class="btn btn-default btn-md " style="margin-bottom:7px">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data Sparepart 
                    </a>
                </div>
                <div class="col-md-3">
                    
                    <!--  form pencarian     --> 
                        
                    <form action="#" method="get">
                        <div class="input-group stylish-input-group">
                            <input type="text" class="form-control" name="cari"  placeholder="Search"  >
                            <span class="input-group-addon">
                                <button type="submit" >
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
                
            <!--  tabel halaman data sparepart    --> 
                
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                
                                <tr>
                                    <th width="100">Id Sparepart</th>
                                    <th>Tanggal Order</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    
                                    <th width="150" colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                
                                foreach($record as $r)
                                {
                                    ?>
                                        
                                <tr>
                                    <td><?= $r->id_sparepart ?> </td>
                                    <td><?= $r->tgl_order ?> </td>
                                    <td><?= $r->nama_sparepart ?> </td>
                                    <td><?= $r->harga_sparepart ?> </td>
                                    
                                    <td width="150">
                                        <a href="editdatasparepart.php" > <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit &nbsp;</a>
                                        <a href="#" > <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete </a>
                                            
                                            
                                    </td>
                                        
                                </tr>
                          <?php } ?>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                
                
                
                
                
                
        </div>