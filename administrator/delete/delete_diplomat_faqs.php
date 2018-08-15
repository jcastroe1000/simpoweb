<?php
include "../config.php";
    if (isset($_GET['d'])):
        $id = $_GET['d'];


      

        $query2 = "delete FROM faqs WHERE id_faqs='". $id ."'";
        $stmt = $mysqli->prepare($query2);
        
        if ($stmt->execute()):
            
            
            echo "<script>location.href='../consultar/preguntas_diplomados.php?m=1'</script>";
            
        else:
            echo "<script>location.href='../consultar/seminarios.php?m=2'</script>";
        endif;
    endif;

?>