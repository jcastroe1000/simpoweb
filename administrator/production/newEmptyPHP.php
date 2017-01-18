<?php
    include "./model/conection.php";
    error_reporting(E_ALL);
    session_start();
//    if (!isset($_SESSION['user_name'])) {
//        header("Location: admin.php");
//    }       
    
    
    $mail = 'administrator@gmail.com';
    $query3 = "SELECT nombre FROM administrator WHERE email='$mail'";
    $res3 = mysqli_query($mysqli3, $query3);
    $mysqli3->close(); //cerramos la conexió
    $num_row1 = mysqli_num_rows($res3);
    $row1 = mysqli_fetch_array($res3);
    $myuser=$row1['nombre'];
    echo $myuser;
?>

