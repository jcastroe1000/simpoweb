<?php
    header("Content-Type: text/html;charset=utf-8");
    include "../config.php";
    error_reporting(E_ALL);
    $id_bio = $_GET['id'];
    $name = $_GET['name'];
    $review = $_GET['review'];
    $a_paterno = $_GET['surname_p'];
    $a_materno = $_GET['surname_m'];
    
    if ($id_bio) {
       
    $stmt = $mysqli->prepare("UPDATE biografia SET  nombre=? , apellido_p=?, apellido_m=?,descripcion=? WHERE id=?");
    $stmt->bind_param('sssss', $name,$a_paterno,$a_materno,$review,$id_bio);
    
    $id_bio = $_GET['id'];
    $name = $_GET['name'];
    $review = utf8_decode($_GET['review']);
    $a_paterno = $_GET['surname_p'];
    $a_materno = $_GET['surname_m'];
    if ($stmt->execute()):
       
       
    else:
        header('HTTP/1.1 500 Internal Server Error');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    endif;
            }
            else{
                
            }
?>
