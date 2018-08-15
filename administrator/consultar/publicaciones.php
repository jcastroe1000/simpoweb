<?php
header("Content-Type: text/html;charset=utf-8");
include "../config.php";
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location:/simpoweb/administrator/login.php");
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

        <title>Publicaciones Registradas</title>
        <!---->
        
        
    <link href="../file_input/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="../file_input/themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="../file_input/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="../file_input/js/fileinput.js" type="text/javascript"></script>
    <script src="../file_input/js/locales/fr.js" type="text/javascript"></script>
    <script src="../file_input/js/locales/es.js" type="text/javascript"></script>
    <script src="../file_input/themes/explorer-fa/theme.js" type="text/javascript"></script>
    <script src="../file_input/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
        
        <!----->

        <!-- Bootstrap -->
        <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- starrr -->
        <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="../build/css/custom.min.css" rel="stylesheet">
        <!--        <link rel="stylesheet" type="text/css" href="../production/css/dataTables.bootstrap.css">-->
        <link href="../css/font-face.css"  rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="../css/dataTables.css">
        <link rel="stylesheet" type="text/css" href="../css/dataTables.boostrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.1/css/select.bootstrap.min.css">

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
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="../images/img.jpg" alt=""><?php echo utf8_encode($user_name) ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> Profile</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Help</a></li>
                                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">

                            </div>

                            <div class="title_right">

                            </div>
                        </div>

                        <div class="clearfix"><h2 style="text-align: center;color: black;font-size: 25px" class="SourceSansPro-Bold">Publicaciones Registradas</h2></div>

                        <div class="clearfix"><h2 style="text-align: center;color: black;font-size: 25px;padding-top:0px;" class="Sansation_Regular"><a href="../crear/registrar_publicacion.php"><button type="button"  class="btn btn-success"><i class="fa fa-plus"></i> Registrar Publicación</button></a></h2></div>
                        <div style="width: 50%" class="center-block">
                            <?php
                            $m = $_GET['m'];

                            if ($m == 1) {

                                $modal = '<div class="alert alert-success alert-dismissible " role="alert" style="text-align:center" id="ok">
                                            <strong style="font-weight: 900;">Bien! El curso ha sido eliminado exitosamente.</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="opacity: 1;">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>';
                            } elseif ($m == 2) {

                                $modal = '<div class="alert alert-danger alert-dismissible " role="alert" style="text-align:center" id="error">
                                            <strong style="font-weight: 900;">A ocurrido un error, por favor intentalo más tarde</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="opacity: 1;">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>';
                            } elseif ($m != 1 && $m != 2) {

                                $modal = '<div class="alert alert-danger alert-dismissible hide " role="alert" style="text-align:center" id="error">
                                            <strong style="font-weight: 900;">no</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="opacity: 1;">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>';
                            }
                            ?>
                            <?php echo $modal; ?>    
                        </div>
                        <div class="row" style="margin-top: 2%;">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>

                                            <th class="SSansPro-Regular" style="color: black;text-align: center">Nombre de la Publicación</th>
                                            <th class="SSansPro-Regular" style="color: black;text-align: center">Imagen</th>
                                            <th class="SSansPro-Regular" style="color: black;text-align: center">Detalles</th>
                                            <th class="SSansPro-Regular" style="color: black;text-align: center">Eliminar</th>


                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <?php
                                            include "../model/conection.php";
                                            error_reporting(E_ALL);
                                            $res = $mysqli->query("SELECT * from registro_eventos WHERE seccion='publicacion' ");
                                            $mysqli->close();

                                            while ($row = $res->fetch_assoc()):
                                                $id = $row ['id'];
                                                $nombre = $row ['nombre'];
                                                $fecha_creacion = $row ['fecha_creacion'];
                                                ?>

                                                <td class="SourceSansPro-Semibold" style="color: #013ADF;text-align: center;font-size: 14px"><?php echo $nombre ?></td>
                                                <td style="text-align: center"><a href="#<?php echo $row['id'] . 1 ?>"  data-toggle="modal" data-target="#<?php echo $row['id'] . 1 ?>" style="color:green"><i class="fa fa-picture-o fa-2x" aria-hidden="true"></i></a></td>
                                                <td style="text-align: center"><a href="#<?php echo $row['id'] ?>"  data-toggle="modal" data-target="#<?php echo $row['id'] ?>" style="color:green"><i class="fa fa-eye fa-2x" style="font-size: 25px"></i></a></td>
                                                <td style="text-align: center"><a href="#<?php echo $row['id'] . 11 ?>" data-toggle="modal" data-target="#<?php echo $row['id'] . 11 ?>" style="color:red"><i class="fa fa-trash fa-2x" style="font-size: 25px"></i></a></td>

                                            </tr>
                                        <!-- modal imagen-->
                                        <div class="modal fade" id="<?php echo $row['id'] . 1 ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;font-weight: bold">Atención</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                         <img  src="<?php echo $path = '../gallery/album/publication/' . $row['ruta']; ?> "  style="height: 300px; width: 300px" class="center-block">
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-ban-circle"></i>&nbsp;Cerrrar</button>
                                                        <a href="../editar/modificar_imagen_publicacion.php?u=<?php echo $row['id'] ?>"><button type="button" class="btn btn-success"><i class="icon-ok"></i>Edtiar Imagen</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                        <!-- modal eliminar-->
                                        <div class="modal fade" id="<?php echo $row['id'] . 11 ?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel" style="text-align: center;font-weight: bold">Atención</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3 style="text-align: center">¿Estas seguro de eliminar la publicación con el nombre, <strong><?php echo $row['nombre'] ?></strong>?</h3>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-ban-circle"></i>&nbsp;Cerrrar</button>
                                                        <a href="../delete/delete_publication.php?d=<?php echo $row['id'] ?>&f=<?php echo $row['ruta'] ?>"><button type="button" class="btn btn-success"><i class="icon-ok"></i>Aceptar</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        

                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h5 style="text-align: justify;text-transform: uppercase;text-align: center;font-weight: bold"><strong ></strong><?php echo utf8_encode($row['nombre']) ?></h5> 
                                            </div>
                                            <div class="modal-body" style="margin-left: 10px;margin-right: 10px">
                                                <div class="row hide" data-step="1" data-title="This is the first step!">
                                                    <h5 style="text-align: justify"><strong >Resumen:  </strong><?php echo utf8_encode($row['resumen']) ?></h5> 
                                                    <h5 style="text-align: justify"><strong >Dirigido:  </strong><?php echo utf8_encode($row['dirigido']) ?></h5>
                                                    <h5 style="text-align: left"><strong style="text-align: justify">Objetivo:  </strong><?php echo utf8_encode($row['objetivo']) ?></h5>
                                                    <div class="row">
                                                        <div class="col-md-6"><h5 style="text-align: left"><strong style="text-align: justify">Periodo:  </strong><?php echo utf8_encode($row['periodo']) ?></h5></div>
                                                        <div class="col-md-6"><h5 style="text-align: left"><strong style="text-align: justify">Duración:  </strong><?php echo utf8_encode($row['duracion']) ?></h5></div>
                                                    </div>
                                                    <h5 style="text-align: left"><strong style="text-align: justify">Días:  </strong><?php echo utf8_encode($row['dias']) ?></h5>
                                                    <div class="row">
                                                        <div class="col-md-6"><h5 style="text-align: left"><strong style="text-align: justify">Fecha Inicio:  </strong><?php echo utf8_encode($row['fecha_inicio']) ?></h5></div>
                                                        <div class="col-md-6"><h5 style="text-align: left"><strong style="text-align: justify">Fecha Final:  </strong><?php echo utf8_encode($row['fecha_final']) ?></h5></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6"><h5 style="text-align: left"><strong style="text-align: justify">Hora Inicio:  </strong><?php echo utf8_encode($row['hora_inicio']) ?></h5></div>
                                                        <div class="col-md-6"><h5 style="text-align: left"><strong style="text-align: justify">Hora Final:  </strong><?php echo utf8_encode($row['hora_final']) ?></h5></div>
                                                    </div>
                                                </div>
                                                <div class="row hide" data-step="2" data-title="This is the second step!">
                                                    <div class="row">
                                                        <div class="col-md-4"><h5 style="text-align: left"><strong style="text-align: justify">Modalidad:  </strong><?php echo utf8_encode($row['modalidad']) ?></h5></div>
                                                        <div class="col-md-2"><h5 style="text-align: left"><strong style="text-align: justify">Costo:  </strong><?php echo "$" . $row['costo'] ?></h5></div>
                                                        <div class="col-md-6"><h5 style="text-align: left"><strong style="text-align: justify">Método de Pago:  </strong><?php echo utf8_encode($row['metodo_pago']) ?></h5></div>
                                                    </div>
                                                    <h5 style="text-align: justify"> <strong >Requisitos:  </strong><?php echo utf8_encode($row['requisitos']) ?></h5>  
                                                    <h5 style="text-align: justify;"> <strong >Información adicional:  </strong><?php echo utf8_encode($row['informacion_adicional']) ?></h5>    
                                                </div>
                                                <div class="row hide" data-step="3" data-title="This is the last step!">
                                                    <div class="row">
                                                        <h5 style="text-align: justify"><strong style="text-align: justify">Fecha de Creación:  </strong><?php echo utf8_encode($row['fecha_creacion']) ?></h5>
                                                        <h5 style="text-align: justify"><strong style="text-align: justify">Fecha de Modificación:  </strong>
                                                            <?php 
                                                            if(empty($row['fecha_modificacion'])){
                                                                echo 'No se ha modificado'; 
                                                            }elseif($row['fecha_modificacion']!==null){
                                                                echo $row['fecha_modificacion'];
                                                            }else{
                                                            }
                                                            ?>
                                                        </h5>
                                                        <h5 style="text-align: justify"><strong style="text-align: justify">Usuario quien registro:  </strong><?php echo utf8_encode( $row['usuario'] ) ?></h5>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-warning js-btn-step" data-orientation="previous"></button>
                                                <button type="button" class="btn btn-success js-btn-step" data-orientation="next"></button>
                                                <button type="button" class="btn btn-info" data-orientation="next"><a href="../editar/modificar_curso.php?u=<?php echo $row['id'] ?>">Editar</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
                                <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                                <script src="../js/modal-steps.min.js"></script>
                                <script>
                                                        $('#<?php echo $row['id'] ?>').modalSteps();
                                </script>
                                <script type="text/javascript">

                                    var _gaq = _gaq || [];
                                    _gaq.push(['_setAccount', 'UA-36251023-1']);
                                    _gaq.push(['_setDomainName', 'jqueryscript.net']);
                                    _gaq.push(['_trackPageview']);

                                    (function () {
                                        var ga = document.createElement('script');
                                        ga.type = 'text/javascript';
                                        ga.async = true;
                                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                        var s = document.getElementsByTagName('script')[0];
                                        s.parentNode.insertBefore(ga, s);
                                    })();

                                </script>

                                <?php
                            endwhile;
                            ?>



                            </tbody>

                            </table>
                        </div>
                    </div> 


                    <!-- footer content -->

                    <!-- /footer content -->
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
            <!-- bootstrap-progressbar -->
            <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
            <!-- iCheck -->
            <script src="../vendors/iCheck/icheck.min.js"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="../vendors/moment/min/moment.min.js"></script>
            <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
            <!-- bootstrap-wysiwyg -->
            <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
            <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
            <script src="../vendors/google-code-prettify/src/prettify.js"></script>
            <!-- jQuery Tags Input -->
            <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
            <!-- Switchery -->
            <script src="../vendors/switchery/dist/switchery.min.js"></script>
            <!-- Select2 -->
            <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
            <!-- Parsley -->
            <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
            <!-- Autosize -->
            <script src="../vendors/autosize/dist/autosize.min.js"></script>
            <!-- jQuery autocomplete -->
            <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
            <!-- starrr -->
            <script src="../vendors/starrr/dist/starrr.js"></script>

            <!-- Custom Theme Scripts -->
            <script src="../build/js/custom.min.js"></script>

            <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
            <script type="text/javascript" charset="utf8" src="../js/dataTables.js"></script>

            <!-- bootstrap-daterangepicker -->
            <script>
                                $(document).ready(function () {
                                    $('#birthday').daterangepicker({
                                        singleDatePicker: true,
                                        calender_style: "picker_4"
                                    }, function (start, end, label) {
                                        console.log(start.toISOString(), end.toISOString(), label);
                                    });
                                });
            </script>
            <!-- /bootstrap-daterangepicker -->

            <!-- bootstrap-wysiwyg -->
            <script>
                $(document).ready(function () {
                    function initToolbarBootstrapBindings() {
                        var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                            'Times New Roman', 'Verdana'
                        ],
                                fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                        $.each(fonts, function (idx, fontName) {
                            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                        });
                        $('a[title]').tooltip({
                            container: 'body'
                        });
                        $('.dropdown-menu input').click(function () {
                            return false;
                        })
                                .change(function () {
                                    $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                                })
                                .keydown('esc', function () {
                                    this.value = '';
                                    $(this).change();
                                });

                        $('[data-role=magic-overlay]').each(function () {
                            var overlay = $(this),
                                    target = $(overlay.data('target'));
                            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                        });

                        if ("onwebkitspeechchange" in document.createElement("input")) {
                            var editorOffset = $('#editor').offset();

                            $('.voiceBtn').css('position', 'absolute').offset({
                                top: editorOffset.top,
                                left: editorOffset.left + $('#editor').innerWidth() - 35
                            });
                        } else {
                            $('.voiceBtn').hide();
                        }
                    }

                    function showErrorAlert(reason, detail) {
                        var msg = '';
                        if (reason === 'unsupported-file-type') {
                            msg = "Unsupported format " + detail;
                        } else {
                            console.log("error uploading file", reason, detail);
                        }
                        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                    }

                    initToolbarBootstrapBindings();

                    $('#editor').wysiwyg({
                        fileUploadError: showErrorAlert
                    });

                    window.prettyPrint;
                    prettyPrint();
                });
            </script>
            <!-- /bootstrap-wysiwyg -->
            <script>
                $(document).ready(function () {
                    $('#example').DataTable({
                        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
                    });
                });
            </script>
            <!-- Select2 -->
            <script>
                $(document).ready(function () {
                    $(".select2_single").select2({
                        placeholder: "Select a state",
                        allowClear: true
                    });
                    $(".select2_group").select2({});
                    $(".select2_multiple").select2({
                        maximumSelectionLength: 4,
                        placeholder: "With Max Selection limit 4",
                        allowClear: true
                    });
                });
            </script>
            <!-- /Select2 -->

            <!-- jQuery Tags Input -->
            <script>
                function onAddTag(tag) {
                    alert("Added a tag: " + tag);
                }

                function onRemoveTag(tag) {
                    alert("Removed a tag: " + tag);
                }

                function onChangeTag(input, tag) {
                    alert("Changed a tag: " + tag);
                }

                $(document).ready(function () {
                    $('#tags_1').tagsInput({
                        width: 'auto'
                    });
                });
            </script>
            <!-- /jQuery Tags Input -->

            <!-- Parsley -->
            <script>
                $(document).ready(function () {
                    $.listen('parsley:field:validate', function () {
                        validateFront();
                    });
                    $('#demo-form .btn').on('click', function () {
                        $('#demo-form').parsley().validate();
                        validateFront();
                    });
                    var validateFront = function () {
                        if (true === $('#demo-form').parsley().isValid()) {
                            $('.bs-callout-info').removeClass('hidden');
                            $('.bs-callout-warning').addClass('hidden');
                        } else {
                            $('.bs-callout-info').addClass('hidden');
                            $('.bs-callout-warning').removeClass('hidden');
                        }
                    };
                });

                $(document).ready(function () {
                    $.listen('parsley:field:validate', function () {
                        validateFront();
                    });
                    $('#demo-form2 .btn').on('click', function () {
                        $('#demo-form2').parsley().validate();
                        validateFront();
                    });
                    var validateFront = function () {
                        if (true === $('#demo-form2').parsley().isValid()) {
                            $('.bs-callout-info').removeClass('hidden');
                            $('.bs-callout-warning').addClass('hidden');
                        } else {
                            $('.bs-callout-info').addClass('hidden');
                            $('.bs-callout-warning').removeClass('hidden');
                        }
                    };
                });
                try {
                    hljs.initHighlightingOnLoad();
                } catch (err) {
                }
            </script>
            <!-- /Parsley -->

            <!-- Autosize -->
            <script>
                $(document).ready(function () {
                    autosize($('.resizable_textarea'));
                });
            </script>
            <!-- /Autosize -->

            <!-- jQuery autocomplete -->
            <script>
                $(document).ready(function () {
                    var countries = {AD: "Andorra", A2: "Andorra Test", AE: "United Arab Emirates", AF: "Afghanistan", AG: "Antigua and Barbuda", AI: "Anguilla", AL: "Albania", AM: "Armenia", AN: "Netherlands Antilles", AO: "Angola", AQ: "Antarctica", AR: "Argentina", AS: "American Samoa", AT: "Austria", AU: "Australia", AW: "Aruba", AX: "Åland Islands", AZ: "Azerbaijan", BA: "Bosnia and Herzegovina", BB: "Barbados", BD: "Bangladesh", BE: "Belgium", BF: "Burkina Faso", BG: "Bulgaria", BH: "Bahrain", BI: "Burundi", BJ: "Benin", BL: "Saint Barthélemy", BM: "Bermuda", BN: "Brunei", BO: "Bolivia", BQ: "British Antarctic Territory", BR: "Brazil", BS: "Bahamas", BT: "Bhutan", BV: "Bouvet Island", BW: "Botswana", BY: "Belarus", BZ: "Belize", CA: "Canada", CC: "Cocos [Keeling] Islands", CD: "Congo - Kinshasa", CF: "Central African Republic", CG: "Congo - Brazzaville", CH: "Switzerland", CI: "Côte d’Ivoire", CK: "Cook Islands", CL: "Chile", CM: "Cameroon", CN: "China", CO: "Colombia", CR: "Costa Rica", CS: "Serbia and Montenegro", CT: "Canton and Enderbury Islands", CU: "Cuba", CV: "Cape Verde", CX: "Christmas Island", CY: "Cyprus", CZ: "Czech Republic", DD: "East Germany", DE: "Germany", DJ: "Djibouti", DK: "Denmark", DM: "Dominica", DO: "Dominican Republic", DZ: "Algeria", EC: "Ecuador", EE: "Estonia", EG: "Egypt", EH: "Western Sahara", ER: "Eritrea", ES: "Spain", ET: "Ethiopia", FI: "Finland", FJ: "Fiji", FK: "Falkland Islands", FM: "Micronesia", FO: "Faroe Islands", FQ: "French Southern and Antarctic Territories", FR: "France", FX: "Metropolitan France", GA: "Gabon", GB: "United Kingdom", GD: "Grenada", GE: "Georgia", GF: "French Guiana", GG: "Guernsey", GH: "Ghana", GI: "Gibraltar", GL: "Greenland", GM: "Gambia", GN: "Guinea", GP: "Guadeloupe", GQ: "Equatorial Guinea", GR: "Greece", GS: "South Georgia and the South Sandwich Islands", GT: "Guatemala", GU: "Guam", GW: "Guinea-Bissau", GY: "Guyana", HK: "Hong Kong SAR China", HM: "Heard Island and McDonald Islands", HN: "Honduras", HR: "Croatia", HT: "Haiti", HU: "Hungary", ID: "Indonesia", IE: "Ireland", IL: "Israel", IM: "Isle of Man", IN: "India", IO: "British Indian Ocean Territory", IQ: "Iraq", IR: "Iran", IS: "Iceland", IT: "Italy", JE: "Jersey", JM: "Jamaica", JO: "Jordan", JP: "Japan", JT: "Johnston Island", KE: "Kenya", KG: "Kyrgyzstan", KH: "Cambodia", KI: "Kiribati", KM: "Comoros", KN: "Saint Kitts and Nevis", KP: "North Korea", KR: "South Korea", KW: "Kuwait", KY: "Cayman Islands", KZ: "Kazakhstan", LA: "Laos", LB: "Lebanon", LC: "Saint Lucia", LI: "Liechtenstein", LK: "Sri Lanka", LR: "Liberia", LS: "Lesotho", LT: "Lithuania", LU: "Luxembourg", LV: "Latvia", LY: "Libya", MA: "Morocco", MC: "Monaco", MD: "Moldova", ME: "Montenegro", MF: "Saint Martin", MG: "Madagascar", MH: "Marshall Islands", MI: "Midway Islands", MK: "Macedonia", ML: "Mali", MM: "Myanmar [Burma]", MN: "Mongolia", MO: "Macau SAR China", MP: "Northern Mariana Islands", MQ: "Martinique", MR: "Mauritania", MS: "Montserrat", MT: "Malta", MU: "Mauritius", MV: "Maldives", MW: "Malawi", MX: "Mexico", MY: "Malaysia", MZ: "Mozambique", NA: "Namibia", NC: "New Caledonia", NE: "Niger", NF: "Norfolk Island", NG: "Nigeria", NI: "Nicaragua", NL: "Netherlands", NO: "Norway", NP: "Nepal", NQ: "Dronning Maud Land", NR: "Nauru", NT: "Neutral Zone", NU: "Niue", NZ: "New Zealand", OM: "Oman", PA: "Panama", PC: "Pacific Islands Trust Territory", PE: "Peru", PF: "French Polynesia", PG: "Papua New Guinea", PH: "Philippines", PK: "Pakistan", PL: "Poland", PM: "Saint Pierre and Miquelon", PN: "Pitcairn Islands", PR: "Puerto Rico", PS: "Palestinian Territories", PT: "Portugal", PU: "U.S. Miscellaneous Pacific Islands", PW: "Palau", PY: "Paraguay", PZ: "Panama Canal Zone", QA: "Qatar", RE: "Réunion", RO: "Romania", RS: "Serbia", RU: "Russia", RW: "Rwanda", SA: "Saudi Arabia", SB: "Solomon Islands", SC: "Seychelles", SD: "Sudan", SE: "Sweden", SG: "Singapore", SH: "Saint Helena", SI: "Slovenia", SJ: "Svalbard and Jan Mayen", SK: "Slovakia", SL: "Sierra Leone", SM: "San Marino", SN: "Senegal", SO: "Somalia", SR: "Suriname", ST: "São Tomé and Príncipe", SU: "Union of Soviet Socialist Republics", SV: "El Salvador", SY: "Syria", SZ: "Swaziland", TC: "Turks and Caicos Islands", TD: "Chad", TF: "French Southern Territories", TG: "Togo", TH: "Thailand", TJ: "Tajikistan", TK: "Tokelau", TL: "Timor-Leste", TM: "Turkmenistan", TN: "Tunisia", TO: "Tonga", TR: "Turkey", TT: "Trinidad and Tobago", TV: "Tuvalu", TW: "Taiwan", TZ: "Tanzania", UA: "Ukraine", UG: "Uganda", UM: "U.S. Minor Outlying Islands", US: "United States", UY: "Uruguay", UZ: "Uzbekistan", VA: "Vatican City", VC: "Saint Vincent and the Grenadines", VD: "North Vietnam", VE: "Venezuela", VG: "British Virgin Islands", VI: "U.S. Virgin Islands", VN: "Vietnam", VU: "Vanuatu", WF: "Wallis and Futuna", WK: "Wake Island", WS: "Samoa", YD: "People's Democratic Republic of Yemen", YE: "Yemen", YT: "Mayotte", ZA: "South Africa", ZM: "Zambia", ZW: "Zimbabwe", ZZ: "Unknown or Invalid Region"};

                    var countriesArray = $.map(countries, function (value, key) {
                        return {
                            value: value,
                            data: key
                        };
                    });

                    // initialize autocomplete with custom appendTo
                    $('#autocomplete-custom-append').autocomplete({
                        lookup: countriesArray
                    });
                });
            </script>
            <!-- /jQuery autocomplete -->

            <!-- Starrr -->
            <script>
                $(document).ready(function () {
                    $(".stars").starrr();

                    $('.stars-existing').starrr({
                        rating: 4
                    });

                    $('.stars').on('starrr:change', function (e, value) {
                        $('.stars-count').html(value);
                    });

                    $('.stars-existing').on('starrr:change', function (e, value) {
                        $('.stars-count-existing').html(value);
                    });
                });
            </script>


            <!-- /Starrr -->
    </body>
</html>
