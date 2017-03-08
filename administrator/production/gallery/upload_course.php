<?php
    include "../config.php";
    error_reporting(E_ALL);
    $course_name = $_GET['course_name'];
    $addressed = $_GET['addressed'];
    $objetive = $_GET['objetive'];
    $duration = $_GET['time_duration'];
    $modality=$_GET['modality'];
    $date_start=$_GET['date_start'];
    $date_finish=$_GET['date_finish'];
    $cost=$_GET['cost'];
    $creation_date=$_GET['creation_date'];
    $foto = trim($_FILES['course_image']['name']);
    $created_by=$_GET['created_by'];
    $section='curso';
    $filename = "";
    if ($_FILES['course_image']['size'] <= 2097152) {
        while (true) {
            $filename = uniqid(rand()) . '.' .pathinfo($foto, PATHINFO_EXTENSION);
            if (!file_exists('album/course/' . $filename)) break;
        }
        error_log($filename, 0);
        error_log("Despues de cambiar el nombre", 0);
        // Guardamos la imagen (titulo, archivo, fecha de creacion)
        $query1 = "INSERT INTO registro_eventos(nombre,dirigido, objetivo, duracion, modalidad,inicio,termino,costo,ruta,fecha_creacion,seccion,usuario) "
                . "VALUES ('$course_name', '$addressed', '$objetive', '$duration', '$modality', '$date_start', '$date_finish', '$cost', '$filename', '$creation_date','$section','$created_by')";
        mysqli_query($mysqli, $query1);
        error_log("Despues del primer insert", 0);
        // Movemos el archivo
        move_uploaded_file($_FILES['course_image']['tmp_name'], 'album/course/' . $filename);
        error_log("Despues del mover el archivo", 0);
        //Cerramos la conexion
        $mysqli->close();
    } else {
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
?>
