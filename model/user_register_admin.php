<?php error_reporting(E_ALL);
include("../model/connection.php");
use Mailgun\Mailgun;

require '../vendor/autoload.php';
$name = $user__name.$surnames;
$email = 'tonoescom@gmail.com';




/*Test*/
$api_key = 'key-4e896b8110f1ceb63b180c87bc225c16';
$api_domain = 'sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org';
$send_to = $email;

////# Include the Autoloader (see "Libraries" for install instructions)
//    require '../vendor/autoload.php';
//    use Mailgun\Mailgun;

//# Instantiate the client.
    $mgClient = new Mailgun('key-4e896b8110f1ceb63b180c87bc225c16');
    $domain = "sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org";

//
//# Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from' => 'Nuevo Registro<postmaster@sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org>',
        'to' => $send_to,
        'subject' => 'Nuevo Usuario',
        'text' => 
        
        'Nuevo Usuarios ' . $name . '
        
            
        Gracias por Adquirir Nuestro Libro
        
        ya tenemos tus datos y lo más pronto posible te haremos llegar tu libro'
    ));
    
    
    

?>