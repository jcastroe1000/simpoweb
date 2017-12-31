<?php
    include "config.php";
    error_reporting(0);
    
    ?>
   
<?php
if (isset($_POST['btn-login'])) {
        $email = base64_decode($_GET['correo']);
        $new_pass = $_POST['pass1'];
        $status=1;
        $stmt = $mysqli->prepare("UPDATE administradores SET password=?,estatus=?  WHERE email=?");
        $stmt->bind_param('sss', $new_pass,$status, $email);
        
        if ($stmt->execute()):
 
           $result='<div class="alert alert-success">Contraseña actualizada,Ingresa con tu nueva contraseña</div>';
           header( "refresh:3;url=index.php" );
            
        else:
            $result='<div class="alert alert-error">Lo sentimos! Por el momento no podemos procesar tu solicitud, intentalo más tarde</div>';
        endif;
        
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenido </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../production/js/bootbox.js"></script>
    <script src="../production/js/bootbox.min.js"></script>
    
   

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form method="post" name="login" id="login" onSubmit="return validarPasswd()">
              <h1>Bienvenido</h1>
              <h5 id="msg">Este es tu primer inicio de sesión, para continuar debes cambiar tu contraseña temporal</h5>
              <div><?php echo $result;?></div>
               <div id="messages_content"></div>
                    <div data-alerts="alerts" data-titles="{'warning': '<em>Warning!</em>'}" data-ids="myid" data-fade="3000"></div>    
              <div>
                  <input type="password"  class="form-control" placeholder="Nueva Contraseña"  name="pass1" id="pass1" />
              </div>
              <div>
                  <input type="password" class="form-control" placeholder="Repetir Contraseña"  name="pass2" id="pass2"/>
              </div>
              <div>
                  <button type="submit" class="btn btn-success" name="btn-login" id="btn-login">Guardar Cambios</button>
                
              </div>

              <div class="clearfix"></div>

              
            </form>
          </section>
        </div>
                      <script type="text/javascript">
            function validarPasswd (){
                var p1 = document.getElementById("pass1").value;
                var p2 = document.getElementById("pass2").value;
                if (p1.length == 0 || p2.length == 0) {
                $("#msg").hide();      
                $('#messages_content').html('<div class="alert alert-error">Por favor ingresa tu nueva contraseña</div>');
                return false;
                }
                if (p1 != p2) {
                $("#msg").hide();      
                $('#messages_content').html('<div class="alert alert-error">Las constraseñas no coniciden,intentalo de nuevo</div>');
                  document.querySelector("form").reset();
                
  return false;
} else {
  
  return true; 
}
                
            }
            
            </script>
 
        
      </div>
    </div>
  </body>
</html>
