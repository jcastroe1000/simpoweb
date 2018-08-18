<?php
    header("Content-Type: text/html;charset=utf-8");
    include "../config.php";
    error_reporting(E_ALL);
    $id_c = $_GET['id'];
    $course_name = $_GET['name'];
    $review = $_GET['review'];
    $addressed = $_GET['addressed'];
    $objetive = $_GET['objetive'];
    $period = $_GET['period'];
    $duration = $_GET['duration'];
    $d_start=$_GET['date_start'];
    $d_finish=$_GET['date_finish'];
    $time_start=$_GET['time_start'];
    $time_finish=$_GET['time_finish'];
    $days= implode(',',$_GET['days']);
    $days_converts=utf8_decode($days);
    $modality=$_GET['modality'];
    $requiriments=$_GET['requirements'];
    $aditional_information=$_GET['aditional_information'];
    $cost=$_GET['cost'];
    $places_ava_d=$_GET['places_available'];
    $pay_method= utf8_decode($_GET['pay_method']);
    $update_date=$_GET['update_date'];
    $created_by= utf8_decode($_GET['admin']);
    $section='curso';
   
    if ($course_name == !null & $review == !null & $addressed == !null &  $objetive == !null &
            $period == !null & $duration == !null & $d_start == !null) {
       
    $stmt = $mysqli->prepare("UPDATE registro_eventos SET  nombre=? , resumen=?, dirigido=?,objetivo=?,periodo=?,
                             duracion=?, dias=?,fecha_inicio=?,fecha_final=?,hora_inicio=?,hora_final=?,modalidad=?, requisitos=?,
                             informacion_adicional=?,costo=?,lugares_disponibles=?,metodo_pago=?,fecha_modificacion=?,seccion=?,
                             usuario=? WHERE id=?");
    $stmt->bind_param('sssssssssssssssssssss', $course_name,$review,$addressed,$objetive,$period,$duration,$days_converts,
                            $d_start,$d_finish,$time_start,$time_finish,$modality,$requiriments,$aditional_information,
                            $cost,$places_ava_d,$pay_method,$update_date,$section,$created_by, $id_c);
    
    $course_name = $_GET['name'];
    $review = utf8_decode( $_GET['review']);
    $addressed = utf8_decode($_GET['addressed']);
    $objetive = utf8_decode($_GET['objetive']);
    $period = $_GET['period'];
    $duration = $_GET['duration'];
    $days= implode(',',$_GET['days']);
    $days_converts=utf8_decode($days);
    $d_start=$_GET['date_start'];
    $d_finish=$_GET['date_finish'];
    $time_start=$_GET['time_start'];
    $time_finish=$_GET['time_finish'];
    $modality=$_GET['modality'];
    $requiriments= utf8_decode($_GET['requirements']);
    $aditional_information= utf8_decode($_GET['aditional_information']);
    $cost=$_GET['cost'];
    $places_ava_d=$_GET['places_available'];
    $pay_method= utf8_decode($_GET['pay_method']);
    $update_date=$_GET['update_date'];
    $section='diplomado';
    $created_by= utf8_decode($_GET['admin']);
    $id_c = $_GET['id'];
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
