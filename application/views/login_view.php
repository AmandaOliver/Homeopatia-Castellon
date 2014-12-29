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
                    <br><br><h2 class="section-heading">Acceso Administrador</h2><br><br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 ">
                   <?php
                            echo form_open("login_controller/new_user");?>
                            <div class="row ">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                         <?php echo form_label("", "usuario");

                                            $data=array(
                                                "name"=>"usuario",
                                                "id"=>"usuario",
                                                "value"=>set_value("usuario"),
                                                "class"=>"form-control",
                                                'placeholder' => 'Introduce aquí tu usuario',
                                            );
                                            echo form_input($data);?><p><?php form_error('username')?></p>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                       <?php echo form_label("", "contraseña");

                                            $data=array(
                                                "name"=>"contraseña",
                                                "id"=>"contraseña",
                                                "value"=>set_value("contraseña"),
                                                "class"=>"form-control",
                                                'placeholder' => 'Introduce aquí tu contraseña',
                                            );
                                            echo form_password($data);?><p><?php form_error('password')?></p>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <?php form_hidden('token',$token)?>
                                <div class="clearfix"></div>
                                <div id="mensaje" class="col-lg-12 ">

                                   <?php echo validation_errors();?>
                                    <?php if($this->session->flashdata('usuario_incorrecto'))
                    {
                    ?>
                    <p><?=$this->session->flashdata('usuario_incorrecto')?></p>
                    <?php
                    }
                    ?>
                                    <div class='panel panel-info'><br><br>

                                     <?php echo form_submit("Submit", "Entrar",'class="btn btn-xl negro"') ; ?>
                                </div>

                         <?php echo form_close();?>


                    </div>
                </div>
                    <br><br></div>
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
