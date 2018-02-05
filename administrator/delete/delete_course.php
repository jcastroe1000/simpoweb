<?php
include "../config.php";
    if (isset($_GET['d']) && isset($_GET['f'])):
        $id = $_GET['d'];
        $file = $_GET['f'];

      

        $query2 = "delete FROM registro_eventos WHERE id='". $id ."'";
        $stmt = $mysqli->prepare($query2);
        
        if ($stmt->execute()):
            $mysqli->close();
            unlink('../gallery/album/course/'.$file);
            
            echo "<script>location.href='../consultar/cursos.php?m=true'</script>";
            
        else:
            echo "<script>alert('" . $stmt->error . "')</script>";
        endif;
    endif;

?>