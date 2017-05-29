<?php
include "config.php";
error_reporting(E_ALL);
?>
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





        <link rel="stylesheet" href="css_portafolio/bootstrap.min.css">

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!--Contacto Form-->

        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/font-face.css"> 
        <!-- Modernizer Script for old Browsers -->



    </head>

    <body id="body" onload="hideDiv()">

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
                <div class=" container text-center">
                    <br>
                    <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:75px;  ">PREGUNTAS FRECUENTES</h2>
                </div>   
                <br>
                <br>
                <!--col-xs-4 col-md-4 col-md-offset-4-->
                <div class="container">
                    <div class="col-sm-5 col-sm-offset-2 col-md-4 col-md-offset-4" style="padding-bottom: 5%">
                        <select name="pago" onChange="pagoOnChange(this)"  style="text-align: center" class="form-control col-md-4 col-xs-12">
                            <option VALUE="0" selected="selected">Elije una Opción</option>
                            <option VALUE="seminarios">Seminarios</option>
                            <option VALUE="simposium">Simposium</option>
                            <option VALUE="diplomados">Diplomados</option>
                            <option VALUE="talleres">Talleres</option>
                            <option VALUE="cursos">Cursos</option>
                            <option VALUE="servicios">Servicios Empresariales</option>
                            <option VALUE="revista">Revista</option>
                        </select>
                    </div>
                </div>
                <!--Titulo Elije Una Opcion-->
                <div id="0"  style="display:none;" >
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">

                        <div class="panel-group">
                            <h1 style="text-align: center">Elije Una Opción</h1>
                        </div>
                    </div>     
                </div> 
                <!--Seminarios-->
                <div id="seminarios">
                    <div class="who2 container text-center">
                        <br>
                        <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">SEMINARIOS</h2>
                    </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                        $query1 = "SELECT * from faqs WHERE category='seminario'";
                        $res1 = mysqli_query($mysqli, $query1);
                        $mysqli->close(); //cerramos la conexió
                        $num_row1 = mysqli_num_rows($res1);
                        //echo $num_row3;
                        if ($num_row1 == 0) {
                            ?>
                            <div class=" text-center" style="text-align: center">
                                <br>
                                <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:5px;text-align: center;padding-bottom:90px">Por el momento esta <br>sección no cuenta con preguntas</h2>
                            </div>

                        <?php } else { ?>   
                            <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                                <?php
                                $res2 = $mysqli2->query("SELECT * FROM faqs WHERE category='seminario'");
                                $mysqli2->close();
                                while ($row_sem = $res2->fetch_assoc()) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color: #D8D8D8">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#<?php echo $row_sem['id_faqs'] ?>" style="font-weight: bold;">
                                                    <?php echo utf8_encode($row_sem['question']) ?></a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $row_sem['id_faqs'] ?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                            <div class="panel-body">
                                                <?php echo utf8_encode($row_sem ['answer']) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>     
                        <?php } ?> 

                    </div>     


                </div>
                <!--Simposium-->
                <div id="simposium">
                    <div class="who2 container text-center">
                        <br>
                        <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">SIMPOSIUM</h2>
                    </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                        $query3 = "SELECT * from faqs WHERE category='simposium'";
                        $res3 = mysqli_query($mysqli3, $query3);
                        $mysqli3->close(); //cerramos la conexió
                        $num_row3 = mysqli_num_rows($res3);
                        //echo $num_row3;
                        if ($num_row3 == 0) {
                            ?>
                            <div class=" text-center" style="text-align: center">
                                <br>
                                <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:5px;text-align: center;padding-bottom:90px">Por el momento esta <br>sección no cuenta con preguntas</h2>
                            </div>

                        <?php } else { ?>   
                            <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                                <?php
                                $res4 = $mysqli4->query("SELECT * FROM faqs WHERE category='simposium'");
                                $mysqli4->close();
                                while ($row_sim = $res4->fetch_assoc()) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color: #D8D8D8">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#<?php echo $row_sim['id_faqs'] ?>" style="font-weight: bold;">
                                                    <?php echo utf8_encode($row_sim['question']) ?></a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $row_sim['id_faqs'] ?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                            <div class="panel-body">
                                                <?php echo utf8_encode($row_sim ['answer']) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>     
                        <?php } ?> 

                    </div>     


                </div>
                <!--Diplomados-->
                <div id="diplomados">
                    
                    <div class="who2 container text-center">
                        <br>
                        <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">DIPLOMADOS</h2>
                    </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                        $query5 = "SELECT * from faqs WHERE category='diplomados'";
                        $res5 = mysqli_query($mysqli5, $query5);
                        $mysqli5->close(); //cerramos la conexió
                        $num_row5 = mysqli_num_rows($res5);
                        //echo $num_row3;
                        if ($num_row5 == 0) {
                            ?>
                            <div class=" text-center" style="text-align: center">
                                <br>
                                <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:5px;text-align: center;padding-bottom:90px">Por el momento esta <br>sección no cuenta con preguntas</h2>
                            </div>

                        <?php } else { ?>   
                            <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                                <?php
                                $res6 = $mysqli6->query("SELECT * FROM faqs WHERE category='diplomados'");
                                $mysqli6->close();
                                while ($row_dipl = $res6->fetch_assoc()) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color: #D8D8D8">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#<?php echo $row_dipl['id_faqs'] ?>" style="font-weight: bold;">
                                                    <?php echo utf8_encode($row_dipl['question']) ?></a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $row_dipl['id_faqs'] ?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                            <div class="panel-body">
                                                <?php echo utf8_encode($row_dipl ['answer']) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>     
                        <?php } ?> 

                    </div>     


                </div>
                <!--Talleres-->
                <div id="talleres">
                    
                    <div class="who2 container text-center">
                        <br>
                        <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">TALLERES</h2>
                    </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                        $query7 = "SELECT * from faqs WHERE category='taller'";
                        $res7 = mysqli_query($mysqli7, $query7);
                        $mysqli7->close(); //cerramos la conexió
                        $num_row7 = mysqli_num_rows($res7);
                        //echo $num_row3;
                        if ($num_row7 == 0) {
                            ?>
                            <div class=" text-center" style="text-align: center">
                                <br>
                                <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:5px;text-align: center;padding-bottom:90px">Por el momento esta <br>sección no cuenta con preguntas</h2>
                            </div>

                        <?php } else { ?>   
                            <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                                <?php
                                $res8 = $mysqli8->query("SELECT * FROM faqs WHERE category='taller'");
                                $mysqli8->close();
                                while ($row_taller = $res8->fetch_assoc()) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color: #D8D8D8">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#<?php echo $row_taller['id_faqs'] ?>" style="font-weight: bold;">
                                                    <?php echo utf8_encode($row_taller['question']) ?></a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $row_taller['id_faqs'] ?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                            <div class="panel-body">
                                                <?php echo utf8_encode($row_taller ['answer']) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>     
                        <?php } ?> 

                    </div>     


                </div>
                <!--Cursos-->
                <div id="cursos">
                    
                    <div class="who2 container text-center">
                        <br>
                        <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">CURSOS</h2>
                    </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                        $query9 = "SELECT * from faqs WHERE category='curso'";
                        $res9 = mysqli_query($mysqli9, $query9);
                        $mysqli9->close(); //cerramos la conexió
                        $num_row9 = mysqli_num_rows($res9);
                        //echo $num_row3;
                        if ($num_row9 == 0) {
                            ?>
                            <div class=" text-center" style="text-align: center">
                                <br>
                                <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:5px;text-align: center;padding-bottom:90px">Por el momento esta <br>sección no cuenta con preguntas</h2>
                            </div>

                        <?php } else { ?>   
                            <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                                <?php
                                $res10 = $mysqli10->query("SELECT * FROM faqs WHERE category='curso'");
                                $mysqli10->close();
                                while ($row_curso = $res10->fetch_assoc()) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color: #D8D8D8">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#<?php echo $row_curso['id_faqs'] ?>" style="font-weight: bold;">
                                                    <?php echo utf8_encode($row_curso['question']) ?></a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $row_curso['id_faqs'] ?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                            <div class="panel-body">
                                                <?php echo utf8_encode($row_curso ['answer']) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>     
                        <?php } ?> 

                    </div>     


                </div>
                <!--Servicios-->
                <div id="servicios">
                    
                    <div class="who2 container text-center">
                        <br>
                        <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">SERVICIOS EMPRESARIALES</h2>
                    </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                        $query11 = "SELECT * from faqs WHERE category='servicio_empresarial'";
                        $res11 = mysqli_query($mysqli11, $query11);
                        $mysqli11->close(); //cerramos la conexió
                        $num_row11 = mysqli_num_rows($res11);
                        //echo $num_row3;
                        if ($num_row11 == 0) {
                            ?>
                            <div class=" text-center" style="text-align: center">
                                <br>
                                <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:5px;text-align: center;padding-bottom:90px">Por el momento esta <br>sección no cuenta con preguntas</h2>
                            </div>

                        <?php } else { ?>   
                            <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                                <?php
                                $res12 = $mysqli12->query("SELECT * FROM faqs WHERE category='servicio_empresarial'");
                                $mysqli12->close();
                                while ($row_taller = $res12->fetch_assoc()) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color: #D8D8D8">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#<?php echo $row_taller['id_faqs'] ?>" style="font-weight: bold;">
                                                    <?php echo utf8_encode($row_taller['question']) ?></a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $row_taller['id_faqs'] ?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                            <div class="panel-body">
                                                <?php echo utf8_encode($row_taller ['answer']) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>     
                        <?php } ?> 

                    </div>     


                </div>
                <!--Revista-->
                <div id="revista">
                    
                    <div class="who2 container text-center">
                        <br>
                        <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">REVISTA</h2>
                    </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                        $query13 = "SELECT * from faqs WHERE category='revista'";
                        $res13 = mysqli_query($mysqli13, $query13);
                        $mysqli13->close(); //cerramos la conexió
                        $num_row13 = mysqli_num_rows($res13);
                        //echo $num_row3;
                        if ($num_row13 == 0) {
                            ?>
                            <div class=" text-center" style="text-align: center">
                                <br>
                                <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:5px;text-align: center;padding-bottom:90px">Por el momento esta <br>sección no cuenta con preguntas</h2>
                            </div>

                        <?php } else { ?>   
                            <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                                <?php
                                $res14 = $mysqli14->query("SELECT * FROM faqs WHERE category='revista'");
                                $mysqli14->close();
                                while ($row_revista = $res14->fetch_assoc()) {
                                    ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color: #D8D8D8">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#<?php echo $row_revista['id_faqs'] ?>" style="font-weight: bold;">
                                                    <?php echo utf8_encode($row_revista['question']) ?></a>
                                            </h4>
                                        </div>
                                        <div id="<?php echo $row_revista['id_faqs'] ?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                            <div class="panel-body">
                                                <?php echo utf8_encode($row_revista ['answer']) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>     
                        <?php } ?> 

                    </div>     


                </div>



            </section>









        </main>
        <script>
            function hideDiv() {
                $("#0").show();
                $("#seminarios").hide();
                $("#simposium").hide();
                $("#diplomados").hide();
                $("#talleres").hide();
                $("#cursos").hide();
                $("#servicios").hide();
                $("#revista").hide();
            }
        </script>


        <script>
            function pagoOnChange(sel) {



                if (sel.value == "0") {
                    $("#0").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#talleres").hide();
                    $("#cursos").hide();
                    $("#servicios").hide();
                    $("#revista").hide();

                } else if (sel.value == "seminarios") {
                    $("#seminarios").show();
                    $("#0").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#talleres").hide();
                    $("#cursos").hide();
                    $("#servicios").hide();
                    $("#revista").hide();

                } else if (sel.value == "simposium") {
                    $("#simposium").show();
                    $("#seminarios").hide();
                    $("#0").hide();
                    $("#diplomados").hide();
                    $("#talleres").hide();
                    $("#cursos").hide();
                    $("#servicios").hide();
                    $("#revista").hide();

                } else if (sel.value == "diplomados") {
                    $("#diplomados").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#talleres").hide();
                    $("#cursos").hide();
                    $("#servicios").hide();
                    $("#revista").hide();

                } else if (sel.value == "talleres") {
                    $("#talleres").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#cursos").hide();
                    $("#servicios").hide();
                    $("#revista").hide();
                    $("#0").hide();

                } else if (sel.value == "cursos") {
                    $("#cursos").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#talleres").hide();
                    $("#servicios").hide();
                    $("#revista").hide();
                    $("#0").hide();

                } else if (sel.value == "servicios") {
                    $("#servicios").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#cursos").hide();
                    $("#talleres").hide();
                    $("#revista").hide();
                    $("#0").hide();

                } else if (sel.value == "revista") {
                    $("#revista").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#cursos").hide();
                    $("#talleres").hide();
                    $("#servicios").hide();
                    $("#0").hide();

                } else {
                    $("#0").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#talleres").hide();
                    $("#cursos").hide();
                    $("#servicios").hide();
                    $("#revista").hide();
                }

            }

        </script>



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
