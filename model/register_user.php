<?php

header('Content-type: application/json');
include "../config.php";
error_reporting(E_ALL);
//
//
//$admin_email = $_GET['email_admin'];
//
//$query = "SELECT email FROM administrator WHERE email='$admin_email' ";
//$result = mysqli_query($mysqli, $query)or die(mysqli_error());
//$num_row = mysqli_num_rows($result);
//$row = mysqli_fetch_array($result);
//if ($admin_email == $row['email']) {
//    $response_array['status'] = 'error';
//
//    echo json_encode($response_array);
//} else {
//    $response_array['status'] = 'success';
//    echo json_encode($response_array);
//
//    function generateRandomString($length = 15) {
//        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//        $charactersLength = strlen($characters);
//        $randomString = '';
//        for ($i = 0; $i < $length; $i++) {
//            $randomString .= $characters[rand(0, $charactersLength - 1)];
//        }
//        return $randomString;
//    }
//
//    $admin_name = $_GET['name'];
//    $apellido_pat = $_GET['apellido_paterno'];
//    $apellido_mat = $_GET['apellido_materno'];
//    $admin_email = $_GET['email_admin'];
//    $tem_pass = generateRandomString();
//    
//    require_once '../model/email_new_admin.php';
//
//    $admin_status = 0;
//    $query1 = "INSERT INTO administrator(nombre,apellido_paterno, apellido_materno, email,password,estatus) "
//            . "VALUES ('$admin_name', '$apellido_pat', '$apellido_mat', '$admin_email', '$tem_pass', '$admin_status')";
//    mysqli_query($mysqli, $query1);
//
////Cerramos la conexion
//    $mysqli->close();
//}
//function generateRandomString($length = 15) {
//    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//    $charactersLength = strlen($characters);
//    $randomString = '';
//    for ($i = 0; $i < $length; $i++) {
//        $randomString .= $characters[rand(0, $charactersLength - 1)];
//    }
//    return $randomString;
//}
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

//Cerramos la conexion
$mysqli->close();
?>
