<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta character set -->
        <meta charset="utf-8">
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SimpoWeb</title>		
        <!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">

        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS
        ================================================== -->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/theme.css">
        <!--Contacto Form-->

        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/font-face.css"> 
        <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>


    </head>

    <body id="body">

        <!-- preloader -->
        <div id="preloader">
            <div class="loder-box">
                <div class="battery"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="index.php#body">Inicio</a>
                    </h1>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul  class="nav navbar-nav">

                        <li><a href="index.php#service">Servicios</a></li>
                        <li><a href="index.php#portafolio">Portfolio</a></li>
                        <li><a href="index.php#contact">Contacto</a></li>
                        <li><a href="index.php#footer">Suscríbete</a></li>
                        <li><a href="preguntas_freguentes.php">FAQ'S</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->

        <main class="site-content" role="main">
            <section id="who" class="who2 section">

                <br>
                <br>
                <div class="benefits text-center">
                    <div class="item  text-center">
                         <?php
                                            include "config.php";
                                            error_reporting(E_ALL);
                                            $res = $mysqli->query("SELECT * from biografia ");
                                            $mysqli->close();

                                            while ($row = $res->fetch_assoc()):
                                                $id = $row ['id'];
                                                $nombre = $row ['nombre'] .'&nbsp;'. $row['apellido_p'] .'&nbsp;'. $row['apellido_m']  ;
                                               
                                                ?>

                        <section class="aboutus" id="aboutus">
                            <div class="container">
                                <div class="heading text-center">
                                    <h2>Acerca de Nosotros</h2>
                                </div>			
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="papers text-center">
                                            <img src="../simpoweb/administrator/gallery/album/biography/<?php echo $row['ruta']?>" alt="">
                                            <h4 class="notopmarg nobotmarg"><?php echo $row['nombre']?></h4>
                                            <p style="text-align: justify">
                                                <?php echo utf8_decode(  $row['descripcion'])?>
                                            </p>
                                        </div>
                                    </div>
<!--                                    <div class="col-md-6">
                                        <div class="papers text-center">
                                            <img src="img/customer_person_people_woman_you_1627.png"  alt=""><br/>
                                            <h4 class="notopmarg nobotmarg">Adelina Pérez Rosas</h4>
                                            <p style="text-align: justify">
                                                Coach, licenciada en Administración de empresas y maestra en ciencias con

                                                especialidad en administración y desarrollo de la educación. Es coordinadora General del

                                                Simposium Internacional: “Aportaciones de las universidades a la docencia, la investigación, la

                                                tecnología y el desarrollo” que se lleva a cabo anualmente en el Instituto Politécnico Nacional, y es

                                                coordinadora general del seminario de actualización profesional: “Coaching ejecutivo estratégico

                                                en la industria” que se imparte en cuatro ocasiones al año. Es maestra de Capacitación y

                                                adiestramiento, Desarrollo de habilidades de liderazgo y Redacción ejecutiva. Ha publicado

                                                artículos en revistas científicas y presentado aportaciones en congresos nacionales e

                                                internacionales. Proporciona servicios de detección de necesidades y capacitación a las empresas.
                                            </p>
                                        </div>
                                    </div>-->
                                </div>
<!--                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="papers text-center">
                                            <img src="img/customer_person_people_man_you_1625.png" alt=""><br/>
                                            <h4 class="notopmarg nobotmarg">Salvador Alejandro Pérez Rosas</h4>
                                            <p style="text-align: justify">
                                                Psicólogo de la Universidad del Valle de México donde obtuvo

                                                el mejor promedio de su generación y es Master practitioner en PNL del Centro de Asesoría

                                                Bertrand Russell. Posee un posgrado en psicoanálisis, es psicoterapeuta psicoanalítico y entrena y

                                                da terapia en inglés y en español. Tiene numerosas publicaciones de artículos relacionados con su

                                                campo del conocimiento y entrena en desarrollo de habilidades de Programación Neurolingüística.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="papers text-center">
                                            <img src="img/customer_person_people_man_you_1625.png" alt=""><br/>
                                            <h4 class="notopmarg nobotmarg">Fabián David Martínez Valdés</h4>
                                            <p style="text-align: justify">
                                                Licenciado en Economía de la Universidad Autónoma

                                                Metropolitana y maestro en ciencias en matemáticas aplicadas. Es docente de Economía

                                                Industrial, Matemáticas superiores, Liderazgo y Negociación. Obtuvo el mejor promedio de su

                                                generación y se especializa en econometría para la evaluación de índices de calidad y

                                                productividad en las empresas, así como la valoración de entornos socioeconómicos. Es coautor

                                                del libro “Modelado de fenómenos económicos y financieros: una visión contemporánea” editado

                                                por la Universidad de las Américas.
                                            </p>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </section>
                                <?php
                            endwhile;
                            ?>

                    </div><!--l//item-inner--> 


                </div>     



            </section>









        </main>



        <!-- Essential jQuery Plugins
        ================================================== -->
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Google Map API -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
        <!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
        <!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>
