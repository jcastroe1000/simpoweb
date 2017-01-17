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
        <!--Contacto Form-->

        <link rel="stylesheet" href="css/form.css">

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
                        <a href="#body">Inicio</a>
                    </h1>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul  class="nav navbar-nav">

                        <li><a class="scroll-link" data-id="service">Servicios</a></li>
                        <li><a class="scroll-link" data-id="portfolio">Portfolio</a></li>
                        <li><a class="scroll-link" data-id="contact">Contacto</a></li>
                        <li><a class="scroll-link" data-id="footer">Suscríbete</a></li>
                        <li><a href="directorio.php">Directorio</a></li>
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

            <!--
            Home Slider
            ==================================== -->

            <section id="home-slider">
                <div id="slider" class="sl-slider-wrapper">

                    <div class="sl-slider">

                        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

                            <div class="bg-img bg-img-1"></div>

                            <div class="slide-caption">
                                <div class="caption-content">
                                    <h2 class="animated fadeInDown">ACTIVIDADES ACADEMICAS</h2>
                                    <span class="animated fadeInDown">ESIQIE-IPN</span>
                                    <a href="" class="btn btn-blue btn-effect" data-toggle="modal" data-target="#gridSystemModal">REGISTRATE</a>
                                </div>
                            </div>

                        </div>

                        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

                            <div class="bg-img bg-img-2"></div>
                            <div class="slide-caption">
                                <div class="caption-content">
                                    <h2 class="animated fadeInDown">ACTIVIDADES ACADEMICAS</h2>
                                    <span class="animated fadeInDown">ESIQIE-IPN</span>
                                    <a href="#" class="btn btn-blue btn-effect" data-toggle="modal" data-target="#gridSystemModal">REGISTRATE</a>
                                </div>
                            </div>

                        </div>

                        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">

                            <div class="bg-img bg-img-3"></div>
                            <div class="slide-caption">
                                <div class="caption-content">
                                    <h2 class="animated fadeInDown">ACTIVIDADES ACADEMICAS</h2>
                                    <span class="animated fadeInDown">ESIQIE-IPN</span>
                                    <a href="#" class="btn btn-blue btn-effect">REGISTRATE</a>
                                </div>
                            </div>

                        </div>

                    </div><!-- /sl-slider -->

                    <!-- 
                    <nav id="nav-arrows" class="nav-arrows">
                        <span class="nav-arrow-prev">Previous</span>
                        <span class="nav-arrow-next">Next</span>
                    </nav>
                    -->
                    <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                        <div class="modal-dialog"> 
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="gridModalLabel" style="text-align: center">Ingresa tus datos</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid bd-example-row">
                                        <div class="x_panel">
                                            <div class="x_title">


                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <br />
                                                <form class="form-horizontal form-label-left input_mask" action="model/register.php" method="post">

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" id="name" name="FullName" placeholder="Nombre (s)">
                                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Apellidos">
                                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control has-feedback-left" id="email_contact" name="email_contact" placeholder="Correo Electrónico">
                                                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                                    </div>

                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                        <input type="text" class="form-control" id="telephone_contact" name="telephone_contact" placeholder="Teléfono">
                                                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">

                                                        <div class=" selectContainer">
                                                            <select class="form-control" name="gender">
                                                                <option value="">Genero</option>
                                                                <option value="1">Masculino</option>
                                                                <option value="2">Feminino</option>
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">

                                                        <div class=" selectContainer">
                                                            <select class="form-control" name="city">
                                                                <option value="">Soy de....</option>
                                                                <option value="1">Ciudad de México</option>
                                                                <option value="2">Guadalajara</option>
                                                                <option value="3">Monterrey</option>
                                                            </select>
                                                        </div>
                                                    </div>   


                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-4" style="margin-top: 25px">
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-success">Registrarme</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>    
                            </div>
                        </div>

                    </div>
                </div>
                </div>

                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>


                <nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                </nav>

                </div><!-- /slider-wrapper -->
            </section>

            <!--
            End Home SliderEnd
            ==================================== -->

            <!-- about section -->
            <section id="about" >
                <div class="container">
                    <div class="row">

                        <div class="col-md-8 col-md-offset-2 wow animated fadeInRight ">
                            <div class="welcome-block center-block">
                                <h3 style="text-align: center">¿Quiénes Somos?</h3>								
                                <div class="message-body" style="text-align: justify">

                                    <h4 style="color: white;padding:5px;line-height: 30px ">El objetivo del Simposium es propiciar un mayor intercambio de información entre profesores e investigadores de las diversas instituciones de educación en los ámbitos nacionales e internacionales, así como representantes del sector productivo.</h4>
                                </div>
                                
                                <a  class="btn btn-border btn-effect col-md-offset-5 button_index" data-toggle="modal" data-target="#QuienesSomos">Leer Más</a>

                            </div>
                        </div>
                        <div id="QuienesSomos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="gridModalLabel" style="text-align: center">Acerca del Simposium</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid bd-example-row">
                                            <!--form-->
                                            <h5 style="text-align: justify">El objetivo del Simposium es propiciar un mayor intercambio de información entre
                                                profesores e investigadores de las diversas instituciones de educación en los ámbitos nacionales 
                                                e internacionales, así como representantes del sector productivo.</h5>   
                                            <h5 style="text-align: justify">Este evento pretende dar a conocer en los ámbitos educativos nacionales e internacionales, 
                                                el trabajo académico y de investigación que se realiza en las diferentes Unidades Académicas del IPN, 
                                                en particular, y ser un marco de exposición para todas aquellas aportaciones nacionales e internacionales 
                                                que enriquezcan las diversas áreas del quehacer politécnico.</h5>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary center-block" data-dismiss="modal">Cerrar</button>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about section -->


            <!-- Service section -->
            <section id="service">
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center">
                            <h2 class="wow animated bounceInLeft">Servicios</h2>
                            <h4 class="wow animated bounceInRight">Selecciona El Servicio De Tu Interes</h4>
                        </div>


                        <div class="container" >
                            <div class="col-md-33 text-center wow animated zoomIn" data-wow-delay="0.3s" >
                                <div class="service-item" style="padding-top: 60px;">
                                    <div class="service-icon">
                                        <i class="fa fa-mortar-board fa-3x"></i>
                                    </div>
                                    <h3>SEMINARIOS</h3>
<!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                                </div>
                            </div>
                            <div class="col-md-33   text-center wow animated zoomIn" data-wow-delay="0.3s">
                                <div class="service-item" style="padding-top: 60px;">
                                    <div class="service-icon">
                                        <i class="fa fa-laptop fa-3x"></i>
                                    </div>
                                    <h3>talleres</h3>
<!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                                </div>
                            </div>
                            <div class="col-md-33   text-center wow animated zoomIn" data-wow-delay="0.3s">
                                <div class="service-item" style="padding-top: 60px;">
                                    <div class="service-icon">
                                        <i class="fa fa-briefcase fa-3x"></i>
                                    </div>
                                    <h3>CURSOS</h3>
<!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                                </div>
                            </div>
                            <div class="col-md-33   text-center wow animated zoomIn" data-wow-delay="0.3s">
                                <div class="service-item" style="padding-top: 60px;">
                                    <div class="service-icon">
                                        <i class="fa fa-university fa-3x"></i>
                                    </div>
                                    <h3>DIPLOMADOS</h3>
<!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                                </div>
                            </div>
                            <div class="col-md-33 text-center wow animated zoomIn" data-wow-delay="0.3s">
                                <div class="service-item" style="padding-top: 60px;">
                                    <div class="service-icon">
                                        <i class="fa fa-book fa-3x"></i>
                                    </div>
                                    <h3>REVISTA</h3>
<!--                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
                                </div>
                            </div>



                        </div>
                    </div>    
                </div>    
            </section>
            <!-- end Service section -->

            <!-- portfolio section -->
            <section id="portfolio">
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center wow animated fadeInDown">
                            <h2>NUESTROS PROYECTOS</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>


                        <ul class="project-wrapper wow animated fadeInUp">
                            <li class="portfolio-item">
                                <img src="img/portfolio/item.jpg" class="img-responsive" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/item.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="img/portfolio/item2.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street" href="img/slider/banner.jpg" data-fancybox-group="works" ><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="img/portfolio/item3.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Behind The world" data-fancybox-group="works" href="img/portfolio/item3.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="img/portfolio/item4.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street 4" data-fancybox-group="works" href="img/portfolio/item4.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="img/portfolio/item5.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street 5" data-fancybox-group="works" href="img/portfolio/item5.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>

                            <li class="portfolio-item">
                                <img src="img/portfolio/item6.jpg" class="img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
                            <figcaption class="mask">
                                <h3>Wall street</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. </p>
                            </figcaption>
                            <ul class="external">
                                <li><a class="fancybox" title="Wall street 6" data-fancybox-group="works" href="img/portfolio/item6.jpg"><i class="fa fa-search"></i></a></li>
                                <li><a href=""><i class="fa fa-link"></i></a></li>
                            </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </section>
            <!-- end portfolio section -->





            <!-- Contact section -->
            <section id="contact" style="background-color: #E6E6E6">
                <div class="container">
                    <div class="row">

                        <div class="sec-title text-center wow animated fadeInDown">
                            <h2>ESCRÍBENOS</h2>
                            <p>¿Tienes alguna duda?</p>
                            <p>Mandanos un mensaje</p>
                        </div>


                        <div class="col-md-7 contact-form wow animated fadeInLeft">
                            <form action="model/contacto_mail.php" method="post">
                                <div class="input-field">
                                    <input type="text" name="FullName" class="form-control_contact" placeholder="Nombre">
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" class="form-control_contact" placeholder="Correo Electrónico">
                                </div>
                                <div class="input-field">
                                    <input type="text" name="subject" class="form-control_contact" placeholder="Asunto">
                                </div>
                                <div class="input-field">
                                    <textarea name="message" class="form-control_contact" placeholder="Mensaje"></textarea>
                                </div>
                                <button type="submit" id="submit" class="btn btn-blue btn-effect button_index">Enviar</button>
                            </form>
                        </div>

                        <div class="col-md-5 wow animated fadeInRight">
                            <address class="contact-details">
                                <h3>Información de Contacto</h3>						
                                <p><i class="fa fa-pencil"></i>Dr. Adelina Pérez Rosas<span>Edificio 7</span> 
                                    <span>Primer Piso,Cubículo 7107</span><span>Unidad Profesional Adolfo López Mateos</span>
                                    <span>Zacatenco, Ciudad de México</span>

                                </p><br>
                                <h4>Telefono:</h4>
                                <p>57-29-60-00</p>
                                <p><i class="fa fa-phone"></i>Adelina Pérez Rosas (Ext.: 55107)</p>
                                <p><i class="fa fa-phone"></i> Fabián D. Martínez Valdés (Ext.: 55107)</p>

                            </address>

                        </div>


                    </div>
                </div>
            </section>
            <!-- end Contact section -->



        </main>

        <footer id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="footer-content">
                        <div class="wow animated fadeInDown">
                            <p>¡Quédate con nosotros!</p>
                            <p>Suscríbete a nuestra lista para recibir noticias y publicaciones.</p>
                        </div>
                        <form action="model/newsletter.php" method="post" class="subscribe-form wow animated fadeInUp">
                            <div class="input-field">
                                <input type="email" class="subscribe form-control_contact" placeholder="Ingresa tu correo electrónico" name="email">
                            </div>
                            <div class="form-group ">

                                <div class=" selectContainer ">
                                    <select class="form-control_contact subscribe " name="seccion">
                                        <option value="">Quiero Recibir Noticias De..</option>
                                        <option value="Seminarios">Seminarios</option>
                                        <option value="Cursos">Cursos</option>
                                        <option value="Talleres">Talleres</option>
                                        <option value="Diplomados">Diplomados</option>
                                        <option value="Todos">Todos</option>
                                    </select>
                                </div>
                            </div> 
                            <button type="submit" id="submit" class="btn-primary btn-blue_2 btn-effect">Suscribirme</button>
                        </form>
                        <div class="footer-social">
                            <ul>
                                <li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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

        
        <script type="text/javascript">
            $(document).ready(function () {
                // navigation click actions	
                $('.scroll-link').on('click', function (event) {
                    event.preventDefault();
                    var sectionID = $(this).attr("data-id");
                    scrollToID('#' + sectionID, 750);
                });
                // scroll to top action
                $('.scroll-top').on('click', function (event) {
                    event.preventDefault();
                    $('html, body').animate({scrollTop: 0}, 'slow');
                });
                // mobile nav toggle
                $('#nav-toggle').on('click', function (event) {
                    event.preventDefault();
                    $('#main-nav').toggleClass("open");
                });
            });
            // scroll function
            function scrollToID(id, speed) {
                var offSet = 50;
                var targetOffset = $(id).offset().top - offSet;
                var mainNav = $('#main-nav');
                $('html,body').animate({scrollTop: targetOffset}, speed);
                if (mainNav.hasClass("open")) {
                    mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                    mainNav.removeClass("open");
                }
            }
            if (typeof console === "undefined") {
                console = {
                    log: function () { }
                };
            }
        </script>

    </body>
</html>
