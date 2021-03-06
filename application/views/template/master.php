<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard Admin Toko</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('boot/css/bootstrap.min.css')?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('boot/css/sb-admin.css')?>" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url('boot/css/plugins/morris.css')?>" rel="stylesheet">
         <link href="<?php echo base_url('boot/css/dataTables.min.css')?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('boot/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">



        <style>
            .container-fluid{
                min-height:600px;
            }
        </style>

    </head>

    <body>



        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Exe Komputer</a>
            </div>
            <ul class="nav navbar-right top-nav collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li <?php if($this->uri->segment(1)=='dashboard') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li <?php if($this->uri->segment(1)=='servis') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url('servis'); ?>"><i class="fa fa-fw fa-tasks"></i> Data Service</a>
                    </li>
                    <li <?php if($this->uri->segment(1)=='sparepart') echo 'class="active"'; ?>>
                        <a href="<?php echo base_url('sparepart'); ?>"><i class="fa fa-fw fa-wrench"></i> Data Sparepart</a>
                    </li>
                    <li <?php if($this->uri->segment(1)== 'laporan') echo 'class="active"'; ?>>
                        <a href="<?= base_url('laporan')?>"><i class="fa fa-fw fa-edit"></i> Laporan</a>
                    </li>
                    <li <?php if($this->uri->segment(1)== 'profil') echo 'class="active"'; ?>>
                        <a href="<?= base_url('auth/profil')?>"><i class="fa fa-fw fa-user"></i> Profil</a>
                    </li>
                    </div>
                    <!-- Top Menu Items -->
                    <ul class="nav navbar-right top-nav">
                        <li>

                            <a href="<?php echo base_url('auth/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out &nbsp;&nbsp; </a>
                        </li>
                    </ul>

                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

                    <!-- /.navbar-collapse -->
                    </nav>

                    <div id="page-wrapper">

                        <!--flash data-->
                        <div class="row">

                       <?php if($this->session->flashdata('message')){ ?>
                            <br>
                            <div class="container">
                                <div class="alert alert-<?php echo $this->session->flashdata('class'); ?>">
                                    <strong><?php echo $this->session->flashdata('message'); ?></strong> <?php echo $this->session->flashdata('value'); ?>
                                </div>
                            </div>
                    <?php } ?>




                        </div>


                        <!--end flash data-->

            <?php echo $contents; ?>
                        <!-- /.container-fluid -->

                    </div>


        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 2000);
        </script>
                    <!-- /#page-wrapper -->


                    <!-- /#wrapper -->

                    <!-- jQuery -->
                    <script src="<?php echo base_url('boot/js/jquery.js')?>"></script>

                     <!-- Bootstrap Core JavaScript -->
                    <script src="<?php echo base_url('boot/js/bootstrap.min.js')?>"></script>




                    <!-- Morris Charts JavaScript -->
                    <script src="<?php echo base_url('boot/js/plugins/morris/raphael.min.js')?>"></script>
                    <script src="<?php echo base_url('boot/js/plugins/morris/morris.min.js')?>"></script>
                    <script src="<?php echo base_url('boot/js/plugins/morris/morris-data.js')?>"></script>



                    </body>

                    </html>
