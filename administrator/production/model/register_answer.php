<?php

header('Content-type: application/json');
include "../config.php";
error_reporting(E_ALL);




    $question = $_GET['question'];
    $answer = $_GET['answer'];
    $category_question = $_GET['category'];
    
    
    

    
    $query1 = "INSERT INTO faqs(question,answer,category) "
            . "VALUES ('$question', '$answer', '$category_question')";
    mysqli_query($mysqli, $query1);
    $response_array['status'] = 'success';
    echo json_encode($response_array);
//Cerramos la conexion
    $mysqli->close();


?>
