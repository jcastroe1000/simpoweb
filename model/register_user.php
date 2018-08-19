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
    $response_array['status'] = 'exist';

    echo json_encode($response_array);
} else {
    $user__name = $_GET['name'];
    $surname_p = $_GET['surname_p'];
    $surname_m = $_GET['surname_m'];
    $email_contact = $_GET['email_contact'];
    $telephone_contact = $_GET['telephone_contact'];
    $password = crypt($_GET['password'], '$1$somethin$');
    $date_registration = $_GET['creation_date'];
    $gender = $_GET['gender'];

    //require_once '../model/user_register.php';
    //require_once '../model/user_register_admin.php';

    $query2= "INSERT INTO user_register(name,surname_p,surname_m,telephone, gender,email,password,creation_date) "
            . "VALUES ('$user__name', '$surname_p', '$surname_m', '$telephone_contact', '$gender', '$email_contact', '$password','$date_registration')";
    mysqli_query($mysqli, $query2);
    $response_array['status'] = 'success';
    echo json_encode($response_array);
//Cerramos la conexion
    $mysqli->close();
}
?>
