<?php header("Content-Type: text/html;charset=utf-8");
  include "config.php";
  error_reporting(E_ALL);
  session_start();
  if (!isset($_SESSION['user_name'])) {
      header("Location:login.php");
  }
  $user_name = $_SESSION['user_name'];

 
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrar Curso</title>

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
        <!-- Switchery -->
        <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <link href="../production/css/fileinput.css" media="all" rel="stylesheet" type="text/css">
        <link href="../production/css/font-face.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="../production/js/jquery.js"></script>

    </head>

    <body class="nav-md">
        <div id="cargando" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body" style="text-align: center;padding:20px">
            <h3>Subiendo imagen...</h3>
          </div>
        </div>
      </div>
    </div>
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index4.html" class="site_title"><i class="fa fa-mortar-board"></i> <span>SimpoWeb!</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">

                            <div class="profile_info">
                                <span>Bienvenido (a)</span>
                                <h2><?php echo utf8_encode($user_name);?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a href="services.php"><i class="fa fa-arrow-circle-up"></i> Registro </a></li>

                                    <li><a><i class="fa fa-group"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="users_registers.php"><i class="fa fa-arrow-up"></i>Registrados</a></li>
                                            <li>
                                                <a href="newsletter.php"><i class="fa fa-check-circle"></i>NewsLetter</a></li>
                                        </ul>

                                    </li>



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

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                       <?php echo utf8_encode($user_name);?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">

                                        <li><a href="login.php?logout"><i class="fa fa-sign-out pull-right"></i>Cerrar Sesión</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <!-- top tiles -->

                    <div class="clearfix"></div>
                    <div class="row"  style="padding-top: 1%">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="">
                                    <h2 style="text-align: center;color: black;font-size: 20px;" class="Sansation_Regular">REGISTRAR DIPLOMADO</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <form id="upload_diplomat" name="upload_diplomat"  class="form-horizontal form-label-left">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12 FolksDecoon" for="first-name" style="color: black">Nombre:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="course_name" name="course_name" class="form-control col-md-7 col-xs-12" >
<!--                                                        pattern="[A-Za-z]" title="Solo se permiten letras">-->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12 FolksDecoon" for="last-name" style="color: black">Dirigido a:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="addressed" name="addressed" class="form-control col-md-7 col-xs-12"></textarea>
<!--                                                          pattern="[A-Za-z]" title="Solo se permiten letras"></textarea>-->
                                            </div>
                                        </div>
                                                            <div class="form-group">
                                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12 FolksDecoon" style="color: black">Objetivo:</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="objetive" name="objetive" class="form-control col-md-7 col-xs-12" rows="6" type="text" name="middle-name"></textarea>
<!--                                                          pattern="[A-Za-z]" title="Solo se permiten letras"></textarea>-->
                                            </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-6 FolksDecoon" style="color: black">Duración:</label>
                                            <div class="col-md-33 ">
                                                <input id="time_duration" name="time_duration" class="date-picker form-control col-md-33" type="text"
                                                       pattern="[0-9]" title="Ingresa solo números">
                                            </div>
                                            <label class="control-label col-md-1 col-sm-1 col-xs-1 FolksDecoon" style="color: black">Modalidad:</label>
                                            <div class="col-md-33 ">
                                                <select class="form-control" id="modality" name="modality">
                                                    <option value="">Elije una opción</option>
                                                    <option value="Presencial">Presencial</option>
                                                    <option value="Distancia">Distancia</option>
                                                    <option value="Presencial y/o Distancia">Presencial y/o Distancia</option>
                                                </select>
                                            </div>
                                            
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-6 FolksDecoon" style="color: black">Inicio:</label>
                                            <div class="col-md-33 ">
                                                <input  id="date_start"  name="date_start"  class="date-picker form-control col-md-33" type="date">
                                            </div>
                                            <label class="control-label col-md-1 col-sm-1 col-xs-1 FolksDecoon" style="color: black">Término:</label>
                                            <div class="col-md-33">
                                                <input id="date_finish" name="date_finish" class="date-picker form-control col-md-33" type="date">
                                            </div>
                                            
                                          </div> 
                                           <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-6 FolksDecoon" style="color: black">Costo:</label>
                                            <div class="col-md-33 ">
                                                <input id="cost" name="cost" class="date-picker form-control col-md-33"  type="text"
                                                        pattern="[0-9]" title="Ingresa solo números">
                                            </div>
                                           </div>
                                            <div class="form-group">
                                                <input type="hidden" type="text" class="form-control" name="creation_date" id="creation_date" value="<?php echo date("Y/m/d") ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" type="text" class="form-control" name="created_by" id="created_by" value="<?php echo $user_name?>">
                                            </div>
                                            <div class="form-group">
                                                
                                                 <label class="control-label col-md-3 col-sm-3 col-xs-6 FolksDecoon" style="color: black">Seleccionar archivo: </label>
                                                 <div class="col-md-6">
                                                     <input type="file"  id="course_image" name="course_image" class="file" data-show-preview="false">              
                                                 </div>
                                                 
                                            </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-4">
                                                <button class="btn btn-danger">Cancel</button>
                                                <button type="submit" class="btn btn-success">Añadir</button>
                                            </div>
                                        </div>

                                
                                
                                
                                
                                </form>
                                </div>  



                                
                            </div>
                        </div>
                    </div>
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
            <script src="../production/js/upload_diplomat.js" >
            <script src="../production/js/bootbox.js"></script>
            <script src="../production/js/bootbox.min.js"></script>
            <!-- Custom Theme Scripts -->
            <script src="../build/js/custom.min.js"></script>
            <script src="../production/js/plugins/sortable.js" type="text/javascript"></script>
            <script src="../production/js/fileinput.js" type="text/javascript"></script>
            <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>




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
axisLabelFontFamily: 'Verdana, Arial',                                         axisLabelPadding: 10
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

                <!-- Skycons                                 -->
                                <script>
                            $(document).read                              y(function () {
                      var icons                                                 = new Skycons({
                                        "co                                    lor": "#73879C"
                                                }),
                                                     list = [
                            "clear-day", "clear-night", "part                                    ly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet",                                     "snow", "wind",
                                                      "fog"
                                                       ],
                                                           i;
                                for (i = list                                            .length; i--; )
                                    icons.set(lis                                            t[i], list[i]);
                                                                                  icons.play();
                                                                    });
                                                                          </script>
                <!-- /S                                        kycons -->

                <!-- Doughnu                                        t Chart -->
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
                <!--                                            /Doughnut Chart -->

                <!-- bootstra                                            p-daterangepicker -->
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
                          locale: {                                                                                         applyLabel: 'Submit',
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
        limitM                                            ax: 'false',
        colorStar                                            t: '#1ABC9C',
        colorStop:                                            '#1ABC9C',
        strokeColor                                                    : '#F0F3F3',
                                                                      generateGradient: true
                };
                            v                                                                ar target = document.getElementById('foo'),
                                                                                                gauge = new Gauge(target).setOptions(opts);
                                                                               gauge.maxValue = 6000;
                                                                                   gauge.animationSpeed = 32;
                                                                         gauge.set(3200);
                                gauge.setTextFi                                                            eld(document.getElementById("gauge-text"))                                                            ;
                                <                                                            /script>
                <!-- Switchery -->
                                                            <script src="../vendors/switchery/dist/switchery.min.js"></script>
                                                            <!-- /gauge.js -->
                                                    </body>
                                                </html>
