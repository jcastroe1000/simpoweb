<?php error_reporting(E_ALL);
header("Content-Type: text/html;charset=utf-8");


use Mailgun\Mailgun;

require '../vendor/autoload.php';
$name_1 = $_POST['FullName'];
$email_1 = $_POST['email'];
$mensaje = $_POST['message'];
$asunto = $_POST['subject'];

/* Desarrollo */
//$api_key = 'key-eb656047b090ea091ef7c5d2fbd83dc5';
//$api_domain = 'sandbox3bfa1334fbee4dcca5b08a9b34b46337.mailgun.org';
//$send_to = 'desarrolloblick@gmail.com';

/* Cuenta Javier Diaz */

 $api_key = 'key-4e896b8110f1ceb63b180c87bc225c16';
  $api_domain = 'sandbox8128d26fd2464b42a6dc95e54a7cda2a.mailgun.org';
  $send_to = 'tonoescom@gmail.com'; 


$name = $name_1;
$email = $email_1;
$content = $mensaje;
$subject = $asunto;



$messageBody = "De: $name ($email)\n\n $content";

$config = array();
$config['api_key'] = $api_key;
$config['api_url'] = 'https://api.mailgun.net/v2/' . $api_domain . '/messages';

$message = array();
$message['from'] = $email;
$message['to'] = $send_to;
$message['h:Reply-To'] = $email;
$message['subject'] = $subject;
$message['text'] = $messageBody;

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $config['api_url']);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_USERPWD, "api:{$config['api_key']}");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $message);

$result = curl_exec($curl);

curl_close($curl);



//return $result;
$success = true;
echo json_encode(array("success" => $success));
?>