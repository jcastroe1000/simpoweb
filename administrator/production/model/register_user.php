<?php

header('Content-type: application/json');
include "../config.php";
error_reporting(E_ALL);


$email_contact = $_GET['email_contact'];

$query = "SELECT email FROM user_register WHERE email='$email_contact' ";
$result = mysqli_query($mysqli, $query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($email_contact == $row['email']) {
    $response_array['status'] = 'error';

    echo json_encode($response_array);
} else {
    

    $user__name = $_GET['name'];
$surnames = $_GET['surnames'];
$email_contact = $_GET['email_contact'];
$telephone_contact = $_GET['telephone_contact'];
$password = $_GET['password'];
$date_registration = $_GET['creation_date'];
$gender = $_GET['gender'];

require_once '../model/user_register.php';
require_once '../model/user_register_admin.php';


$query1 = "INSERT INTO user_register(name,surnames,telephone, gender,email,password,creation_date) "
        . "VALUES ('$user__name', '$surnames', '$telephone_contact', '$gender', '$email_contact', '$password','$date_registration')";
mysqli_query($mysqli, $query1);

    $response_array['status'] = 'success';
    echo json_encode($response_array);
//Cerramos la conexion
    $mysqli->close();
}

?>
