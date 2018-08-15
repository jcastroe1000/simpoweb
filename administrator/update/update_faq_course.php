<?php
    header("Content-Type: text/html;charset=utf-8");
    include "../config.php";
    error_reporting(E_ALL);
    $id_faq = $_GET['id_faqs'];
    $answer_= $_GET['answer'];
    $question_ = $_GET['question'];
    
   
    if ($id_faq== !null & $answer_ == !null & $question_ == !null ) {
       
    $stmt = $mysqli->prepare("UPDATE faqs SET  question=? , answer=? WHERE id_faqs=?");
    $stmt->bind_param('sss', $question_,$answer_,$id_faq);
    
    $id_faq = $_GET['id_faqs'];
    $answer_= $_GET['answer'];
    $question_ = $_GET['question'];
    
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
