<?php
    header("Content-Type: text/html;charset=utf-8");
    include "../config.php";
    error_reporting(E_ALL);
    $name_matter = utf8_decode($_GET['name_matter']);
    $section = utf8_decode($_GET['section']);
    
    if ($name_matter == !null & $section == !null) {
       
        // Guardamos la imagen (titulo, archivo, fecha de creacion)
    $query1 = "INSERT INTO materias(nombre_materia,seccion) "
            . "VALUES ('$name_matter', '$section')";
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
