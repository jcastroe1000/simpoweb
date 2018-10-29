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
    $name_t = utf8_decode($_GET['nombre_prof']);
    $a_pat_prof = utf8_decode($_GET['apellido_pat_prof']);
    $a_mat_prof = utf8_decode($_GET['apellido_mat_prof']);
    
    if ($id_matter) {
       
    $stmt = $mysqli->prepare("UPDATE  materias SET  nombre_materia=? , seccion=?,"
            . "area=?, nombre_prof=?, apellido_pat_prof=?, apellido_mat_prof=? WHERE id=?");
    $stmt->bind_param('sssssss', $name_m,$sec_matter,$area_converts_2,$name_t,$a_pat_prof,$a_mat_prof,$id_matter);
    
    $id_matter = $_GET['id'];
    $name_m = utf8_decode($_GET['name_matter']);
    $section_matter= implode(',',$_GET['section']);
    $sec_matter=utf8_decode($section_matter);
     $area_mat= implode(',',$_GET['area']);
    $area_converts_2=utf8_decode($area_mat);
   $name_t = utf8_decode($_GET['nombre_prof']);
    $a_pat_prof = utf8_decode($_GET['apellido_pat_prof']);
    $a_mat_prof = utf8_decode($_GET['apellido_mat_prof']);
    
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
