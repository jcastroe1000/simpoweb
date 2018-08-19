<?php //
    include "config.php";
    session_start();
     error_reporting(0);
    if (isset($_SESSION['sesion_user']) != "") {
        header("Location: index.php");
    }
    if (isset($_POST['btn-login'])) {
        $email = $_POST['email'];
        $pass =$_POST['password'];
        $email = trim($email);
        $query = "SELECT name,surname_p,surname_m  FROM user_register WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($mysqli, $query)or die(mysqli_error());
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
//        if ($row['estatus']== 0 && $num_row >= 1) {
//            echo 'true';
//            
//            $send_email = base64_encode($_POST['email']);
//            header("Location:activacion.php?correo=$send_email");
//        } else if ($row['estatus']== 2 && $num_row >=1 ) {
//           $result='<div class="alert alert-error">Bloqueado</div>';
           
     if ($num_row >= 1) {
            echo 'true';
//            $_SESSION['user_name'] = $row['nombre']. '&nbsp;' .$row['apellido_paterno'] . '&nbsp;'.$row['apellido_materno'] ;
           $_SESSION['sesion_user'] = $row['surname_p'] . '&nbsp;' .$row['surname_m'].'&nbsp;' . $row['name'];
            header("Location:../index.php");
           
        }
        else{
            $result='<div class="alert alert-error">error</div>';
        }
    }
//        error_reporting(0);
//    if (isset($_POST['btn-login_restart'])) {
//        $email = $_POST['usuario'];
//        
//        $email = trim($email);
//        $query = "SELECT nombre,email FROM administradores WHERE email='$email' ";
//        $result = mysqli_query($mysqli, $query)or die(mysqli_error());
//        $num_row = mysqli_num_rows($result);
//        $row = mysqli_fetch_array($result);
//        if ($num_row >= 1) {
//            $user= $row['nombre'];
//            $email_reset= $row['email'];
//            
//             
//            require_once 'model/restart_password.php';
//            $result='<div class="alert alert-success">Por favor consulta tu correo electrónico, hemos enviado un enlace para poder reestabler la contraseña</div>';
//             
//            
//        } else {
//            $result='<div class="alert alert-error">Lo sentimos! el usuario ingresado no existe, intentalo de nuevo</div>';
//      
//        
//        }
//    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <!--<a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>-->
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div><?php echo $result;?></div>
                                <div class="form-group">
                                    <label>Correo Electrónico</label>
                                    <input class="au-input au-input--full" type="email" name="email" id="email" placeholder="Correo Electrónico">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input class="au-input au-input--full" type="password" name="password" id="password" placeholder="Contraseña">
                                </div>
                                <div class="login-checkbox">
                                    <!--<label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>-->
                                    <label style="text-align: center">
                                        <a href="#">Recuperar Contraseña</a>
                                    </label>
                                </div>
                                <button name="btn-login"class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Iniciar Sesión</button>
                               
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->