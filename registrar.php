<?php
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
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
        
        <script src="js/create_user.js"></script>
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
    </body>
    
</html>


