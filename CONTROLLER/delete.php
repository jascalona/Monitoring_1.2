<?php
 
include "./CONTROLLER/conexion.php";

 if (!empty($_GET['id'])) {
    $id=$_GET['id'];
    $sql=$conexion->query(" DELETE FROM m_user_lg WHERE $id=id ");
    if ($sql==1) {
           
            echo '<script>alert("Se ha eliminado el registro!")</script>' ;

        
    } else {
            echo '<script>alert("Ha Ocurrido un error al eliminar este registro!")</script>' ;
    } ?>

    <script>
        //sesion Drop cache
        history.replaceState(null,null,location.pathname)
    </script>

<?php }

?>
    

