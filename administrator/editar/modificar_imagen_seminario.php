<?php
header("Content-Type: text/html;charset=utf-8");
include "../config.php";
$id_course= $_GET['u'];
$id_image=$_GET['i'];
error_reporting(E_ALL);
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location:/simpoweb/administrator/login.php");
}
$user_name = utf8_encode($_SESSION['user_name']);



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

        <link href="../file_input/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="../file_input/themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="../file_input/js/plugins/sortable.js" type="text/javascript"></script>
        <script src="../file_input/js/fileinput.js" type="text/javascript"></script>
        <script src="../file_input/js/locales/fr.js" type="text/javascript"></script>
        <script src="../file_input/js/locales/es.js" type="text/javascript"></script>
        <script src="../file_input/themes/explorer-fa/theme.js" type="text/javascript"></script>
        <script src="../file_input/themes/fa/theme.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
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

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <!-- bootstrap-progressbar -->
        <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../form-wizard/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../form-wizard/css/form-elements.css">
        <link rel="stylesheet" href="../form-wizard/css/style.css">
        <!-- Latest compiled and minified CSS -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!--Multiselect-->
        <link rel="stylesheet" href="../dist/css/bootstrap-select.css">
        <script src="../dist/js/bootstrap-select.js" defer></script>







    </head>

    <body class="nav-md">
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
                            <div class="profile_pic center-block">
                                <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Bienvenido</span>
                                <h2><?php echo $user_name ?></h2>
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
                                            <li><a href="newsletter.php"><i class="fa fa-envelope"></i>NewsLetter</a></li>
                                            <li><a href="operadores.php"><i class="fa fa-users"></i>Operadores</a></li>
                                        </ul>

                                    </li>
                                    <li><a><i class="fa fa-cogs"></i>Servicios <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">

                                            <li>
                                                <a href="seminarios.php"><i class="fa fa-mortar-board"></i> Seminarios</a>
                                            </li>
                                            <li>
                                                <a href="simposiums.php"><i class="fa fa-mortar-board"></i> Simposium</a>
                                            </li>
                                            <li>
                                                <a href="talleres.php"><i class="fa fa-laptop"></i> Talleres </a>
                                            </li>
                                            <li>
                                                <a href="cursos.php"><i class="fa fa-briefcase"></i> Cursos </a>
                                            </li>
                                            <li>
                                                <a href="diplomados.php"><i class="fa fa-university"></i> Diplomados </a>
                                            </li>
                                            <li>
                                                <a href="servicios_empresariales.php"><i class="fa fa-mortar-board"></i> Servicios Empresariales</a>
                                            </li>
                                            <li>
                                                <a href="publicaciones.php"><i class="fa fa-mortar-board"></i> Publicaciones</a>
                                            </li>

                                        </ul>
                                    </li>


                                    <li><a><i class="fa fa-plus-square"></i> Extras<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html"><i class="fa fa-book"></i>Directorio</a></li>
                                            <li><a href="faqs.php"><i class="fa fa-question-circle"></i> FAQ'S</a></li>        
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
                            <a data-toggle="modal" data-target="#myProfile"  data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu" >
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle" ><i class="fa fa-bars" style="padding-bottom: 10px;" ></i></a>
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
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-clock-o"></i> Por favor espera</h4>
                                </div>
                                <div class="modal-body center-block">
                                    <p>Reemplazando imagen ...</p>
                                    <div class="progress">
                                        <div class="progress-bar bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">

                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <div id="cargando" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body" style="text-align: center;padding:20px">
                                    <h3>La imagen se reemplazo con éxito </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-11 col-sm-offset-1 col-md-9 col-md-offset-3 col-lg-6 col-lg-offset-3 form-box" style="height: 100%" >
                                <div class="container kv-main">
                                    <div class="page-header">
                                        <h1 style="text-align: center">Reemplazar Imagen</h1>
                                    </div>
                                    <form  id="update_image_seminar" name="update_image_seminar">
                                        <div class="form-group">
                                            <label class="etiquetas" for="f1-first-name">Selecciona una imagen:</label>
                                            <input type="file"  id="file_image" name="file_image" class="f1-first-name file" data-show-preview="false"
                                                   style="display: inline-table;width: 100%" placeholder="Selecciona una imagen">
                                            
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-default">Recargar</button>
                                        
                                          <div class="form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12 FolksDecoon" for="first-name" style="color: black"> </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="hidden" id="id_course" name="id_course"  value="<?php echo $id_course ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                     
                                </div>
                                                       <div class="form-group" >
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12 FolksDecoon" for="first-name" style="color: black"> </label>
                                   
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="hidden" id="id_image_d" name="id_image_d"  value="<?php echo $id_image ?>" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /top tiles -->
                    <br />       


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

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js" defer></script>  

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


        <script src="../form-wizard/bootstrap/js/bootstrap.min.js"></script>
        <script src="../form-wizard/js/jquery.backstretch.min.js"></script>
        <script src="../form-wizard/js/retina-1.1.0.min.js"></script>
        <script src="../form-wizard/js/scripts.js"></script>

        <script src="../js/update/update_image_seminar.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- Flot -->
        <script src="../js/bootbox.js" type="text/javascript"></script>
        <script src="../js/bootbox.min.js" type="text/javascript">
<!--fileinput-->
            <script src="../js/plugins/sortable.min.js"></script>
            <!-- purify plugin for safe rendering HTML content in preview -->
            <script src="../js/plugins/purify.min.js"></script>





            <!-- Process Bar-->
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
        
        <script>
                                $('#file-fr').fileinput({
                                    theme: 'fa',
                                    language: 'fr',
                                            uploadUrl: '#',
                                            allowedFileExtensions: ['jpg', 'png', 'gif']
                                });
                                $('#file-es').fileinput({
                                            theme: 'fa',
                                    language: 'es',
                                            uploadUrl: '#',
                                            allowedFileExtensions: ['jpg', 'png', 'gif']
                                });
                                    $("#file-0").fileinput({
                                            theme: 'fa',
                                    'allowedFileExtensions': ['jpg', 'png', 'gif']
                                });
                                $("#file-1").fileinput({
                                            theme: 'fa',
                                            uploadUrl: '#', // you must set a valid URL here else you will get an error
                                            allowedFileExtensions: ['jpg', 'png', 'gif'],
                                            overwriteInitial: false,
                                            maxFileSize: 1000,
                                            maxFilesNum: 10,
                                            allowedFileTypes: ['image', 'video', 'flash'],
                                    slugCallback: function (filename) {
                                            return filename.replace('(', '_').replace(']', '_');
                                    }
                                                    });
                            
                                                    $(".file").on('fileselect', function(event, n, l) {
                                                    // alert('File Selected. Name: ' + l + ', Num: ' + n);
                                                });
                        
                                                $("#file-3").fileinput({
                                                    theme: 'fa',
                                                    showUpload: false,
                                                    showCaption: false,
                                                    browseClass: "btn btn-primary btn-lg",
                                    fileType: "any",
                                                        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
                                                    overwriteInitial: false,
                                                    initialPreviewAsData: false,
                                                    initialPreview: [
                                                        "../img/invex.jpg"

                                                    ],
                                                    initialPreviewConfig: [
                                                        //  {caption: "transport-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},

                                                        ]
                                                        });
                                                        $("#file-4").fileinput({                       theme: 'fa',
                                                    uploadExtraData: {kvId: '10'}
                                                                });
                                                                    $(".btn-warning").on('click', function () {
                                                        var $el = $("#file-4");
                                                    if ($el.attr('disabled')) {
                                                    $el.fileinput('enable');
                                                                    } else {
                                                            $el.fileinput('disable');
                                                                }
                                                            });
                                                            $(".btn-info").on('click', function () {
                                                            $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
                                                                    });
                                
                                                                        $('#file-4').on('fileselectnone', function() {
                                                            alert('Huh! You selected no files.');
                                                                        });
                                                                        $('#file-4').on('filebrowse', function() {
                                                            alert('File browse clicked for #file-4');
                                                                        });
                                                
                                                                        $(document).ready(function () {
                                                            $("#test-upload").fileinput({
                                                    'theme': 'fa',
                                                            'showPreview': false,
                                                            'allowedFileExtensions': ['jpg', 'png', 'gif'],
                                                            'elErrorContainer': '#errorBlock'
                                                                        });
                                                                    $("#kv-explorer").fileinput({
                                                            'theme': 'explorer-fa',
                                                            'uploadUrl': '#',
                                                            overwriteInitial: true,
                                                            initialPreviewAsData: true,
                                                            initialPreview: [
                                                                    "<?php echo $path = '../gallery/album/seminar/' . $row['ruta']; ?> "

                                                            ],
                                                            initialPreviewConfig: [
                                                                    // {caption: "<?php echo $row['nombre']; ?> ", url: "{<?php echo $path = '../gallery/album/seminar/' . $row['ruta']; ?> }", key: 1}

                                                            ]
                                                            });
                                    
                                        
                                        
                                                                    });
                            </script>

                        </body>
                    </html>
