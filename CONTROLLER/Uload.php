<?php

include './CONTROLLER/conexion.php';

if (!empty($_POST['carga'])) {
    if (!empty($_POST['ci']) and !empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['customer']) and !empty($_POST['status']) 
    and !empty($_POST['date']) and !empty($_POST['time']) and !empty($_POST['location']) and !empty($_POST['cargo']) and !empty($_POST['credenciales']) and !empty($_POST['departamento'])) {

        $ci = $_POST['ci'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $customer = $_POST['customer'];
        $status = $_POST['status'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $location = $_POST['location'];
        $cargo = $_POST['cargo'];
        $credenciales = $_POST['credenciales'];
        $departamento = $_POST['departamento'];


    $sql = $conexion->query("  INSERT INTO m_Uload (ci,name,surname,customer,status,date,time,location,cargo,credenciales,departamento)VALUES('$ci','$name','$surname','$customer','$status','$date','$time','$location','$cargo','$credenciales','$departamento') ");
        if ($sql==1) {
            echo '<script>alert("Su Asistencia fue Cargada con Exito!")</script>' ;
        } else {
            echo '<script>alert("Error de Conexion, Comuniquese con el Administrador de Sistema!")</script>' ;
        }
    
    } else {
            echo '<script>alert("Debe llenar los Campos Vacios")</script>' ;
    } ?>

    <script>
        //sesion Drop cache
        history.replaceState(null,null,location.pathname)
    </script>

<?php }
