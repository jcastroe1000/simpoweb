

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrar Seminario</title>

        <!-- Bootstrap -->
        <link href="administrator/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="administrator/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="administrator/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="administrator/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="administrator/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="administrator/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="administrator/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="administrator/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="administrator/build/css/custom.min.css" rel="stylesheet">
        <link href="administrator/production/css/fileinput.css" media="all" rel="stylesheet" type="text/css">
        <link href="administrator/production/css/font-face.css" rel="stylesheet" type="text/css">
        
        <script src="administrator/production/js/jquery.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    </head>

    <body class="nav-md">
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
                        <h3>Seminario Creado Exitosamente...</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--Termina modal-->
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
                                <h2></h2>
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
                                    <h2 style="text-align: center;color: black;font-size: 20px;" class="Sansation_Regular">REGISTRAR SEMINARIO</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

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




                            </div>
                        </div>
                    </div>
                </div>    



            </div>

            <!-- jQuery -->
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
            <script src="administrator/production/js/create_user.js" ></script>
                <script src="administrator/production/js/bootbox.js"></script>
                <script src="administrator/production/js/bootbox.min.js"></script>
                <!-- Custom Theme Scripts -->
                <script src="../build/js/custom.min.js"></script>
                <script src="administrator/production/js/plugins/sortable.js" type="text/javascript"></script>
                <script src="administrator/production/js/fileinput.js" type="text/javascript"></script>
                            




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
                    axisLabelFontFamily: 'Verdana, Arial', axisLabelPadding: 10
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
                    
            <!--                        JQVMap -->
                        <script>
        $(document).ready(function (                                    ) {
        $('#world-map-gdp').vectorMa                            p({
                                    map: 'world_e                            n',
                    backgroundColor: nu                                    ll,
                    color: '#fffff                            f',
                    hoverOpacity: 0                                    .7,
                    selectedColor: '#66666                                    6',
                    enableZoom: tr                                    ue,
                    showTooltip: tr                                            ue,
                    values: sample_da                                            ta,
                            scaleColors: ['#E6F2F0', '#149B7E                                            '],
                            normalizeFunction: 'polynomi                                    al'
                                        });
                                    });
                                    </                                script>
                        <!-- /JQVM                               ap -->

                    <!-- Skycons                                                             -->
                    <script>
        $(document).read                              y(fu                            nction () {
        var icons = ne                            w Skycons({
        "co                                    lor"                                            : "#73879C"
            }),
        list = [
                                "clear-day", "clear-night", "part                                    ly-c                                               loudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet",                                   "sno                                                  w", "wind",
                            "fog"
                                                                                       ],
                            i;
                                        for (i = list                                            .len                                    gth; i--; )
                            icons.set(lis                                            t[i]                                            , list[i]);
                                    ic                                            ons.play();
                                    });
                                </                                    script>
                <!-- /S                                                   kyco                                    ns -->

                <!-- Doughnu         t Ch                                    art -->
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

                <!-- bootstra                                            p-daterangepic                                            ker                                             -->
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
                <!-- /bootstrap-date                                                                                                    rangepicker -->
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

                                                        <!                                                                    -- gauge.js -->
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
            limitM                                                                                                          ax: 'false',
            colorStar                                                                                                        t: '#1ABC9C',
                                                colorStop:                                                                                                      '#1ABC9C',
                                                strokeColor                                                                                                                                                                                : '#F0F3F3',
                                                generateGradient:                                                                                          true
            };
                                    v                                                                ar target = document                                                                                                                                                                            .getElementById('foo'),
            gauge = new Gauge(ta                                                                                                                                                               rget).setOptions(opts);
            gauge.maxValue = 6000;
            gau                                                                                                                                             ge.animationSpeed = 32;
            gauge.set(3200);
            gauge.setTextFi                                                            eld(document.getElementById("gauge-text"))                                                                                                                                    ;
                </script>                                                                            
            <!-- Switchery -->
                                                                            <script src="administrator/vendors/switchery/dist/switchery.min.js"></script>
                                                                            <!-- /gauge.js -->
                                                                    </body>
                                                                </html>
