<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Profil Admin
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="<?= base_url('dashboard')?>">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> <a href= "<?= base_url('profil')?>" >Profil</a>
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
                        <td>Username</td>
                        <td><?= $record->username ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><?= "********************" ?></td>
                    </tr>
                    
                    <tr>
                        <td>Action</td>
                        <td>
                            <a href="<?= base_url('auth/editPass/' .$record->username) ?>" > <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit Password &nbsp;</a>
                        
                        </td>
                    </tr>


                </table>

            </div>




        </div>
    </div>
