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
    <script src="http://maps.googleapis.com/maps/api/js">
    </script>

    <script>
        var myCenter = new google.maps.LatLng(39.990934, -0.036484);

        function initialize() {
            var mapProp = {
                center: myCenter,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Homeopatía Castellón</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#que">¿Que es?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#principios">Principios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#como">¿Cómo es una consulta?</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#blog">Blog</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#noticias">Noticias</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#libros">Libros</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">

                <div class="intro-heading">Maite Inglada Mulet</div>
                <div class="intro-lead-in">Medicina Homeopática Unicista</div>
                <a href="#contact" class="page-scroll btn btn-xl">Contáctame</a>
            </div>
        </div>
    </header>
    <!-- Que Section -->
    <section id="que">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">¿Qué es la homeopatía?</h2>
                    <h2 class="section-subheading"><blockquote class="pull-right"><p>Si quieres descubrir los secretos del Universo, piensa en términos de energía, frecuencia y vibración</p><footer>Inventor de la Radio y la Corriente Alterna: <cite title="Nikola Tesla">Nikola Tesla (1.856-1.943)</cite></footer></blockquote></h2>


                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="text-muted">La homeopatía es una ciencia basada en reconocer la capacidad innata del organismo para mantenerse en equilibrio, es decir, sano, gracias a la fuerza vital que regula nuestras funciones y reacciona de manera automática ante las agresiones externas con el objetivo de devolver la salud.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="text-muted">El medicamento homeopático interviene en este esfuerzo natural del organismo, estimulando las reacciones defensivas del sistema inmunitario y de regulación nerviosa. Actúa a favor del cuerpo, nunca en contra de los síntomas, ordenando y acelerando el proceso de curación del propio ser vivo.</p>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="text-muted">La homeopatía unicista es aquella que utiliza un medicamento homeopático único dirigido a curar la totalidad de los síntomas del paciente tanto en el plano físico como en el mental.</p>


                        </div>
                    </div>

                </div>
                <blockquote class="pull-ricght">"El hombre no está fragmentado en partes cada una de ellas con su enfermedad y diagnostico sino que es un todo integrado"</blockquote>



            </div>
            <br>
            <div class="well">
                <a href="http://www.homeopathy-ecch.org/">European Central Council Homeopaths</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://www.aehu.es/">Asociación Española de Homeópatas Unicistas</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://www.homeopatia-madrid.com">Risto Tapani Raihala</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://susanaaikin.com/">Susana Aikin</a>
            </div>
        </div>


    </section>
    <!-- Principios Section -->
    <section id="principios" class="bg-light-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Principios de la Homeopatía</h2>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url();?>assets/img/ley.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Ley de Similitud</h4>
                                    <h5 class="subheading">Por un lado tenemos una sustancia que administrada a una persona sana produce unos síntomas.
                            <br>Por otro lado tenemos los síntomas del enfermo.
<br>La ley de similitud nos indica que la curación se obtendrá dándole al enfermo aquella sustancia capaz de provocar los mismos síntomas en un individuo sano. Dicho de otro modo, esta ley define que el remedio mas adecuado para curar una enfermedad, es aquella sustancia que administrada a personas sanas produce los mismos síntomas que los que presenta el paciente al que se quiere curar.</h5>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Ley de la similitud, ya descubierta por Hipócrates decía que las mismas cosas que provocan un mal lo pueden curar cuando se administran en ínfimas dosis. La terapia homeopática estimula las reacciones del organismo y las hace mas eficaces para que consiga vencer la enfermedad. Es una terapia reactiva, a diferencia de la tradicional que es coercitiva.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url();?>assets/img/experimentacion.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Experimentación en el Hombre Sano</h4>
                                    <h4 class="subheading">Por lo tanto, antes de que cualquier sustancia sea administrada como remedio, hace falta que sea experimentada en personas sanas y en dosis adecuadamente bajas y repetidas mediante un proceso llamado experimentación.<br>
El conjunto de todas las experimentaciones se denominan patogenesias. Y estas forman lo que se denomina la materia medica homeopática.<br>
El libro donde están recogidos todos los síntomas y los medicamentos que producen dichos síntomas durante la experimentación se denomina repertorio.<br>
Así pues, el homeópata, para llevar a cabo la búsqueda del remedio más similar se basa en el conocimiento profundo de los principales remedios(o sea, la materia medica) y en la consulta de los repertorios.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">La homeopatía, como terapia integral, considera fundamental que la única y efectiva manera de curar una dolencia es aumentar la salud de la persona que la padece.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url();?>assets/img/dosis.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Dosis Infinitesimal</h4>
                                    <h4 class="subheading">La homeopatía, creada como tal ciencia por el médico alemán S. Hahnemman hacia 1790, se puede definir como el método terapéutico que aplica clínicamente la ley de similitud utilizando sustancias medicamentosas en dosis infinitesimales. <br>
Para elaborar un medicamento homeopático se diluye la tintura madre y se agita. La dilución hace que desaparezca cualquier efecto adverso de la sustancia, que podría ser dañina en estado puro. Por ejemplo, la belladona es una planta cuyos efectos pueden ser mortales, pero al estar diluida hasta dosis infinitesimales, su acción es diferente, de manera que aquella sustancia que, en dosis altas es capaz de producir una serie de síntomas, es también capaz de curar esos mismos síntomas cuando se administra en dosis infinitesimales, pues tiene la fuerza suficiente como para estimular la acción curativa del cuerpo en la dirección adecuada sin dañarlo.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Los medicamentos pueden estar más o menos diluidos. Cuando un medicamento está poco diluido se dice que la potencia es baja, mientras que si está muy diluido se dice que la potencia es alta. Cuanto más alta sea la potencia, más amplio es el efecto. Por este motivo, las bajas potencias se usan para tratar síntomas físicos específicos y las potencias más altas se utilizan para tratar afecciones crónicas que afectan a toda la persona, con síntomas tanto psíquicos como físicos. Es lo que se llama el remedio constitucional.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url();?>assets/img/medicamento.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>El Medicamento Único</h4>
                                    <h4 class="subheading">¿Pueden darse varios remedios a la vez al mismo enfermo? Esta pregunta ha agitado mucho el  mundo homeopático dividiéndolo en UNICISTAS, que dan según las recomendaciones del mismo Hahnemann, solamente un remedio.
                                        <br>En PLURALISTAS, que dan varios remedios complementarios. <br>Y en COMPLEJISTAS, que proponen formulas preparadas que contienen numerosos remedios.<br>
Hay que comprender que el mensaje homeopático es de orden energético, como el trasmitido por nuestra propia voz. Si nos habla una persona comprendemos fácilmente lo que nos dice; si varias personas hablan juntas, la cosa se vuelve más confusa y si es una multitud se produce un guirigay. Ello explica que no se puedan tomar a la vez todos los remedios de un maletín homeopático para curar todas las enfermedades.
Hay que individualizar cada caso y administrar el remedio unico.</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Hahnneman enuncio la ley de los similares <em>Similia Similibus Curentur</em> en 1796 sentando las bases de la homeopatia.
                                        <br>Se dio cuenta de la importancia de no mezclar sustancias y trabajar con remedios únicos como única forma de saber cómo y dónde actúa cada uno de ellos.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo base_url();?>assets/img/camino.jpg" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Como Section -->
    <section id="como">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">¿Cómo es una consulta?</h2>
                    <h3 class=" text-muted section-subheading">Las preguntas que durante una entrevista un homeópata unicista realiza, van dirigidas a saber cuál es el origen del sufrimiento o dolencia, conocer al paciente y encontrar el remedio homeopático que más se ajuste a las caracteristicas de su enfermedad.</h3>


                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <p class="text-muted">El homeópata tendrá en cuenta su historia médica, su aspecto y complexión fisica, sus preferencias y aversiones alimentarias, su sensibilidad al calor o al frío, como le afectan los cambios climáticos o de estación. Se interesará por sus hábitos del sueño y sus sueños.
                                <br>Se interesará especialmente por su forma de ser, si es una persona tímida o reservada o por el contrario es extrovertida y sociable. Por sus miedos. Si necesita la compañia o por el contrario busca el estar solo.
                                <br>Es importante en la consulta decir lo que uno siente espontáneamente, las cosas características que usted anhela decir; sean ellas muy generales o particulares, todo esto es de especial interés para el homeópata, poniendo de manifiesto la reacción particular a la “enfermedad” por la cual sufre.
                                <br>El tratamiento homeopático es altamente individualizado: cada persona es única, y aunque comparta un diagnóstico patológico con otros pacientes su tratamiento homeopático será con toda probabilidad diferente de los demás. Para la homeopatía unicista no existen enfermedades sino enfermos. A esto debemos añadir que en homeopatía tenemos más de 3.000 remedios en nuestra materia médica, y que por lo tanto, es imprescindible individualizar cada caso de modo que el tratamiento sea efectivo.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </section>

    <!-- Blog Section -->
    <section id="blog" class="bg-light-beige">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">El Blog de Maite</h1><br><br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">


                        <?php  if($entradas!=FALSE){
                                  foreach($entradas as $row){?>
                                    <div class="jumbotron marron">

                                        <h3 ><?php echo $row->titulo."<br>";?></h3>
                                        <h4 class="text-muted"><small><?php echo $row->fecha."<br>";?></small></h4><br><br>
                                        <?php  echo $row->cuerpo;?>
                                    </div>
                                    <?php
                                    }
                                }else  echo "No hay entradas";
                                ?><div class="btn-group" role="group" aria-label="...">
                    <?php     $n=$pb-1;
                            if($n>0){
                                echo '<a class="btn btn-blog" role="button" href='.base_url().'main_controller/paginas/'.$n."/".$pn."/".$pl.'#blog > Anterior </a>';}

                              for($i=1;$i<=$paginas_blog;$i++){

                                    ?>

                        <a  class="btn btn-blog" role="button" href=<?php echo base_url();?>main_controller/paginas/<?php echo $i."/".$pn."/".$pl;?>#blog >
                            <?php if ($pb==$i)
                                    echo '<span class="resaltado">'.$i.'</span>';
                                else echo $i;
                                   ?>
                        </a>

                    <?php
                                }
                            $n=$pb+1;
                            if($n<=$paginas_blog){
                                echo '<a class="btn btn-blog" role="button" href='.base_url().'main_controller/paginas/'.$n."/".$pn."/".$pl.'#blog > Siguiente </a>';}?>
                     </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Noticias Section -->
    <section id="noticias">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Noticias</h1><br><br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">

                        <?php if($noticias!=FALSE){
                            foreach($noticias as $row){?>


                    <div class="jumbotron">

                            <h3 class="panel-title"><?php echo $row->titular."<br>";?></h3>
                            <h4 class="text-muted"><small><?php echo $row->fecha."<br>";?></small></h4>
                            <h4 class="sinnada"><small><a href="<?php echo $row->enlace;?>">Enlace</a></small></h4>
                  <br><br>

                                 <?php  echo $row->resumen;?>

                </div>

                            <?php

                        }
                        }else  echo "No hay noticias";?>
                    <div class="btn-group" role="group" aria-label="...">
                    <?php     $n=$pn-1;
                            if($n>0){
                                echo '<a class="btn btn-noticias" role="button" href='.base_url().'main_controller/paginas/'.$pb."/".$n."/".$pl.'#noticias > Anterior </a>';}

                              for($i=1;$i<=$paginas_noticias;$i++){

                                    ?>

                        <a  class="btn btn-noticias" role="button" href=<?php echo base_url();?>main_controller/paginas/<?php echo $pb."/".$i."/".$pl;?>#noticias >
                            <?php if ($pn==$i)
                                    echo '<span class="resaltado">'.$i.'</span>';
                                else echo $i;
                                   ?>
                        </a>

                    <?php
                                }
                            $n=$pn+1;
                            if($n<=$paginas_noticias){
                                echo '<a class="btn btn-noticias" role="button" href='.base_url().'main_controller/paginas/'.$pb."/".$n."/".$pl.'#noticias > Siguiente </a>';}?>
                     </div>


                        </div>


            </div>
        </div>


    </section>
    <!-- Libros Section -->
    <section id="libros" class="bg-light-green">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">Bibliografía Recomendada</h1><br><br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">


                        <?php  if($libros!=FALSE){

                             foreach($libros as $row){?>

                    <div class="jumbotron verde">

                        <h3 class="panel-title"><?php echo $row->titulo."<br>";?></h3>
                        <h4 class="text-muted"><small><?php echo $row->autor."<br>";?></small></h4>
                        <h4 class="text-muted"><small><?php echo $row->editorial."<br>";?></small></h4>
                       <br><br>
                                 <?php  echo $row->sinopsis;?>
                        </div>
                            <?php

                        }
                        }else  echo "No hay libros que mostrar";?>
                       <div class="btn-group" role="group" aria-label="...">
                    <?php     $n=$pl-1;
                            if($n>0){
                                echo '<a class="btn btn-libros" role="button" href='.base_url().'main_controller/paginas/'.$pb."/".$pn."/".$n.'#libros > Anterior </a>';}

                              for($i=1;$i<=$paginas_libros;$i++){

                                    ?>

                        <a  class="btn btn-libros" role="button" href=<?php echo base_url();?>main_controller/paginas/<?php echo $pb."/".$pn."/".$i;?>#libros >
                            <?php if ($pl==$i)
                                    echo '<span class="resaltado">'.$i.'</span>';
                                else echo $i;
                                   ?>
                        </a>

                    <?php
                                }
                            $n=$pl+1;
                            if($n<=$paginas_libros){
                                echo '<a class="btn btn-libros" role="button" href='.base_url().'main_controller/paginas/'.$pb."/".$pn."/".$n.'#libros> Siguiente </a>';}?>
                     </div>
                </div>



            </div>
        </div>


    </section>
    <!--Contacto-->
    <section id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Información Contacto</h2>
                    <br>
                </div>

                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="panel panel-info ">
                            <div class="panel-body">
                                <address>
                                    <br><br><br><h3><strong>Maite Inglada Mulet</strong><br></h3>
                                        <p>Calle San Roque nº 21 7º Piso<br>
                                        12004 Castellón<br>
                                        <abbr title="Phone">Tel:</abbr> 964 24 25 21<br>616 99 61 24</p>
                                        <a class="correo" href="mailto:#">maiteinglada@gmail.com</a>
                                </address>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <div id="map_canvas"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>

                <div class="col-lg-12">
                        <?php
                            echo form_open("main_controller/send_email#mensaje");?>
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <?php echo form_label("", "nombre");

                                            $data=array(
                                                "name"=>"nombre",
                                                "id"=>"nombre",
                                                "value"=>set_value("nombre"),
                                                "class"=>"form-control",
                                                'placeholder' => 'Introduce aquí tu nombre',
                                            );
                                            echo form_input($data);?>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                       <?php echo form_label("", "correo");

                                            $data=array(
                                                "name"=>"correo",
                                                "id"=>"correo",
                                                "value"=>set_value("correo"),
                                                "class"=>"form-control",
                                                'placeholder' => 'Introduce aquí tu correo electrónico',
                                            );
                                            echo form_input($data);?>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php echo form_label("", "mensaje");

                                            $data=array(
                                                "name"=>"mensaje",
                                                "id"=>"mensaje",
                                                "value"=>set_value("mensaje"),
                                                "class"=>"form-control",
                                                'placeholder' => 'Introduce aquí tu mensaje',
                                            );
                                            echo form_textarea($data);?>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div id="mensaje" class="col-lg-12 text-center">

                                   <?php echo validation_errors();?>
                                    <div class='panel panel-info'>
                                    <?php echo $message;?></div><br>
                                     <?php echo form_submit("Submit", "Enviar",'class="btn btn-xl"') ; ?>
                                </div>
                            </div>
                         <?php echo form_close();?>
                    </div>

            </div>


        </div>
    </section>
    <footer class="bg-light-gray">
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
                    </ul><br>
                </div>
            </div>
        </div>
        <p><a href="<?php echo base_url();?>Login_controller">¿Eres administrador?</a></p>
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
