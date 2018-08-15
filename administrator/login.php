<?php
    include "config.php";
    session_start();
     error_reporting(0);
    if (isset($_SESSION['user_name']) != "") {
        header("Location: index.php");
    }
    if (isset($_POST['btn-login'])) {
        $email = $_POST['email'];
        $pass =$_POST['pass'];
        $email = trim($email);
        $query = "SELECT nombre,apellido_paterno,apellido_materno,estatus,email FROM administradores WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($mysqli, $query)or die(mysqli_error());
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($row['estatus']== 0 && $num_row >= 1) {
            echo 'true';
            
            $send_email = base64_encode($_POST['email']);
            header("Location:activacion.php?correo=$send_email");
        } else if ($row['estatus']== 2 && $num_row >=1 ) {
           $result='<div class="alert alert-error">Bloqueado</div>';
           
        } else if ($num_row >= 1) {
            echo 'true';
//            $_SESSION['user_name'] = $row['nombre']. '&nbsp;' .$row['apellido_paterno'] . '&nbsp;'.$row['apellido_materno'] ;
            $_SESSION['user_name'] = $row['apellido_paterno'] . '&nbsp;' .$row['apellido_materno'].'&nbsp;' . $row['nombre'];
            header("Location:index.php");
           
        }
        else{
            $result='<div class="alert alert-error">error</div>';
        }
    }
        error_reporting(0);
    if (isset($_POST['btn-login_restart'])) {
        $email = $_POST['usuario'];
        
        $email = trim($email);
        $query = "SELECT nombre,email FROM administradores WHERE email='$email' ";
        $result = mysqli_query($mysqli, $query)or die(mysqli_error());
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($num_row >= 1) {
            $user= $row['nombre'];
            $email_reset= $row['email'];
            
             
            require_once 'model/restart_password.php';
            $result='<div class="alert alert-success">Por favor consulta tu correo electrónico, hemos enviado un enlace para poder reestabler la contraseña</div>';
             
            
        } else {
            $result='<div class="alert alert-error">Lo sentimos! el usuario ingresado no existe, intentalo de nuevo</div>';
      
        
        }
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
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form method="post" name="login" id="login">
              <h1>Acceso al Sistema</h1>
              <div><?php echo $result;?></div>
              <div>
                  <input type="text"  class="form-control" placeholder="Correo Electrónico" required="" name="email" id="email" />
              </div>
              <div>
                  <input type="password" class="form-control" placeholder="Contraseña" required="" name="pass" id="pass"/>
              </div>
              <div>
                  <button type="submit" class="btn btn-primary" name="btn-login" id="btn-login">Iniciar Sesión</button>
                <a class="reset_pass" href="#signup">Restaurar Contraseña</a>
              </div>

              <div class="clearfix"></div>

              
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
              <form  method="post">
              <h1>Restaurar Contraseña</h1>
              <div > <?php echo $result; ?></div>
              <div>
                  <input type="text" class="form-control" placeholder="Usuario" required="" name="usuario" id="usuario"/>
              </div>
              
              <div>
                <button type="submit" class="btn btn-primary" name="btn-login_restart" id="btn-login_restart">Iniciar Sesión</button>
              </div>

              <div class="clearfix"></div>

              
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
