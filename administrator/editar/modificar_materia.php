<?php
header("Content-Type: text/html;charset=utf-8");
include "../config.php";
error_reporting(E_ALL);
session_start();
$id= $_GET['u'];
if (!isset($_SESSION['user_name'])) {
    header("Location:/simpoweb/administrator/login.php");
}
$user_name = utf8_encode($_SESSION['user_name']);

if (isset($_GET['u'])):
   
    $res = $mysqli->query("SELECT * FROM materias WHERE id =" . $_GET['u']);
    $row = $res->fetch_assoc();
    mysqli_fetch_array($res);
    $mysqli->close();
endif;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Administración </title>

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="../production/css/font-face.css" rel="stylesheet" type="text/css">
        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <!--Multiselect-->
        <link rel="stylesheet" href="../dist/css/bootstrap-select.css">
        <script src="../dist/js/bootstrap-select.js" defer></script>
        
           <link rel="stylesheet" href="../form-wizard/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../form-wizard/css/form-elements.css">
        <link rel="stylesheet" href="../form-wizard/css/style.css">
        <link href="../css/fileinput.css" media="all" rel="stylesheet" type="text/css">

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                   <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index4.html" class="site_title"><i class="fa fa-flask "></i> <span>Sistema de Administración</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic center-block">
                                <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido (a)</span>
                                <h2><?php echo utf8_encode($user_name); ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">

                                    <li><a><i class="fa fa-group"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="users_registers.php"><i class="fa fa-arrow-up"></i>Registrados</a></li>
                                            <li>
                                                <a href="newsletter.php"><i class="fa fa-check-circle"></i>NewsLetter</a></li>
                                        </ul>

                                    </li>
                                    <li><a href="services.php"><i class="fa fa-arrow-circle-up"></i> Registro </a></li>


                                    <li><a><i class="fa fa-cogs"></i>Secciones <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">

                                            <li>
                                                <a href="simposiums.html"><i class="fa fa-mortar-board"></i> Seminarios</a>
                                            </li>
                                            <li>
                                                <a href="simposiums.html"><i class="fa fa-laptop"></i> Talleres </a>
                                            </li>
                                            <li>
                                                <a href="simposiums.html"><i class="fa fa-briefcase"></i> Cursos </a>
                                            </li>
                                            <li>
                                                <a href="simposiums.html"><i class="fa fa-university"></i> Diplomados </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li><a><i class="fa fa-plus-square"></i> Extras<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html"><i class="fa fa-book"></i>Directorio</a></li>

                                        </ul>
                                    </li>


                                </ul>
                            </div>


                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>


                        </nav>
                    </div>

                    <!-- Modal Perfil-->
                    <div class="modal fade" id="myProfile" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title" style="text-align: center">CIERRE DE SESIÓN</h4>  

                                </div>
                                <div class="modal-body">
                                    <h2 style="text-align: center">¿Estás seguro de querer cerrar la sesión?</h2>
                                </div>
                                <div class="modal-footer">

                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-success">Aceptar</button>
                                </div>
                            </div>
                        </div>                    </div>
                    <!-- Modal Password-->
                </div>
                <!-- /top navigation -->
                <!--Inicia modal exitoso-->
                <div id="cargando" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" style="text-align: center;padding:20px">
                        <h3>La materia ha sido modificada exitosamente.</h3>
                        <h2>Camiando de pagina.....</h2>
                    </div>
                </div>
            </div>
        </div>
                <div id="guardando" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" style="text-align: center;padding:20px">
                        <h3>Por favor espera,registrando la meteria..</h3>
                    </div>
                </div>
            </div>
        </div>        
        <!--Termina modal-->
        <!--Progress Modal-->
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
        <!--ends progress modal-->
                <!-- page content -->
                <div class="right_col" role="main" >
                    <!-- top tiles -->
                    <div class="row" style="padding-top: 6%">
                        <div class="col-sm-10 col-sm-offset-1  col-lg-offset-2  col-md-12  col-lg-8 col-lg-offset-2 col-sm-offset-1 form-box">
                            <div class="x_panel " style="padding-top: 3%" >
                             <div class="">
                                    <h2 style="text-align: center;color: black;font-size: 20px;" class="Sansation_Regular">MODIFICAR MATERIA</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content" style="padding-top: 3%">

                                <form role="form" id="update_matter" name="update_matter" class="f1" style="margin-top: -15px;">
                                  <div class="row">
                                      <div class="form-group col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                    <label class="etiquetas" for="f1-first-name">Nombre de la Materia:</label>
                                    <input type="text" name="name_matter" id="name_matter" placeholder="Nombre" 
                                           class="f1-first-name  " id="f1-first-name" style="width: 100%;font-weight: bolder;color: #0000FF"
                                           value="<?php echo utf8_encode( $row['nombre_materia'])?>">
                                </div>
                                    </div>
                                
                                
                                    <div class="row">
                                        <div class="form-group col-lg-5 col-md-4 col-sm-6 col-xs-12"  style=";display: inline-block;">
                                    <label class="etiquetas" for="f1-first-name">Sección:</label>
                                    <select class="combo" id="section" name="section[]" style="width: 100%;font-weight: bolder;color: #0000FF">
                                        <?php
                                                $section_m= explode(',', utf8_encode($row['section']));
                                               
                                                if (in_array('Doctorado', $section_m)) {
                                                    echo '<option value="Doctorado" selected="">Doctorado</option>';
                                                } else {
                                                    echo '<option value="Doctorado" >Doctorado</option>';
                                                }
                                                if (in_array('Especialidad', $section_m)) {
                                                    echo '<option value="Especialidad" selected="">Especialidad</option>';
                                                } else {
                                                    echo '<option value="Especialidad" >Especialidad</option>';
                                                }
                                                if (in_array('Maestria', $section_m)) {
                                                    echo '<option value="Maestria" selected="">Maestria</option>';
                                                } else {
                                                    echo '<option value="Maestria" >Maestria</option>';
                                                }
                                                
                                                ?>
                                    </select>

                                </div>
                                  
                                <div class="form-group col-lg-5 col-md-4 col-sm-6 col-xs-12" style=";display: inline-block;float: right">
                                    <label class="etiquetas" for="f1-first-name">Área:</label>
                                    <select class="combo" id="area" name="area[]" style="width: 100%;font-weight: bolder;color: #0000FF">
                                        <?php
                                                $area_p= explode(',', utf8_encode($row['area']));
                                               
                                                if (in_array('Clínica', $area_p)) {
                                                    echo '<option value="Clínica" selected="">Clínica</option>';
                                                } else {
                                                    echo '<option value="Clínica" >Clínica</option>';
                                                }
                                                if (in_array('Teoría psicoanalítica', $area_p)) {
                                                    echo '<option value="Teoría psicoanalítica" selected="">Teoría psicoanalítica</option>';
                                                } else {
                                                    echo '<option value="Teoría psicoanalítica" >Teoría psicoanalítica</option>';
                                                }
                                                if (in_array('Técnica', $area_p)) {
                                                    echo '<option value="Técnica" selected="">Técnica</option>';
                                                } else {
                                                    echo '<option value="Técnica" >Técnica</option>';
                                                }
                                                if (in_array('Teoría y clínica', $area_p)) {
                                                    echo '<option value="Teoría y clínica" selected="">Teoría y clínica</option>';
                                                } else {
                                                    echo '<option value="Teoría y clínica" >Teoría y clínica</option>';
                                                }
                                                 if (in_array('Investigación', $area_p)) {
                                                    echo '<option value="Investigación" selected="">Investigación</option>';
                                                } else {
                                                    echo '<option value="Investigación" >Investigación</option>';
                                                }
                                                ?>
                                    </select>

                                </div>
                                    </div>
                                
                            <div class="row">
                                <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display: inline-block;" >
                                    <label class="etiquetas" for="f1-first-name">Nombre Profesor:</label>
                                    <input type="text" name="nombre_prof"  id="nombre_prof" placeholder="Nombre" 
                                           class="f1-first-name form-control3" id="f1-first-name" style="width: 100%;font-weight: bolder;color: #0000FF" 
                                           value="<?php echo utf8_encode( $row['nombre_prof'])?>">
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display: inline-block;float: bottom" >
                                    <label class="etiquetas" for="f1-first-name">Apellido Paterno:</label>
                                    <input type="text" name="apellido_pat_prof" id="apellido_pat_prof" placeholder="Apellido Paterno" class="f1-first-name form-control3 "
                                           id="f1-first-name" style="width: 100%;font-weight: bolder;color: #0000FF"
                                           value="<?php echo utf8_encode( $row['apellido_pat_prof'])?>">
                                </div>
                            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12" style="display: inline-block;float: right">
                                    <label class="etiquetas" for="f1-first-name">Apellido Materno:</label>
                                    <input type="text" name="apellido_mat_prof" id="apellido_mat_prof" placeholder="Nombre" class="f1-first-name form-control3"
                                           id="f1-first-name" style="width: 100%;font-weight: bolder;color: #0000FF"
                                           value="<?php echo utf8_encode( $row['apellido_mat_prof'])?>">
                                </div>
                            </div>
                                    
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="id" name="id"  value="<?php echo $id?>" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    
                                    
                                    
                                       <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class=" col-lg-offset-5 col-sm-offset-4 col-md-offset-4 ">
                                                <button class="btn btn-danger">Cancelar</button>
                                                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                            </div>
                                        </div>
                             
                                
                            

                        </form>
                                </div>     
                            </div>
                        </div>
                    </div>
                    



                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="../vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="../vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="../vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="../vendors/Flot/jquery.flot.js"></script>
        <script src="../vendors/Flot/jquery.flot.pie.js"></script>
        <script src="../vendors/Flot/jquery.flot.time.js"></script>
        <script src="../vendors/Flot/jquery.flot.stack.js"></script>
        <script src="../vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="../vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="../vendors/moment/min/moment.min.js"></script>
        <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="../build/js/custom.min.js"></script>
        <script src="../js/update/update_matter.js"></script>
        <!--progress bar-->
        <script src="../production/js/bootbox.js"></script>
        <script src="../production/js/bootbox.min.js"></script>

        <!-- Flot -->
        <script>
            $(document).ready(function () {
                var data1 = [
                    [gd(2012, 1, 1), 17],
                    [gd(2012, 1, 2), 74],
                    [gd(2012, 1, 3), 6],
                    [gd(2012, 1, 4), 39],
                    [gd(2012, 1, 5), 20],
                    [gd(2012, 1, 6), 85],
                    [gd(2012, 1, 7), 7]
                ];

                var data2 = [
                    [gd(2012, 1, 1), 82],
                    [gd(2012, 1, 2), 23],
                    [gd(2012, 1, 3), 66],
                    [gd(2012, 1, 4), 9],
                    [gd(2012, 1, 5), 119],
                    [gd(2012, 1, 6), 6],
                    [gd(2012, 1, 7), 9]
                ];
                $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
                    data1, data2
                ], {
                    series: {
                        lines: {
                            show: false,
                            fill: true
                        },
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 0.4
                        },
                        points: {
                            radius: 0,
                            show: true
                        },
                        shadowSize: 2
                    },
                    grid: {
                        verticalLines: true,
                        hoverable: true,
                        clickable: true,
                        tickColor: "#d5d5d5",
                        borderWidth: 1,
                        color: '#fff'
                    },
                    colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
                    xaxis: {
                        tickColor: "rgba(51, 51, 51, 0.06)",
                        mode: "time",
                        tickSize: [1, "day"],
                        //tickLength: 10,
                        axisLabel: "Date",
                        axisLabelUseCanvas: true,
                        axisLabelFontSizePixels: 12,
                        axisLabelFontFamily: 'Verdana, Arial',
                        axisLabelPadding: 10
                    },
                    yaxis: {
                        ticks: 8,
                        tickColor: "rgba(51, 51, 51, 0.06)",
                    },
                    tooltip: false
                });

                function gd(year, month, day) {
                    return new Date(year, month - 1, day).getTime();
                }
            });
        </script>
        <!-- /Flot -->
        
        
                <script>
            $('#myModal').on('shown.bs.modal', function () {
                var progress = setInterval(function () {
                    var $bar = $('.bar');
                    if ($bar.width() == 550) {
                        // complete
                        clearInterval(progress);
                        $('.progress').removeClass('active');
                        $('#myModal').modal('hide');
                        $bar.width(0);
                    } else {
                        // perform processing logic here
                        $bar.width($bar.width() + 50);
                    }

                    $bar.text($bar.width() / 5 + "%");
                }, 720);
            })

        </script>

        <!-- JQVMap -->
        <script>
            $(document).ready(function () {
                $('#world-map-gdp').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#666666',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#E6F2F0', '#149B7E'],
                    normalizeFunction: 'polynomial'
                });
            });
        </script>
        <!-- /JQVMap -->

        <!-- Skycons -->
        <script>
            $(document).ready(function () {
                var icons = new Skycons({
                    "color": "#73879C"
                }),
                        list = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for (i = list.length; i--; )
                    icons.set(list[i], list[i]);

                icons.play();
            });
        </script>
        <!-- /Skycons -->

        <!-- Doughnut Chart -->
        <script>
            $(document).ready(function () {
                var options = {
                    legend: false,
                    responsive: false
                };

                new Chart(document.getElementById("canvas1"), {
                    type: 'doughnut',
                    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                    data: {
                        labels: [
                            "Symbian",
                            "Blackberry",
                            "Other",
                            "Android",
                            "IOS"
                        ],
                        datasets: [{
                                data: [15, 20, 30, 10, 30],
                                backgroundColor: [
                                    "#BDC3C7",
                                    "#9B59B6",
                                    "#E74C3C",
                                    "#26B99A",
                                    "#3498DB"
                                ],
                                hoverBackgroundColor: [
                                    "#CFD4D8",
                                    "#B370CF",
                                    "#E95E4F",
                                    "#36CAAB",
                                    "#49A9EA"
                                ]
                            }]
                    },
                    options: options
                });
            });
        </script>
        <!-- /Doughnut Chart -->

        <!-- bootstrap-daterangepicker -->
        <script>
            $(document).ready(function () {

                var cb = function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                };

                var optionSet1 = {
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment(),
                    minDate: '01/01/2012',
                    maxDate: '12/31/2015',
                    dateLimit: {
                        days: 60
                    },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    opens: 'left',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-small btn-primary',
                    cancelClass: 'btn-small',
                    format: 'MM/DD/YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        cancelLabel: 'Clear',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                };
                $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
                $('#reportrange').daterangepicker(optionSet1, cb);
                $('#reportrange').on('show.daterangepicker', function () {
                    console.log("show event fired");
                });
                $('#reportrange').on('hide.daterangepicker', function () {
                    console.log("hide event fired");
                });
                $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                    console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
                });
                $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                    console.log("cancel event fired");
                });
                $('#options1').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                });
                $('#options2').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                });
                $('#destroy').click(function () {
                    $('#reportrange').data('daterangepicker').remove();
                });
            });
        </script>
        <!-- /bootstrap-daterangepicker -->

        <!-- gauge.js -->
        <script>
            var opts = {
                lines: 12,
                angle: 0,
                lineWidth: 0.4,
                pointer: {
                    length: 0.75,
                    strokeWidth: 0.042,
                    color: '#1D212A'
                },
                limitMax: 'false',
                colorStart: '#1ABC9C',
                colorStop: '#1ABC9C',
                strokeColor: '#F0F3F3',
                generateGradient: true
            };
            var target = document.getElementById('foo'),
                    gauge = new Gauge(target).setOptions(opts);

            gauge.maxValue = 6000;
            gauge.animationSpeed = 32;
            gauge.set(3200);
            gauge.setTextField(document.getElementById("gauge-text"));
        </script>
        <!-- /gauge.js -->
    </body>
</html>