<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard <small>Statistics Overview</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->


    <!-- /.row -->

    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $servis ?></div>
                            <div>Service</div>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('servis') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">Lihat detail</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-wrench fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $sparepart ?> </div>
                            <div>Sparepart</div>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('sparepart') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">lihat detail</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
<!--         <div class="col-lg-4 col-md-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-edit fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">124</div>
                            <div>Laporan</div>
                        </div>
                    </div>
                </div>
                <a href="laporan.php">
                    <div class="panel-footer">
                        <span class="pull-left">lihat detail</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div> -->

    </div>
    <!-- /.row -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- /.row -->


    <!-- /.row -->

</div>
