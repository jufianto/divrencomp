<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Divren Computer Service Center	</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('toob/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('toob/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('toob/vendor/magnific-popup/magnific-popup.css') ?>" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url('toob/css/creative.min.css') ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Divren Komputer</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Website Layanan Service Divren Komputer</h1>
                <hr>
                <p>Masukkan Nota Service anda dibawah ini</p>
				<form class="form-inline">Masukkan Nota
    <input type="email" class="form-control" size="50" placeholder="Nomor Nota Service">
                <a type="button" class="btn btn-primary btn-xl page-scroll" data-toggle="modal" data-target="#myModal">Submit</a>


            </div>
        </div>
    </header>

	<div class="container">
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detail Service</h4>
        </div>
        <div class="modal-body">
          <p>(form detail service)</p>
        </div>
        <div class="modal-footer">
          <button  type="button" class="btn " ><a href="HalamanUtama_iya.php">Konfirmasi</a></button>
		  <button  type="button" class="btn " ><a href="HalamanUtama_tidak.php">Tidak</a></button>

        </div>
		</div>

			</div>
		</div>
	</div>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Melayani</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-wrench text-primary sr-icons"></i>
                        <h3>Service</h3>
                        <p class="text-muted">Kami melayani Service Hardware dan Software</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-laptop text-primary sr-icons"></i>
                        <h3>Pembelian</h3>
                        <p class="text-muted">Kami melayani pembelian software dan hardware ditempat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>0821 6936 3212</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-home fa-3x sr-contact"></i>
                    <p>Jl. Bangau Sakti No. 10</p>
                </div>
            </div>
        </div>
    </section>



    <!-- jQuery -->
    <script src="<?php echo base_url('toob/vendor/jquery/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('toob/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('toob/vendor/scrollreveal/scrollreveal.min.js') ?>"></script>
    <script src="<?php echo base_url('toob/vendor/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url('toob/js/creative.min.js') ?>"></script>

</body>

</html>
