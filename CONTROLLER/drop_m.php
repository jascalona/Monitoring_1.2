<?php

include './CONTROLLER/conexion.php';

if (!empty($_POST['drop'])) {
    
    $sql=$conexion->query(" DELETE FROM m_Uload ");

    if ($sql==1) {
        echo '<script>alert("Sus registros se eliminaron con exito!")</script>';
    } else {
        echo '<script>alert("Ha Ocurrido un Error!")</script>';

    } ?>

    <script>
        //sesion Drop cache
        history.replaceState(null,null,location.pathname)
    </script>

<?php }

?>
    


    

