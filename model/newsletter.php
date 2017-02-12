<?php
//PROCESS NEWSLETTER FORM HERE
include("../model/connection.php");
    require '../vendor/autoload.php';
    use Mailgun\Mailgun;

    
    $email= $_POST['email_newsletter'];
    $seccion=$_POST['seccion'];

if(!isset($_POST) || !isset($_POST['email_newsletter']))
{ 
    $msg = 'No data has been received.';
    echo '<div class="alert alert-danger"><p><i class="fa fa-exclamation-triangle"></i> '.$msg.'</p></div>';
    return false;
}

if($_POST['email_newsletter'] == '')
{
    //ERROR: FIELD "email" EMPTY
    $msg = 'Por favor,ingresa un correo valido.';
    echo '<div class="alert alert-danger"><p><i class="fa fa-exclamation-triangle"></i> '.$msg.'</p></div>';
    return false;
}


 //# Instantiate the client.
    $mgClient = new Mailgun('key-4e896b8110f1ceb63b180c87bc225c16');
    $domain = "sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org";
  
//
//# Make the call to the client.
    
//    $result = $mgClient->sendMessage($domain, array(
//        'from' => 'Simpoweb <postmaster@sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org>',
//        'to' => $email,
//        'subject' => 'Gracias por registrate.',
//        'text' => 'Hola.
//        ¡Gracias por registrarte con nosotros!
//        a través del correo electrónico te enviaremos nuestro newsletter para 
//        mantenerte informado sobre nuestras promociones y eventos'
//    ));


//Change database 

$date=date("Y/d/m"); 
$save = mysqli_query($mysqli,"INSERT INTO newsletter (correo_electronico,seccion,fecha_registro) "
                   ."VALUES ('$email','$seccion','$date')" );
$mysqli->close();

//And send success message:
$msg = '¡Gracias por Registrarte,estaremos en contacto contigo!';
echo '<div class="alert alert-success"><p><i class="fa fa-check"></i> '.$msg.'</p></div>';
  



?>
