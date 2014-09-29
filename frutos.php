<?php

/*para que el programa funcione requerimos obligatoriamente
y de forma estricta que se incluya el fichero class.php*/
require_once("include/class.php");

?>
<!DOCTYPE html>
<html lang="es">
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
            <li><a href="index.php">Home</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Análisis <span class="caret"></span></a>
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
            <input type="search" name="q" class="form-control" placeholder="ingrese su búsqueda" required="required">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
        <input type="hidden" name="sitesearch" value="http://www.agrolab.cl">
        </form>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="include/login.php">Iniciar Sesión</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Idioma <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php">Español</a></li>
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
        <div id="navegacion">
          <h6><a href="index.php">Home</a><i class="glyphicon glyphicon-chevron-right"></i> Análisis <i class="glyphicon glyphicon-chevron-right"></i><span> Frutos</span></h6>
        </div>
        <div id="contenido">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Frutos</h3>
                    <div class="col-xs-12">
                        <br>
                        <p>El análisis de muestras de tejidos de distintas partes de las plantas es revelador de su condición en un momento dado y una guía para el manejo eficiente.</p>
                    </div>
                    <div class="col-xs-9">    
                        <br>
                        <div class="cajaazul">
                            <p>Contenido de nutrientes y materia seca Bayas acuosas – Bitter Pit – Deformación de frutos por desorden nutricional, etc.</p>
                        </div>
                        <br>
                        <div class="goto">
                            <ul>
                                <li><a href="pautasdemuestreo.php">Ir a <strong>Pautas de muestreo</strong></a></li>
                                <li><a href="precios.php">Ir a <strong>Precios</strong></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <img class="img-responsive img-thumbnail" src="img/analisis/fruto.jpg" alt="">
                        <img class="img-responsive img-thumbnail" src="img/analisis/fruto2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<footer>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-2">
                <h5>SERVICIOS</h5>
                    <ul class="outicon">
                        <li><a href="suelos.php">Suelos</a></li>
                        <li><a href="foliar.php">Tejidos vegetales</a></li>
                        <li><a href="frutos.php">Frutos</a></li>
                        <li><a href="aguas.php">Aguas</a></li>
                        <li><a href="fito.php">Fitopatológicos</a></li>
                        <li><a href="fertilizantes.php">Fertilizantes orgánicos / Kits / Otros</a></li>
                    </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <h5>ACERCA DE</h5>
                    <ul class="outicon">
                        <li><a href="pautasdemuestreo.php">Pautas de muestreo</a></li>
                        <li><a href="formularios.php">Formularios</a></li>
                        <li><a href="enviomuestras.php">Envío de muestras</a></li>
                        <li><a href="nosotros.php">Acreditaciones</a></li>
                        <li><a href="precios.php">Precios de análisis</a></li>
                    </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <h5>CONTACTO</h5>
                    <ul class="listafootercontacto">
                        <li><span class="glyphicon glyphicon-map-marker">&nbsp;</span>José Domingo Cañas 2914, Ñuñoa, Santiago</li>
                        <li><span class="glyphicon glyphicon-phone-alt">&nbsp;</span>(02) 2 225 8087</li>
                        <li><span class="glyphicon glyphicon-envelope">&nbsp;</span><a href="mailto:laboratorio@agrolab.cl"> laboratorio@agrolab.cl</a></li>
                    </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5>NOTICIAS</h5>
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
                <h5>ACREDITACIÓN</h5>
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