<!DOCTYPE html>
<html lang="es-es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de Maite Inglada Mulet, homeópata unicista.">
    <meta name="author" content="Amanda María Oliver Sánchez">

    <title>Homeopatía Castellón</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <br>
                <br>
                <h2 class="section-heading">¿Qué deseas hacer?</h2>
            </div>
        </div>
        <br>
        <br>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Blog</h3>
                    </div>
                    <div class="panel-body">
                        <a href="<?php echo base_url();?>menu_controller/insertar_entrada">Añadir una entrada</a>
                        <br>
                        <a href="<?php echo base_url();?>menu_controller/editar_eliminar_entrada">Editar o eliminar una entrada</a>
                        <br>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Noticias</h3>
                    </div>
                    <div class="panel-body">
                        <a href="<?php echo base_url();?>menu_controller/insertar_noticia">Añadir una noticia</a>
                        <br>
                        <a href="<?php echo base_url();?>menu_controller/editar_eliminar_noticia">Editar o eliminar una noticia</a>
                        <br>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Bibliografía</h3>
                    </div>
                    <div class="panel-body">
                        <a href="<?php echo base_url();?>menu_controller/insertar_libro">Añadir un libro</a>
                        <br>
                        <a href="<?php echo base_url();?>menu_controller/editar_eliminar_libro">Editar o eliminar un libro</a>
                        <br>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
            <br>
            <br>
            <br>
            <a class="btn btn-xl negro" role="button" href="<?php echo base_url();?>login_controller/logout_ci">Cerrar Sesión</a>
            <br>
            <br>
            <br>
        </div>
    </div>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Amanda María Oliver Sánchez</span>
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/AmyNahMas"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://es.linkedin.com/pub/amanda-maría-oliver-sánchez/ab/6a3/798/"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/classie.js"></script>
    <script src="<?php echo base_url();?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url();?>assets/js/jqBootstrapValidation.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/js/agency.js"></script>
</body>


</html>
