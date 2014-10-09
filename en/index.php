<?php

/*para que el programa funcione requerimos obligatoriamente
y de forma estricta que se incluya el fichero class.php*/
require_once("include/class.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Agrolab</title>

    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/estilo.css" rel="stylesheet"/>
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- NOTICIAS -->
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.vticker.js"></script>
    <!-- NOTICIAS -->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo.png"  alt="logo agrolab" class="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="nosotros.php">About Us</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Analysis <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="suelos.php">Suelos</a></li>
                    <li><a href="foliar.php">Tejidos vegetales</a></li>
                    <li><a href="frutos.php">Frutos</a></li>
                    <li><a href="aguas.php">Aguas</a></li>
                    <li><a href="fito.php">Fitopatológicos</a></li>
                    <li><a href="fertilizantes.php">Fertilizantes orgánicos / Kits / Otros</a></li>
                    <li class="divider"></li>
                    <li><a href="formularios.php">Formularios</a></li>
                    <li><a href="enviomuestras.php">Envío de muestras</a></li>
                    <li><a href="pautasdemuestreo.php">Pautas de Muestreo</a></li>
                    <li><a href="precios.php">Precios</a></li>
                    <li class="divider"></li>
                    <li><a href="include/cotizar.php">Cotizar</a></li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-left" role="search" method="get" action="http://www.google.cl/search">
        <div class="form-group">
            <input type="search" name="q" class="form-control" placeholder="Search..." required="required">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
        <input type="hidden" name="sitesearch" value="http://www.agrolab.cl">
        </form>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="include/login.php">Log In</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../index.php">Español</a></li>
            <li><a href="en/index.php">English</a></li>
          </ul>
        </li>
        </ul>
        </div><!-- /.navbar-collapse -->
        </nav>
    </header>
    <div id="principal">
                <section id="miSlide" class="carousel slide">
                    
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/banner-rotator/1.jpg" class="adaptar" alt="Agrolab Banner 1">

                        </div>
                        <div class="item">
                            <img src="img/banner-rotator/3.jpg" class="adaptar" alt="Agrolab Banner 2">

                        </div>
                        <div class="item">
                            <img src="img/banner-rotator/2.jpg" class="adaptar" alt="Agrolab Banner 3">

                        </div>
                    </div>
                   
                    <script>
                    $('.carousel').carousel({
                        interval: 6000
                    })
                    </script>
                </section>
            <div class="row">
                <div class="col-xs-12" id="medio">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="bienvenida">Welcome to <strong>Agrolab.cl</strong></h3>
                        <h4 class="bienvenida">Efficiency, speed and professionalism, serving customers</h4>
                            <hr class="hrmedio">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                            <video class="video-responsive" controls>
                              <source src="video/corporativo2.mp4" type="video/mp4">
                              <source src="video/corporativo.ogv" type="video/ogg">
                                Su navegador no es compatible con HTML 5 Video
                            </video>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <p>Agrolab is a private laboratory with extensive experience in various types of agricultural analysis.<br><br>Nuestros servicios constan de dos áreas principales</p>
                            <ul class="outicon2">
                                <li><span class="glyphicon glyphicon-chevron-right"></span> Nutritional Diagnosis</li>
                                <li><span class="glyphicon glyphicon-chevron-right"></span> Phytopathologic Diagnosis</li>
                            </ul>
                            
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <p>Among the analyzes that we offer our clients include:</p>
                            <ul class="outicon2">
                               <li><span class="glyphicon glyphicon-ok"></span> Plant Tissue Testing</li>
                               <li> Foliar-Frutos-Raíces</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Soil Analysis</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Water Analysis</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Analysis of Organic Fertilizers</li>
                               <li> Compost-Sustratos-Guanos-Etc</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Phytopathologic Analysis</li>
                           </ul>
                        </div>
                    </div>
                    <div class="espacio"></div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <img src="img/personal/blancaluz.png" class="img-responsive circulo" alt="Agrolab">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <h3>Blancaluz Pinilla</h3>
                            <p>Technical Manager <br>Phytopathology Area</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <img src="img/personal/rosita.png" class="img-responsive circulo" alt="Agrolab">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <h3>Rosita Espinoza</h3>
                            <p>Technical Manager <br>Nutrition Area</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <img src="img/personal/claudia.png" class="img-responsive circulo" alt="Agrolab">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <h3>Claudia Corvalán</h3>
                            <p>Coordinator <br>Phytopathology Area</p>
                        </div>
                    </div>
                    
                </div>
            </div>
       
    </div>
    <footer>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-2">
                <h5>SERVICES</h5>
                    <ul class="outicon">
                        <li><a href="suelos.php">Soil</a></li>
                        <li><a href="foliar.php">Plant tissues</a></li>
                        <li><a href="frutos.php">Fruits</a></li>
                        <li><a href="aguas.php">Water</a></li>
                        <li><a href="fito.php">Phytopathology</a></li>
                        <li><a href="fertilizantes.php">Organic / Kits / Other Fertilizers</a></li>
                    </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <h5>ABOUT</h5>
                    <ul class="outicon">
                        <li><a href="pautasdemuestreo.php">Sampling patterns</a></li>
                        <li><a href="formularios.php">Forms</a></li>
                        <li><a href="enviomuestras.php">Shipment of samples</a></li>
                        <li><a href="nosotros.php">Accreditations</a></li>
                        <li><a href="precios.php">Pricing analysis</a></li>
                    </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <h5>CONTACT</h5>
                    <ul class="listafootercontacto">
                        <li><span class="glyphicon glyphicon-map-marker">&nbsp;</span>José Domingo Cañas 2914, Ñuñoa, Santiago</li>
                        <li><span class="glyphicon glyphicon-phone-alt">&nbsp;</span>(02) 2 225 8087</li>
                        <li><span class="glyphicon glyphicon-envelope">&nbsp;</span><a href="mailto:laboratorio@agrolab.cl"> laboratorio@agrolab.cl</a></li>
                    </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5>NEWS</h5>
                <div id="noticias">
                    <ul>
                    <?php
                        $noticias = new Noticias();
                        $noticias=$noticias->get_noticias(1);

                        for($i=0;$i<sizeof($noticias);$i++){
                            echo '<li>';
                            echo '<h5>'.$noticias[$i]["TITULO"].'</h5>';
                            echo '<p>'.$noticias[$i]["CONTENIDO"].'</p>';
                            echo '</li>';
                        }
                    ?>
                    </ul>
                </div>
                <script>
                    $(function(){
                        $('#noticias').vTicker();
                    });
                </script>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5>ACCREDITATION</h5>
                <div class="col-xs-6">
                    <ul class="listaimagenfooter">
                        <li><a href="http://www.fundacionchile.com"><img class="img-responsive imagepd" src="img/acreditacion/fch.jpg" alt="Acreditación Agrolab"></a></li>
                        <li><a href="#"><img class="img-responsive imagepd" src="img/acreditacion/cmq.jpg" alt="Acreditación Agrolab"></a></li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <ul class="listaimagenfooter">
                        <li><a href="http://www.inn.cl"><img class="img-responsive imagepd" src="img/acreditacion/inn.jpg" alt="Acreditación Agrolab"></a></li>
                        <li><a href="http://www.sag.cl"><img class="img-responsive imagepd" src="img/acreditacion/sag.jpg" alt="Acreditación Agrolab"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<div id="copy"><span class="glyphicon glyphicon-copyright-mark"></span> Todos Los Derechos Reservados  -  Agrolab Ltda. 2014<i class="desarrollador">Desarrollado por: <a href="http://www.servicioslinksoft.cl">Linksoft</a></i></div>
</body>
</html> 