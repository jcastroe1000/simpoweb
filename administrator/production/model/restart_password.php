<?php error_reporting(E_ALL);

use Mailgun\Mailgun;


require 'vendor/autoload.php';
$name = $user;
$email = $email_reset;
$mail_encrypt=  base64_encode($email_reset);


/*JDB */
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
        'from' => 'Administrador <postmaster@sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org>',
        'to' => $send_to,
        'subject' => 'Recuperacion de contraseña',
        'text' => 
        
        'Hola ' . $user . ' 
       
            
        solicitaste recuperar tu password de administrador de la galeria, para poder renovar tu password haz click en el siguiente link:

        
         http://localhost/simpoweb/administrator/production/new_pass.php?user='.$mail_encrypt .'   
         

        Si no solicitaste recuperar tu password, simplemente ignora este email.'
    ));
    
    
    

?>