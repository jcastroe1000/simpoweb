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
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <link href="css_portafolio/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="css_portafolio/jcarousel.css" rel="stylesheet" />
        <link href="css_portafolio/flexslider.css" rel="stylesheet" />
        <link href="css_portafolio/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">

        <!-- Theme skin -->
        <link href="css_portafolio/default.css" rel="stylesheet" />

        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="css/main.css">
        <!--Contacto Form-->


        <link rel="stylesheet" href="css/styles.css">

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
           
          

            <section id="content">
                
                
                
                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col-lg-12">

                            <div class="clearfix">
                                
                            </div>
                            <div class="row">
                                
                                <section id="projects">
                                    <div class="heading text-center">
                                        <h2 style="padding-top: 5%">Diplomados</h2>
                                </div>
                                    
                                    <ul id="thumbs" class="portfolio">
                                        <?php
                                            include "config.php";
                                            error_reporting(E_ALL);
                                            $res = $mysqli->query("SELECT id,nombre,resumen,ruta from registro_eventos where seccion= 'diplomado' ");
                                            $mysqli->close();

                                            while ($row = $res->fetch_assoc()):
                                                $id = $row ['id'];
                                                $nombre = $row ['nombre'];
                                                $resumen= $row ['resumen'];
                                               
                                                ?>
                                        <!-- Item Project and Filter Name -->
                                        
                                          <li class="item-thumbs col-lg-3" data-id="id-0" data-type="web">
                                            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                            <div style="text-align:center;font-weight:bold"><?php echo utf8_encode($nombre) ?></div>
                                              <br/>
                                                
                                              
                                            <a class="" data-fancybox-group="gallery" title="<?php echo utf8_decode($nombre) ?>" href="../simpoweb/administrator/gallery/album/diplomat/<?php echo $row['ruta']?>">
                                                
                                            </a>
                                            
                                            
                                                <img src="../simpoweb/administrator/gallery/album/diplomat/<?php echo $row['ruta']?>" 

                                                     alt="<?php echo utf8_encode($resumen) ?>">
                                                <br/>
                                                <br/>
                                                <div style="text-align: justify"><?php echo utf8_encode($resumen) ?></div>  
                                             <br/>
                                             <a href="conekta.html"><button type="button" class="btn btn-success center-block">Más Información</button></a>
                                            
                                            <!-- Thumb Image and Description -->
                                            
                                        </li>
                                        <!-- End Item Project -->
                                        <!-- Item Project and Filter Name -->
                                        <?php
                            endwhile;
                            ?>
                             
                                    </ul>
                                </section>
                            </div>
                        </div>
                    </div>
                       
                </div>
                  

            </section>    








        </main>
        <script src="js_portafolio/jquery.js"></script>
        <script src="js_portafolio/jquery.easing.1.3.js"></script>
        <script src="js_portafolio/bootstrap.min.js"></script>
        <script src="js_portafolio/jquery.fancybox.pack.js"></script>
        <script src="js_portafolio/jquery.fancybox-media.js"></script>
        <script src="js_portafolio/google-code-prettify/prettify.js"></script>
        <script src="js_portafolio/portfolio/jquery.quicksand.js"></script>
        <script src="js_portafolio/portfolio/setting.js"></script>
        <script src="js_portafolio/jquery.flexslider.js"></script>
        <script src="js_portafolio/animate.js"></script>
        <script src="js_portafolio/custom.js"></script>
        <script src="js/main.js"></script>


    </body>
</html>
