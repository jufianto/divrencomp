<!DOCTYPE html>

    
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Exe Komputer</title>
            
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url('boot/assets/bootstrap/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('boot/assets/font-awesome/css/font-awesome.min.css')?> ">
        <link rel="stylesheet" href="<?php echo base_url('boot/assets/css/form-elements.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('boot/assets/css/style.css')?>">
            
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
            
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('boot/assets/ico/apple-touch-icon-144-precomposed.png') ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('boot/assets/ico/apple-touch-icon-114-precomposed.png') ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('boot/assets/ico/apple-touch-icon-72-precomposed.png')?> ">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('boot/assets/ico/apple-touch-icon-57-precomposed.png')?> ">
            
    </head>
        
    <body>
        
        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            
                            
                        </div>
                    </div>
                    <div class="row">
                        
                       <?php if($this->session->flashdata('message')){ ?>
                        <br>
                        <div class="container">
                            <div class="alert alert-<?php echo $this->session->flashdata('class'); ?>">
                                <strong><?php echo $this->session->flashdata('message'); ?></strong> <?php echo $this->session->flashdata('value'); ?>
                            </div>
                        </div>
                    <?php } ?>
                        
                        <?php  echo $contents;?>
                        

                    </div>
                        
                </div>
            </div>
                
        </div>
            
            
        <!-- Javascript -->
        <script src="<?php echo base_url('boot/assets/js/jquery-1.11.1.min.js')?>"></script>
        <script src="<?php echo base_url('boot/assets/bootstrap/js/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('boot/assets/js/jquery.backstretch.min.js')?>"></script>
        <script src="<?php echo base_url('boot/assets/js/scripts.js')?>"></script>
            
            
    </body>
</html>       
