<?php

include './CONTROLLER/conexion.php';

if (!empty($_POST['btn-comen'])) {
    if (!empty($_POST['ci']) and !empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['message'])) {
        
        $ci = $_POST['ci'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $message = $_POST['message'];

    $sql = $conexion->query(" INSERT INTO m_comentarios (ci,name,surname,message)VALUES('$ci','$name','$surname','$message') "); 
        if ($sql==1) {
            echo '<script>alert("Gracias por hacernos saber tu opinión!")</script>';
        } else {
            echo '<script>alert("Error de Conexion, comuniquese con el Administrador de Sistema")</script>';
        }

    } else {
        echo '<script>alert("Asegurece de llenar todos los Campos!")</script>';   
    } ?>

    <script>
        //sesion Drop cache
        history.replaceState(null,null,location.pathname)
    </script>

<?php } 