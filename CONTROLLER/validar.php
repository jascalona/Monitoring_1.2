<?php
session_start();
include "./CONTROLLER/conexion.php";

if (!empty($_POST['btn-i'])) {
    if (!empty($_POST['user']) and !empty($_POST['password'])) {
        

        $user = $_POST['user'];
        $password = $_POST['password'];


        $sql=$conexion->query(" SELECT *FROM m_user_lg WHERE email='$user' AND password='$password'  ");


        if ($datos=$sql->fetch_object()) {

            $_SESSION["CI"]= $datos->CI;
            $_SESSION["name"]= $datos->name;
            $_SESSION["surname"]= $datos->surname;
            $_SESSION["customer"]= $datos->customer;
            $_SESSION["email"]= $datos->email;
            $_SESSION["roll"]= $datos->roll;
            $_SESSION["cargo"]= $datos->cargo;
            $_SESSION["credenciales"]= $datos->id;
            $_SESSION["departamento"]= $datos->departamento;




            header("location: ./panel.php");
        } else {
        echo '<script>alert("Acceso Denegado! Credenciales incorrectas, Verifique e intente de nuevo!")</script>' ;
        }
        

    } else {
        echo '<script>alert("Debe llenar todos los Campos!")</script>' ;
    }
}