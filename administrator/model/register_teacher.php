<?php
    header("Content-Type: text/html;charset=utf-8");
    include "../config.php";
    error_reporting(E_ALL);
    $name_teacher = utf8_decode($_GET['name']);
    $last_name_p = utf8_decode($_GET['last_name_p']);
    $last_name_m = utf8_decode($_GET['last_name_m']);
    
    
    
    
    if ($name_teacher== !null & $last_name_p == !null) {
       
        // Guardamos la imagen (titulo, archivo, fecha de creacion)
    $query1 = "INSERT INTO profesores(nombre_prof,a_paterno_prof,a_materno_prof) "
            . "VALUES ('$name_teacher', '$last_name_p','$last_name_m')";
        mysqli_query($mysqli, $query1);
        error_log("Despues del primer insert", 0);
        // Movemos el archivo
       
        //Cerramos la conexion
        $mysqli->close();
    } else {
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
?>
