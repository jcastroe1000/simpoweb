<?php
include "../config.php";
    if (isset($_GET['d'])):
        $id = $_GET['d'];
    

      

        $query2 = "delete FROM materias WHERE id='". $id ."'";
        $stmt = $mysqli->prepare($query2);
        
        if ($stmt->execute()):
            $mysqli->close();
            
            
            echo "<script>location.href='../consultar/materias.php?m=1'</script>";
            
        else:
            echo "<script>location.href='../consultar/materias.php?m=2'</script>";
        endif;
    endif;

?>