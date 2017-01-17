<?php
//PROCESS NEWSLETTER FORM HERE
    



require '../vendor/autoload.php';
    use Mailgun\Mailgun;
//# Instantiate the client.
    $mgClient = new Mailgun('key-4e896b8110f1ceb63b180c87bc225c16');
    $domain = "sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org";
  
//
//# Make the call to the client.
    $email=['tonoescom@gmail.com'];
    $result = $mgClient->sendMessage($domain, array(
        'from' => 'Simpoweb <postmaster@sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org>',
        'to' => $email,
        'subject' => 'Gracias por registrate.',
        'text' => 'Hola.
        ¡Gracias por registrarte con nosotros!
        a través del correo electrónico te enviaremos nuestro newsletter para 
        mantenerte informado sobre nuestras promociones y eventos'
    ));


?>
