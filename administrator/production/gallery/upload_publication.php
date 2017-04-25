<?php
    include "../config.php";
    error_reporting(E_ALL);
    $publication_name = $_GET['publication_name'];
    $review = $_GET['review'];
    $addressed_publication = $_GET['addressed'];
    $publication_objetive = $_GET['objetive'];
    $periodicity = $_GET['periodicity'];
    $publication_cost=$_GET['cost'];
    $creation_date=$_GET['creation_date'];
    $foto = trim($_FILES['publication_image']['name']);
    $created_by=$_GET['created_by'];
    $section='publicacion';
    $filename = "";
    if ($_FILES['publication_image']['size'] <= 2097152) {
        while (true) {
            $filename = uniqid(rand()) . '.' .pathinfo($foto, PATHINFO_EXTENSION);
            if (!file_exists('gallery/publications/' . $filename)) break;
        }
        error_log($filename, 0);
        error_log("Despues de cambiar el nombre", 0);
        // Guardamos la imagen (titulo, archivo, fecha de creacion)
        $query1 = "INSERT INTO publicaciones(publication_name,addressed, objetive,periodicity,cost,route_image,creation_date,created_by) "
                . "VALUES ('$publication_name', '$addressed_publication', '$publication_objetive', '$periodicity', '$publication_cost', '$filename', '$creation_date', '$created_by')";
        mysqli_query($mysqli, $query1);
        error_log("Despues del primer insert", 0);
        // Movemos el archivo
        move_uploaded_file($_FILES['publication_image']['tmp_name'], 'gallery/publications/' . $filename);
        error_log("Despues del mover el archivo", 0);
        //Cerramos la conexion
        $mysqli->close();
    } else {
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }
?>
