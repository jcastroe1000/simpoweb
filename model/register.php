<?php

include("../model/connection.php");
require '../vendor/autoload.php';

use Mailgun\Mailgun;

$name = $_POST['FullName'];
$lastname = $_POST['LastName'];
$email = $_POST['email_contact'];
$telephone = $_POST['telephone_contact'];
$gender = $_POST['gender'];
$city = $_POST['city'];
//# Instantiate the client.
$mgClient = new Mailgun('key-4e896b8110f1ceb63b180c87bc225c16');
$domain = "sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org";
$send=$email;
//
//# Make the call to the client.


$result = $mgClient->sendMessage($domain, array(
    'from' => 'Simpoweb <postmaster@sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org>',
    'to' => $send,
    'subject' => 'Binvenido.',
    'text' => 'Hola' . $name . '
        ¡Gracias por registrarte con nosotros!
        '
        ));





//mysqli_select_db($con, "$dbname");
//
//$query = mysqli_query($con, "INSERT INTO register (nombre,apellidos,email,telefono,genero,ciudad) VALUES ('$name','$lastname','$email','$telephone','$gender','$city')");
//mysqli_close($con);
?>