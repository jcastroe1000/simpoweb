<?php

include("../model/conection.php");
require '../vendor/autoload.php';

use Mailgun\Mailgun;

$name = $_POST['name'];
$lastname = $_POST['apellido_paterno'];
$email = $_POST['email_admin'];
function generateRandomString($length = 20) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$temporal_pass=  generateRandomString();  // OR: generateRandomString(24)
echo $temporal_pass;
$estatus=0;
////# Instantiate the client.
//$mgClient = new Mailgun('key-4e896b8110f1ceb63b180c87bc225c16');
//$domain = "sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org";
//$send=$email;
////
////# Make the call to the client.
//
//
//$result = $mgClient->sendMessage($domain, array(
//    'from' => 'Simpoweb <postmaster@sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org>',
//    'to' => $send,
//    'subject' => 'Binvenido.',
//    'text' => 'Hola' . $name . '
//        ¡Gracias por registrarte con nosotros!
//        '
//        ));
//
//


mysqli_select_db($con, "$dbname");

$query = mysqli_query($con, "INSERT INTO register (nombre,apellidos,email,password,estatus) "
        . "VALUES ('$name','$lastname','$email','$temporal_pass','$estatus')");
mysqli_close($con);
?>