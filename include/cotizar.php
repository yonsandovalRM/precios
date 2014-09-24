<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Agrolab</title>

    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/estilo.css" rel="stylesheet"/>
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="suelos.html">Suelos</a></li>
                    <li><a href="foliar.html">Tejidos vegetales</a></li>
                    <li><a href="frutos.html">Frutos</a></li>
                    <li><a href="aguas.html">Aguas</a></li>
                    <li><a href="fito.html">Fitopatológicos</a></li>
                    <li><a href="fertilizantes.html">Fertilizantes orgánicos / Kits / Otros</a></li>
                    <li class="divider"></li>
                    <li><a href="precios.html">Precios</a></li>
                    <li class="divider"></li>
                    <li><a href="include/cotizar.php">Cotizar</a></li>
                </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="...">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="include/login.php">Iniciar Sesión</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Idioma <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.html">Español</a></li>
            <li><a href="en/index.html">English</a></li>
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
                        <h3 class="bienvenida">Bienvenid@ a Agrolab.cl</h3>
                        <h5 class="bienvenida">Eficiencia, rapidez y profesionalismo, al servicio de sus clientes</h5>
                            <hr class="hrmedio">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                            <video class="video-responsive" controls>
                              <source src="video/corporativo2.mp4" type="video/mp4">
                              <source src="video/corporativo2.ogv" type="video/ogg">
                                Su navegador no es compatible con HTML 5 Video
                            </video>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <p>Agrolab, es un laboratorio  privado con una vasta experiencia en  distintos tipos de análisis agrícolas.<br><br>Nuestros servicios constan de dos áreas principales</p>
                            <ul class="outicon2">
                                <li><span class="glyphicon glyphicon-chevron-right"></span> Diagnóstico Nutricional</li>
                                <li><span class="glyphicon glyphicon-chevron-right"></span> Diagnóstico Fitopatológico</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <p>Entre los análisis que ofrecemos a nuestros clientes se encuentran:</p>
                            <ul class="outicon2">
                               <li><span class="glyphicon glyphicon-ok"></span>  Análisis de Tejidos Vegetales</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Foliar-Frutos-Raices</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Análisis de Suelo</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Análisis de Agua</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Análisis de Fertilizantes Orgánicos</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Compost-Sustratos-Guanos-Etc</li>
                               <li><span class="glyphicon glyphicon-ok"></span> Análisis Fitopatológico</li>
                           </ul>
                        </div>
                    </div>
                    <div class="espacio"></div>
                </div>
                <div class="col-xs-12" id="bajo">
                    <div class="espacio"></div>
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <img src="img/personal/blancaluz.png" class="img-responsive" alt="Agrolab">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <h3>Blancaluz Pinilla</h3>
                            <p>Gerente Técnica <br>Área Fitopatología</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <img src="img/personal/rosita.png" class="img-responsive" alt="Agrolab">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <h3>Rosita Espinoza</h3>
                            <p>Gerente Técnica <br>Área Nutricional</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-4">
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <img src="img/personal/claudia.png" class="img-responsive" alt="Agrolab">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <h3>Claudia Corvalán</h3>
                            <p>Coordinadora <br>Área Fitopatología</p>
                        </div>
                    </div>
                    <div class="espacio"></div>
                </div>
            </div>
       
    </div>
	<footer>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5>SERVICIOS</h5>
                    <ul class="outicon">
                        <li><a href="suelos.html">Suelos</a></li>
                        <li><a href="foliar.html">Tejidos vegetales</a></li>
                        <li><a href="frutos.html">Frutos</a></li>
                        <li><a href="aguas.html">Aguas</a></li>
                        <li><a href="fito.html">Fitopatológicos</a></li>
                        <li><a href="fertilizantes.html">Fertilizantes orgánicos / Kits / Otros</a></li>
                    </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5>ACERCA DE</h5>
                    <ul class="outicon">
                        <li><a href="pautas.html">Pautas de muestreo</a></li>
                        <li><a href="formularios.html">Formularios</a></li>
                        <li><a href="metodos.html">Envío de muestras</a></li>
                        <li><a href="acreditaciones.html">Acreditaciones</a></li>
                        <li><a href="precios.html">Precios de análisis</a></li>
                    </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5>CONTACTO</h5>
                    <ul class="listafootercontacto">
                        <li><span class="glyphicon glyphicon-map-marker">&nbsp;</span>José Domingo Cañas 2914, Ñuñoa, Santiago</li>
                        <li><span class="glyphicon glyphicon-phone-alt">&nbsp;</span>(02) 2 225 8087</li>
                        <li><span class="glyphicon glyphicon-envelope">&nbsp;</span><a href="mailto:laboratorio@agrolab.cl"> laboratorio@agrolab.cl</a></li>
                    </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5>ACREDITACIÓN</h5>
                <div class="col-xs-6">
                    <ul class="listaimagenfooter">
                        <li><a href="#"><img class="img-responsive imagepd"src="img/acreditacion/fch.jpg" alt="Acreditación Agrolab"></a></li>
                        <li><a href="#"><img class="img-responsive imagepd"src="img/acreditacion/cmq.jpg" alt="Acreditación Agrolab"></a></li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <ul class="listaimagenfooter">
                        <li><a href="#"><img class="img-responsive imagepd"src="img/acreditacion/inn.jpg" alt="Acreditación Agrolab"></a></li>
                        <li><a href="#"><img class="img-responsive imagepd"src="img/acreditacion/sag.jpg" alt="Acreditación Agrolab"></a></li>
                    </ul>
                </div>
                   
                
            </div>
        </div>

    </footer>
<div id="copy"><span class="glyphicon glyphicon-copyright-mark"></span> Todos Los Derechos Reservados  -  Agrolab Ltda. 2014<i class="desarrollador">Desarrollado por: <a href="http://www.servicioslinksoft.cl">Linksoft</a></i></div>
</body>
</html> 