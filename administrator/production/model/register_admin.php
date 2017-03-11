<?php

include "../config.php";
error_reporting(E_ALL);

function generateRandomString($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$admin_name = $_GET['name'];
$apellido_pat = $_GET['apellido_paterno'];
$apellido_mat = $_GET['apellido_materno'];
$admin_email = $_GET['email_admin'];
$tem_pass = generateRandomString();
require_once '../model/email_new_admin.php';

$admin_status = 0;
$query1 = "INSERT INTO administrator(nombre,apellido_paterno, apellido_materno, email,password,estatus) "
        . "VALUES ('$admin_email', '$apellido_pat', '$apellido_mat', '$admin_email', '$tem_pass', '$admin_status')";
mysqli_query($mysqli, $query1);

//Cerramos la conexion
$mysqli->close();
?>
