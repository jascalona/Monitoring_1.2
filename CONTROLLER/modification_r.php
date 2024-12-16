<?php

include '../CONTROLLER/conexion.php';

if (!empty($_POST['edit'])) {

    if (!empty($_POST['CI']) AND !empty($_POST['name']) AND !empty($_POST AND !empty($_POST['surname'])) 
    AND !empty($_POST['customer']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['roll']) 
    AND !empty($_POST['location']) AND !empty($_POST['cargo']) AND !empty($_POST['departamento'])) {
        
        //VAR
        $id = $_POST['id'];
        $CI = $_POST['CI'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $customer = $_POST['customer'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $roll = $_POST['roll'];
        $location = $_POST['location'];
        $cargo = $_POST['cargo'];
        $departamento = $_POST['departamento'];


        $sql=$conexion->query(" UPDATE m_user_lg SET CI=$CI, name='$name', surname='$surname', customer='$customer', email='$email', 
        password='$password', roll='$roll', location='$location', cargo='$cargo', departamento='$departamento' WHERE id='$id' ");

        if ($sql==1) {
            header('location: ../registro.php');
        } else {
            echo '<script>alert("Ha Ocurrido un Error de Conexion!")</script>';
        }
        
    } else {}
    echo '<script>alert("Asegurece de llenar todos los Campos!!")</script>';
}

