<?php

include './CONTROLLER/conexion.php';

if (!empty($_POST['btn-uload'])) {
    if (!empty($_POST['ci']) and !empty($_POST['name']) and !empty($_POST['surname']) and !empty($_POST['customer']) 
    and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['roll']) and !empty($_POST['location']) and !empty($_POST['cargo']) and !empty($_POST['departamento'])) {
        
        $ci = $_POST['ci'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $customer = $_POST['customer'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $roll = $_POST['roll'];
        $location = $_POST['location'];        
        $cargo = $_POST['cargo'];
        $departamento = $_POST['departamento'];



    $sql = $conexion->query(" INSERT INTO m_user_lg (ci,name,surname,customer,email,password,roll,location,cargo,departamento)VALUES('$ci','$name','$surname','$customer','$email','$password','$roll','$location','$cargo','$departamento') ");
        if ($sql==1) {
            echo '<script>alert("Su Registro fue Exito!")</script>' ;
        } else {
            echo '<script>alert("Error de Conexion comuniquese con el Administrador de Sistemas!")</script>' ;
        }
        
    } else {
            echo '<script>alert("Asegurese de llenar todos los Campos!")</script>' ;
    } ?>

    <script>
        //sesion Drop cache
        history.replaceState(null,null,location.pathname)
    </script>

<?php }

    
    