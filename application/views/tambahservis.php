<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tambah Data Service
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> <a href="pelanggan.php">Data Service</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> Tambah Data Service
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="col-md-6">
            
            <form role="form" action="prosestambah" method="post">
                
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" required placeholder="Nama" name="Nama">
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input class="form-control" required placeholder="No Hp" name="nohp">
                </div>
                <div class="form-group">
                    <label>Katergori Barang</label>
                    <input class="form-control" required placeholder="Kategori Barang" name="kategori">
                </div>
                 <div class="form-group">
                    <label>Tipe Barang</label>
                    <input class="form-control" required placeholder="Tipe Barang" name="tipe">
                </div>
                <div class="form-group">
                    <label>Kelengkapan</label>
                    <input class="form-control" required placeholder="Kelengkapan" name="kontak">
                </div>
                </br>
                
                <div class="form-group">
                    <Button class="btn btn-primary btn-xl page-scroll">Simpan</button>
                    
                </div>
            </form>
            
        </div>
        
    </div>
    <!-- /.row -->
    
</div>
<!-- /.container-fluid -->
