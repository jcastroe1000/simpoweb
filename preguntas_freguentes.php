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
                
                <div id="0"  style="display:none;" >
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">

                        <div class="panel-group">
                            <h1 style="text-align: center">Elije Una Opción</h1>
                        </div>
                    </div>     
                </div>    
                <div id="seminarios" >
                    <div class="who2 container text-center">
                    <br>
                    <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">SEMINARIOS</h2>
                </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                            $res = $mysqli->query("SELECT * FROM faqs WHERE category='seminario'");
                            $mysqli->close();
                             while ($row = $res->fetch_assoc()){
                        ?>
                        <div class="panel-group">
                            <div class="panel panel-default" >
                                <div class="panel-heading" style="background-color: #D8D8D8">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#<?php echo $row['id_faqs']?>" style="font-weight: bold"><?php echo utf8_encode( $row['question'])?></a>
                                    </h4>
                                </div>
                                <div id="<?php echo $row['id_faqs']?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                    <div class="panel-body">
                                        <?php echo utf8_encode( $row  ['answer'])?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php	}	?>
                    </div>     
                </div>
                <div id="simposium" >
                    <div class="who2 container text-center">
                    <br>
                    <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">SIMPOSIUM</h2>
                </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                            $res2 = $mysqli2->query("SELECT * FROM faqs WHERE category='simposium'");
                            $mysqli2->close();
                             while ($row_sim = $res2->fetch_assoc()){
                       
                        ?>
                        <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #D8D8D8">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#<?php echo $row_sim['id_faqs']?>" style="font-weight: bold">
                                            <?php echo utf8_encode( $row_sim['question'])?></a>
                                    </h4>
                                </div>
                                <div id="<?php echo $row_sim['id_faqs']?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                    <div class="panel-body">
                                        <?php echo utf8_encode( $row_sim ['answer'])?>
                                    </div>
                                </div>
                            </div>
                        <?php	}	?>
                    </div>     


                </div>
                <div id="diplomados"  >
                    <div class="who2 container text-center">
                    <br>
                    <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">DIPLOMADOS</h2>
                </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                            
                               $query3 = "SELECT * from faqs WHERE category='diplomados'";
                               $res3 = mysqli_query($mysqli3, $query3);
                               $mysqli3->close(); //cerramos la conexió
                                $num_row3 = mysqli_num_rows($res3);
                                //echo $num_row3;
                               if($num_row3==0){
                                   echo '<div class=" text-center" style="text-align: center">';
                                   echo  '    <br>';
                                   echo ' <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;text-align: center">Por el momento esta <br>sección no cuenta con preguntas</h2>';
                                   echo '</div>';
                                   
                               }else{?>   
                               <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                            $res3 = $mysqli8->query("SELECT * FROM faqs WHERE category='diplomados'");
                            $mysqli8->close();
                             while ($row_dipl = $res3->fetch_assoc()){
                       
                        ?>
                        <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #D8D8D8">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#<?php echo $row_dipl['id_faqs']?>" style="font-weight: bold;">
                                            <?php echo utf8_encode( $row_dipl['question'])?></a>
                                    </h4>
                                </div>
                                <div id="<?php echo $row_dipl['id_faqs']?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                    <div class="panel-body">
                                        <?php echo utf8_encode( $row_dipl ['answer'])?>
                                    </div>
                                </div>
                            </div>
                        <?php	}	?>
                    </div>     
                               <?php	}	?> 
                        
                    </div>     


                </div>
                <div id="talleres" >
                    <div class="who2 container text-center">
                    <br>
                    <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">TALLERES</h2>
                </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                            $res4 = $mysqli4->query("SELECT * FROM faqs WHERE category='taller'");
                            $mysqli4->close();
                             while ($row4 = $res4->fetch_assoc()){
                       
                        ?>
                        <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #D8D8D8">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#<?php echo $row4['id_faqs']?>" style="font-weight: bold"><?php echo utf8_encode( $row4['question'])?></a>
                                    </h4>
                                </div>
                                <div id="<?php echo $row4['id_faqs']?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                    <div class="panel-body">
                                        <?php echo utf8_encode( $row4 ['answer'])?>
                                    </div>
                                </div>
                            </div>
                        <?php	}	?>
                    </div>     


                </div>
                <div id="cursos" >
                    <div class="who2 container text-center">
                    <br>
                    <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">CURSOS</h2>
                </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                            $res5 = $mysqli5->query("SELECT * FROM faqs WHERE category='curso'");
                            $mysqli5->close();
                             while ($row5 = $res5->fetch_assoc()){
                       
                        ?>
                        <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #D8D8D8">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#<?php echo $row5['id_faqs']?>" style="font-weight: bold"><?php echo utf8_encode( $row5['question'])?></a>
                                    </h4>
                                </div>
                                <div id="<?php echo $row5['id_faqs']?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                    <div class="panel-body">
                                        <?php echo utf8_encode( $row5 ['answer'])?>
                                    </div>
                                </div>
                            </div>
                        <?php	}	?>
                    </div>     


                </div>
                <div id="servicios" >
                    <div class="who2 container text-center">
                    <br>
                    <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">SERVICIOS EMPRESARIALES</h2>
                </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                            $res6 = $mysqli6->query("SELECT * FROM faqs WHERE category='servicio_empresarial'");
                            $mysqli6->close();
                             while ($row6 = $res6->fetch_assoc()){
                       
                        ?>
                        <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #D8D8D8">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#<?php echo $row6['id_faqs']?>" style="font-weight: bold"><?php echo utf8_encode( $row6['question'])?></a>
                                    </h4>
                                </div>
                                <div id="<?php echo $row6['id_faqs']?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                    <div class="panel-body">
                                        <?php echo utf8_encode( $row6 ['answer'])?>
                                    </div>
                                </div>
                            </div>
                        <?php	}	?>
                    </div>     


                </div>
                <div id="revista" >
                    <div class="who2 container text-center">
                    <br>
                    <h2 class="MediumItalic" style="font-size: xx-large;color: #2e2e35;margin-top:10px;  ">REVISTA</h2>
                </div> 
                    <div class="item  col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-3" style="padding-top: 5%">
                        <?php
                            $res7 = $mysqli7->query("SELECT * FROM faqs WHERE category='revista'");
                            $mysqli7->close();
                             while ($row7 = $res7->fetch_assoc()){
                       
                        ?>
                        <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #D8D8D8">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#<?php echo $row7['id_faqs']?>" style="font-weight: bold"><?php echo utf8_encode( $row7['question'])?></a>
                                    </h4>
                                </div>
                                <div id="<?php echo $row7['id_faqs']?>" class="panel-collapse collapse off" style="background-color: #E6E6E6">
                                    <div class="panel-body">
                                        <?php echo utf8_encode( $row7 ['answer'])?>
                                    </div>
                                </div>
                            </div>
                        <?php	}	?>
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

                }
                else if (sel.value == "diplomados") {
                    $("#diplomados").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#talleres").hide();
                    $("#cursos").hide();
                    $("#servicios").hide();
                    $("#revista").hide();

                }
                else if (sel.value == "talleres") {
                    $("#talleres").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#cursos").hide();
                    $("#servicios").hide();
                    $("#revista").hide();
                    $("#0").hide();

                }
                else if (sel.value == "cursos") {
                    $("#cursos").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#talleres").hide();
                    $("#servicios").hide();
                    $("#revista").hide();
                    $("#0").hide();

                }
                else if (sel.value == "servicios") {
                    $("#servicios").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#cursos").hide();
                    $("#talleres").hide();
                    $("#revista").hide();
                    $("#0").hide();

                }
                else if (sel.value == "revista") {
                    $("#revista").show();
                    $("#seminarios").hide();
                    $("#simposium").hide();
                    $("#diplomados").hide();
                    $("#cursos").hide();
                    $("#talleres").hide();
                    $("#servicios").hide();
                    $("#0").hide();

                }
                else {
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
