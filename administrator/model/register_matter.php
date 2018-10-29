<?php
    header("Content-Type: text/html;charset=utf-8");
    include "../config.php";
    error_reporting(E_ALL);
    $name_matter = utf8_decode($_GET['name_matter']);
    $section= implode(',',$_GET['section']);
    $section_converts=utf8_decode($section);
    $area= implode(',',$_GET['area']);
    $area_converts=utf8_decode($area);
    $name_teacher = utf8_decode($_GET['name_teacher']);
    $last_name_p = utf8_decode($_GET['last_name_p']);
    $last_name_m = utf8_decode($_GET['last_name_m']);
    
    
    if ($name_matter == !null & $section == !null) {
       
        // Guardamos la imagen (titulo, archivo, fecha de creacion)
    $query1 = "INSERT INTO materias(nombre_materia,seccion,area,nombre_prof,apellido_pat_prof,apellido_mat_prof) "
            . "VALUES ('$name_matter', '$section_converts','$area_converts','$name_teacher','$last_name_p','$last_name_m')";
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
