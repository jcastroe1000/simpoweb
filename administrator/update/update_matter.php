<?php
    header("Content-Type: text/html;charset=utf-8");
    include "../config.php";
    error_reporting(E_ALL);
    $id_matter = $_GET['id'];
    $name_m = $_GET['name_matter'];
    $section_matter= implode(',',$_GET['section']);
    $sec_matter=utf8_decode($section_matter);
         $area_mat= implode(',',$_GET['area']);
    $area_converts_2=utf8_decode($area_mat);
    $imparte = utf8_decode($_GET['impartidor']);
    
    if ($id_matter) {
       
    $stmt = $mysqli->prepare("UPDATE  materias SET  nombre_materia=? , seccion=?,"
            . "area=?, imparte=? WHERE id=?");
    $stmt->bind_param('sssss', $name_m,$sec_matter,$area_converts_2,$imparte,$id_matter);
    
    $id_matter = $_GET['id'];
    $name_m = utf8_decode($_GET['name_matter']);
    $section_matter= implode(',',$_GET['section']);
    $sec_matter=utf8_decode($section_matter);
     $area_mat= implode(',',$_GET['area']);
    $area_converts_2=utf8_decode($area_mat);
    $imparte = utf8_decode($_GET['impartidor']);
    
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
