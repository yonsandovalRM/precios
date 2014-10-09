<?php

/*para que el programa funcione requerimos obligatoriamente
y de forma estricta que se incluya el fichero class.php*/
require_once("include/class.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <META HTTP-EQUIV="REFRESH" CONTENT="25">
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
    <script type="text/javascript">
        $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
        })
    </script>
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
          <h6><a href="index.php">Home</a><i class="glyphicon glyphicon-chevron-right"></i> Análisis <i class="glyphicon glyphicon-chevron-right"></i><span> Precios</span></h6>
        </div>
        <div id="contenido">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Listado de precios</h3>
                    <h6>Los precios especificados en nuestro sitio web no incluyen IVA</h6>
                    <section class="tablaprecios">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#foliar" data-toggle="tab">Tejidos Vegetales</a></li>
                            <li><a href="#frutos" data-toggle="tab">Frutos</a></li>
                            <li><a href="#aguas" data-toggle="tab">Aguas</a></li>
                            <li><a href="#suelos" data-toggle="tab">Suelos</a></li>
                            <li><a href="#fito" data-toggle="tab">Fitopatológicos</a></li>
                            <li><a href="#otros" data-toggle="tab">Fert Org/Kits/Otros</a></li>
                        </ul>

                        <!-- Tab paneles -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="foliar">
                                <br>
                                <div class="impresion">
                                    <h6 class="botonimprimir"><i class="glyphicon glyphicon-save"></i><a href="assets/tejidosvegetales.pdf" download="PreciosAnalisisTejidosVegetales" target="_blank"> Descargar</a>  |  <i class="glyphicon glyphicon-print"></i><a href="javascript:window.print()"> Imprimir</a></h6>
                                </div>
                                <table class="table table-hover margen">
                                    <thead>
                                        <tr class="titulo">
                                            <th class="codigo">Código</th>
                                            <th>Descripción</th>
                                            <th class="valor">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Fertilidad</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(1);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Fertilidad Yemas Vides</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(2);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Reservas</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(3);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Raices, Tallos, Ramas, Raquis, etc.</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(4);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="frutos">
                                <br>
                                <div class="impresion">
                                    <h6 class="botonimprimir"><i class="glyphicon glyphicon-save"></i><a href="assets/frutos.pdf" download="PreciosAnalisisFrutos" target="_blank"> Descargar</a>  |  <i class="glyphicon glyphicon-print"></i><a href="javascript:window.print()"> Imprimir</a></h6>
                                </div>
                                <table class="table table-hover margen">
                                    <thead>
                                        <tr class="titulo">
                                            <th class="codigo">Código</th>
                                            <th>Descripción</th>
                                            <th class="valor">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Frutos, Bayas, Pulpas, Cáscaras, etc.</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(5);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="aguas">
                                <br>
                                <div class="impresion">
                                    <h6 class="botonimprimir"><i class="glyphicon glyphicon-save"></i><a href="assets/agua.pdf" download="PreciosAnalisisAgua" target="_blank"> Descargar</a>  |  <i class="glyphicon glyphicon-print"></i><a href="javascript:window.print()"> Imprimir</a></h6>
                                </div>
                                <table class="table table-hover margen">
                                    <thead>
                                        <tr class="titulo">
                                            <th class="codigo">Código</th>
                                            <th>Descripción</th>
                                            <th class="valor">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Análisis Físico-Químico</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(6);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Análisis Bacteriológico</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(7);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Análisis Agrupados</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(8);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="suelos">
                                <br>
                                    <div class="impresion">
                                        <h6 class="botonimprimir"><i class="glyphicon glyphicon-save"></i><a href="assets/suelos.pdf" download="PreciosAnalisisSuelos" target="_blank"> Descargar</a>  |  <i class="glyphicon glyphicon-print"></i><a href="javascript:window.print()"> Imprimir</a></h6>
                                    </div>
                                    <table class="table table-hover margen">
                                        <thead>
                                            <tr class="titulo">
                                                <th class="codigo">Código</th>
                                                <th>Descripción</th>
                                                <th class="valor">Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="subtitulo">
                                                <td></td>
                                                <td colspan="2">Fertilidad</td>
                                            </tr>
                                            <?php
                                                $analisis = new Analisis();
                                                $analisis=$analisis->get_analisis(9);

                                                for($i=0;$i<sizeof($analisis);$i++){
                                                    echo '<tr>';
                                                    echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                    echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                    echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                    echo '</tr>';
                                                }
                                            ?>
                                            <tr class="subtitulo">
                                                <td></td>
                                                <td colspan="2">Fertilidad - Cationes intercambiable. - CIC - Micronutrientes</td>
                                            </tr>
                                            <?php
                                                $analisis = new Analisis();
                                                $analisis=$analisis->get_analisis(10);

                                                for($i=0;$i<sizeof($analisis);$i++){
                                                    echo '<tr>';
                                                    echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                    echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                    echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                    echo '</tr>';
                                                }
                                            ?>
                                            <tr class="subtitulo">
                                                <td></td>
                                                <td colspan="2">Fertilidad - Salinidad Completa</td>
                                            </tr>
                                            <?php
                                                $analisis = new Analisis();
                                                $analisis=$analisis->get_analisis(11);

                                                for($i=0;$i<sizeof($analisis);$i++){
                                                    echo '<tr>';
                                                    echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                    echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                    echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                    echo '</tr>';
                                                }
                                            ?>
                                            <tr class="subtitulo">
                                                <td></td>
                                                <td colspan="2">Fertilidad completa + Físicos</td>
                                            </tr>
                                            <?php
                                                $analisis = new Analisis();
                                                $analisis=$analisis->get_analisis(12);

                                                for($i=0;$i<sizeof($analisis);$i++){
                                                    echo '<tr>';
                                                    echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                    echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                    echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                    echo '</tr>';
                                                }
                                            ?>
                                            <tr class="subtitulo">
                                                <td></td>
                                                <td colspan="2">Fertilidad (Maíz)</td>
                                            </tr>
                                            <?php
                                                $analisis = new Analisis();
                                                $analisis=$analisis->get_analisis(13);

                                                for($i=0;$i<sizeof($analisis);$i++){
                                                    echo '<tr>';
                                                    echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                    echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                    echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                    echo '</tr>';
                                                }
                                            ?>
                                            <tr class="subtitulo">
                                                <td></td>
                                                <td colspan="2">Metales totales - Carbonatos</td>
                                            </tr>
                                            <?php
                                                $analisis = new Analisis();
                                                $analisis=$analisis->get_analisis(14);

                                                for($i=0;$i<sizeof($analisis);$i++){
                                                    echo '<tr>';
                                                    echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                    echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                    echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                    echo '</tr>';
                                                }
                                            ?>
                                            <tr class="subtitulo">
                                                <td></td>
                                                <td colspan="2">Físicos agrupados</td>
                                            </tr>
                                            <?php
                                                $analisis = new Analisis();
                                                $analisis=$analisis->get_analisis(15);

                                                for($i=0;$i<sizeof($analisis);$i++){
                                                    echo '<tr>';
                                                    echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                    echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                    echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                    echo '</tr>';
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                            </div>
                            <div class="tab-pane" id="fito">
                                <br>
                                <div class="impresion">
                                    <h6 class="botonimprimir"><i class="glyphicon glyphicon-save"></i><a href="assets/fitopatologicos.pdf" download="PreciosAnalisisFitopatologicos" target="_blank"> Descargar</a>  |  <i class="glyphicon glyphicon-print"></i><a href="javascript:window.print()"> Imprimir</a></h6>
                                </div>
                                <table class="table table-hover margen">
                                    <thead>
                                        <tr class="titulo">
                                            <th class="codigo">Código</th>
                                            <th>Descripción</th>
                                            <th class="valor">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Análisis</td>
                                        </tr>
                                        <tr>
                                            <td>7302</td>
                                            <td>Diagnóstico Fitopatológico (Suelo, Agua, Frutos, Tejidos)</td>
                                            <td>$ 35.000</td>
                                        </tr>
                                        <tr>
                                            <td>7302</td>
                                            <td>Incubación de muestras de frutas (Cámara húmeda)</td>
                                            <td>$ 35.000</td>
                                        </tr>
                                        <tr>
                                            <td>7304</td>
                                            <td>Resistencia de hongos a fungicidas (1 ingrediente activo, 1 microorganismo)</td>
                                            <td>$ 250.000</td>
                                        </tr>
                                        <tr>
                                            <td>7314</td>
                                            <td>Detección precoz de enfermedades : Vides, Carozos, Pomáceas y Kiwis (Flores y Frutos)</td>
                                            <td>$ 31.800</td>
                                        </tr>
                                        <tr>
                                            <td>7316</td>
                                            <td>Recuento de colonias en suelos e identificación de microorganismos</td>
                                            <td>$ 45.000</td>
                                        </tr>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Otros servicios (Consulte por cotización)</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Prospección y monitoreos en líneas de selección de frutas, cámaras de guarda y aguas de lavado</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Evaluación de eficiencia de fungicidas en pruebas "in vitro", "in vivo" y ensayos de campo.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Asesorías, muestreos y diagnósticos en terreno.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Inoculos de hongos fitopatogenos</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Capacitación del personal en higiene de procesos de plantas embaladoras de frutas.</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Cursos de capacitación en identificación y diagnóstico de pudriciones de postcosecha.</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="otros">
                                <br>
                                <div class="impresion">
                                    <h6 class="botonimprimir"><i class="glyphicon glyphicon-save"></i><a href="assets/otros.pdf" download="PreciosAnalisisotros" target="_blank"> Descargar</a>  |  <i class="glyphicon glyphicon-print"></i><a href="javascript:window.print()"> Imprimir</a></h6>
                                </div>
                                <table class="table table-hover margen">
                                    <thead>
                                        <tr class="titulo">
                                            <th class="codigo">Código</th>
                                            <th>Descripción</th>
                                            <th class="valor">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Fertilizantes Orgánicos</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(16);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Kits</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(17);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                        <tr class="subtitulo">
                                            <td></td>
                                            <td colspan="2">Nemátodos</td>
                                        </tr>
                                        <?php
                                            $analisis = new Analisis();
                                            $analisis=$analisis->get_analisis(18);

                                            for($i=0;$i<sizeof($analisis);$i++){
                                                echo '<tr>';
                                                echo '<td>'.$analisis[$i]["CODIGO"].'</td>';
                                                echo '<td>'.$analisis[$i]["DESCRIPCION"].'</td>';
                                                echo '<td>$ '.number_format($analisis[$i]["PRECIO"]).'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
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