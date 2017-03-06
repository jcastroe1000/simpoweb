<?php
    include "config.php";
    error_reporting(0);
    session_start();
    if (isset($_SESSION['user_name']) != "") {
       // header("Location: Home.php");
    }
    ?>
   
<?php
if (isset($_POST['btn-login'])) {
        $email = base64_decode($_GET['user']);
        $new_pass = $_POST['pass1'];
        $stmt = $mysqli->prepare("UPDATE Users SET password=? WHERE user=?");
        $stmt->bind_param('ss', $new_pass, $email);
        
        if ($stmt->execute()):
            $result='<div class="alert alert-success">Tu contraseña ha sido reestablecida exitosamente</div>';
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

    <title>Sistema De Administración </title>

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

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form method="post" name="login" id="login" onSubmit="return validarPasswd()">
              <h1>Restaurar Contraseña</h1>
              <div><?php echo $result;?></div>
               <div id="messages_content"></div>
                    <div data-alerts="alerts" data-titles="{'warning': '<em>Warning!</em>'}" data-ids="myid" data-fade="3000"></div>    
              <div>
                  <input type="password"  class="form-control" placeholder="Nueva Contraseña" required="" name="pass1" id="pass1" />
              </div>
              <div>
                  <input type="password" class="form-control" placeholder="Repetir COntraseña" required="" name="pass2" id="pass2"/>
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
                $('#messages_content').html('<div class="alert alert-error">Por favor ingresa tu nueva contraseña</div>');
                return false;
                }
                if (p1 != p2) {
                      
                $('#messages_content').html('<div class="alert alert-error">Las constraseñas no coniciden</div>');
                
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
