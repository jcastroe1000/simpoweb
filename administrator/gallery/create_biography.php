<?php
    header("Content-Type: text/html;charset=utf-8");
    include "../config.php";
    error_reporting(E_ALL);
    $name = $_GET['name'];
    $surname_p=$_GET['surname_p'];
    $surname_m=$_GET['surname_m'];
    $review = utf8_decode($_GET['review']);
     $foto = trim($_FILES['file_image']['name']);;
    $filename = "";
    if ($_FILES['file_image']['size'] <= 2097152) {
        while (true) {
            $filename = uniqid(rand()) . '.' .pathinfo($foto, PATHINFO_EXTENSION);
            if (!file_exists('../gallery/album/biography/' . $filename)) break;
        }
        error_log($filename, 0);
        error_log("Despues de cambiar el nombre", 0);
        // Guardamos la imagen (titulo, archivo, fecha de creacion)
    $query1 = "INSERT INTO biografia(nombre,apellido_p,apellido_m,descripcion,ruta) "
            . "VALUES ('$name', '$surname_p','$surname_m', '$review','$filename')";
        mysqli_query($mysqli, $query1);
        error_log("Despues del primer insert", 0);
        // Movemos el archivo
        move_uploaded_file($_FILES['file_image']['tmp_name'], '../gallery/album/biography/' . $filename);
        error_log("Despues del mover el archivo", 0);
        //Cerramos la conexion
        $mysqli->close();
    } else {
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
?>
