<?php

header("Content-Type: text/html;charset=utf-8");
include("config.php");
error_reporting(E_ALL);
$foto = trim($_FILES['file_image']['name']);
$section = 'curso';
$id_image_course = $_GET['id_course'];
echo $id_image_course;
$filename = "";
if ($_FILES['file_image']['size'] <= 2097152) {
    while (true) {
        $filename = uniqid(rand()) . '.' . pathinfo($foto, PATHINFO_EXTENSION);
        if (!file_exists('../album/publication/' . $filename)) {
            break;
        }
    }
    error_log($filename, 0);
    error_log("Despues de cambiar el nombre", 0);
    // Guardamos la imagen (titulo, archivo, fecha de creacion)

    $stmt = $mysqli->prepare("UPDATE registro_eventos SET ruta=? WHERE id=?");
    $stmt->bind_param('ss', $image, $id_image_course);
    $image = $filename;
    $id_image_course = $_GET['id_course'];
    if ($stmt->execute()):
        // Movemos el archivo
        move_uploaded_file($_FILES['file_image']['tmp_name'], '../album/publication/' . $filename);
        error_log("Despues del mover el archivo", 0);
    else:
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    endif;
}
?>
