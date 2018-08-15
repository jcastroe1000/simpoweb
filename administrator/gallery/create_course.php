<?php
    header("Content-Type: text/html;charset=utf-8");
    include "../config.php";
    error_reporting(E_ALL);
    $course_name = $_GET['name'];
    $review = utf8_decode($_GET['review']);
    $addressed = utf8_decode($_GET['addressed']);
    $objetive = utf8_decode($_GET['objetive']);
    $period = $_GET['period'];
    $duration = $_GET['duration'];
    $d_start=$_GET['date_start'];
    $d_finish=$_GET['date_finish'];
    $time_start=$_GET['time_start'];
    $time_finish=$_GET['time_finish'];
    $days= implode(',',$_GET['days']);
    $days_converts=utf8_decode($days);
    $modality= utf8_decode($_GET['modality']);
    $requiriments= utf8_decode($_GET['requirements']);
    $aditional_information=utf8_decode($_GET['aditional_information']);
    $cost=$_GET['cost'];
    $pay_method= utf8_decode($_GET['pay_method']);
    $foto = trim($_FILES['file_image']['name']);
    $creation_date=$_GET['creation_date'];
    $created_by= utf8_decode($_GET['admin']);
    $section='curso';
    $filename = "";
    if ($_FILES['file_image']['size'] <= 2097152) {
        while (true) {
            $filename = uniqid(rand()) . '.' .pathinfo($foto, PATHINFO_EXTENSION);
            if (!file_exists('../gallery/album/course/' . $filename)) break;
        }
        error_log($filename, 0);
        error_log("Despues de cambiar el nombre", 0);
        // Guardamos la imagen (titulo, archivo, fecha de creacion)
    $query1 = "INSERT INTO registro_eventos(nombre,resumen,dirigido, objetivo,periodo, duracion,dias,"
            . "fecha_inicio,fecha_final,hora_inicio,hora_final,modalidad,requisitos,informacion_adicional,costo,"
            . "metodo_pago,ruta,fecha_creacion,seccion,usuario) "
            . "VALUES ('$course_name', '$review','$addressed', '$objetive','$period' ,'$duration','$days_converts', '$d_start','$d_finish',"
            . "'$time_start','$time_finish','$modality','$requiriments','$aditional_information','$cost','$pay_method','$filename',"
            . "'$creation_date','$section','$created_by')";
        mysqli_query($mysqli, $query1);
        error_log("Despues del primer insert", 0);
        // Movemos el archivo
        move_uploaded_file($_FILES['file_image']['tmp_name'], '../gallery/album/course/' . $filename);
        error_log("Despues del mover el archivo", 0);
        //Cerramos la conexion
        $mysqli->close();
    } else {
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
?>
