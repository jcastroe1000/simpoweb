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
        <title>Registro</title>		
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
                        <li><a href="directorio.php">Directorio</a></li>
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
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-clock-o"></i> Por favor espera</h4>
                    </div>
                    <div class="modal-body center-block">
                        <p>Estamos guardando la información</p>
                        <div class="progress">
                            <div class="progress-bar bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">

                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--Inicia modal exitoso-->
        <div id="cargando" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" style="text-align: center;padding:20px">
                        <h4>Registro Exitoso</h4>
                    </div>
                </div>
            </div>
        </div>
            <div class="container text-center">
                <br>
                <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:75px;  ">REGISTRO</h2>
            </div>   
            <br>
            <br>
            <div class="benefits text-center">
                <form id="create_user" name="create_user" class="form-horizontal form-label-left" style="padding-top: 40px">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre (s) : 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos : 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="surnames" name="surnames"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefono : </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="telephone_contact" name="telephone_contact" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Correo Electronico :  
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="email_contact" name="email_contact" class="form-control col-md-7 col-xs-12" type="email" name="middle-name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Genero :</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control col-md-7 col-xs-12" id="gender" name="gender">
                                    <option>Elije una opción</option>
                                    <option value="1">Hombre</option>
                                    <option value="2">Mujer</option>

                                  </select>
                                </div>
                        
                        
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña : 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="password" name="password" class="date-picker form-control col-md-7 col-xs-12" type="password">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirmar contraseña : 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="confir_password" name="confirm_password" class="date-picker form-control col-md-7 col-xs-12"  type="password">
                        </div>
                      </div>
                    <div class="form-group">
                                            <input type="hidden" type="text" class="form-control" name="creation_date" id="creation_date" value="<?php echo date("Y/m/d") ?>">
                                        </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-danger">Cancelar</button>
                          <button type="submit" class="btn btn-success">Registrarme</button>
                        </div>
                      </div>

                    </form>


            </div>
        </section>
            








        </main>

       <script src="administrator//vendors/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap -->
            <script src="administrator/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- FastClick -->
            <script src="administrator/vendors/fastclick/lib/fastclick.js"></script>
            <!-- NProgress -->
            <script src="administrator/vendors/nprogress/nprogress.js"></script>
            <!-- Chart.js -->
            <script src="administrator/vendors/Chart.js/dist/Chart.min.js"></script>
            <!-- gauge.js -->
            <script src="administrator/vendors/gauge.js/dist/gauge.min.js"></script>
            <!-- bootstrap-progressbar -->
            <script src="administrator/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
            <!-- iCheck -->
            <script src="administrator/vendors/iCheck/icheck.min.js"></script>
            <!-- Skycons -->
            <script src="administrator/vendors/skycons/skycons.js"></script>
            <!-- Flot -->
            <script src="administrator/vendors/Flot/jquery.flot.js"></script>
            <script src="administrator/vendors/Flot/jquery.flot.pie.js"></script>
            <script src="administrator/vendors/Flot/jquery.flot.time.js"></script>
            <script src="administrator/vendors/Flot/jquery.flot.stack.js"></script>
            <script src="administrator/vendors/Flot/jquery.flot.resize.js"></script>
            <!-- Flot plugins -->
            <script src="administrator/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
            <script src="administrator/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
            <script src="administrator/vendors/flot.curvedlines/curvedLines.js"></script>
            <!-- DateJS -->
            <script src="administrator/vendors/DateJS/build/date.js"></script>
            <!-- JQVMap -->
            <script src="administrator/vendors/jqvmap/dist/jquery.vmap.js"></script>
            <script src="administrator/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
            <script src="administrator/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="administrator/vendors/moment/min/moment.min.js"></script>
            <script src="administrator/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
            <script src="../production/js/create_user.js" ></script>
                <script src="administrator/production/js/bootbox.js"></script>
                <script src="administrator/production/js/bootbox.min.js"></script>
                <!-- Custom Theme Scripts -->
                <script src="../build/js/custom.min.js"></script>
                <script src="administrator/production/js/plugins/sortable.js" type="text/javascript"></script>
                <script src="administrator/production/js/fileinput.js" type="text/javascript"></script>
                            




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
        <script src="create_user.js"></script>
        
        <script>
                                            $('#myModal').on('shown.bs.modal', function () {

                                                                            var progress = setInterval(function() {
                                                                            var $bar = $('.bar');
                                                                            if ($bar.width() == 500) {

                                                                            // complete

                                                                            clearInterval(progress);
                                                                            $('.progress').removeClass('active');
                                                                            $('#myModal').modal('hide');
                                        $bar.width(0);
                                        } else {

                                            // perform processing logic here

                                                $bar.width($bar.width() + 50);
                                                }
                                                
                                                $bar.text($bar.width()/5 + "%");
                                        }, 800);


                                    })
                                    </script>

    </body>
</html>
