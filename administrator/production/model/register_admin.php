<?php

header('Content-type: application/json');
include "../config.php";
error_reporting(E_ALL);


$admin_email = $_GET['email_admin'];

$query = "SELECT email FROM administradores WHERE email='$admin_email' ";
$result = mysqli_query($mysqli, $query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($admin_email == $row['email']) {
    $response_array['status'] = 'error';

    echo json_encode($response_array);
} else {
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
    
    //require_once '../model/email_new_admin.php';

    $admin_status = 0;
    $query1 = "INSERT INTO administradores(nombre,apellido_paterno, apellido_materno, email,password,estatus) "
            . "VALUES ('$admin_name', '$apellido_pat', '$apellido_mat', '$admin_email', '$tem_pass', '$admin_status')";
    mysqli_query($mysqli, $query1);

//Cerramos la conexion
    $mysqli->close();
    $response_array['status'] = 'success';
    echo json_encode($response_array);
}

?>
