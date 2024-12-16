<?php

$conexion = mysqli_connect('localhost','root','','gxdeve_apps','3306' );

$id=$_GET['id'];
$sql=$conexion->query(" SELECT *FROM m_user_lg WHERE id=$id ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/x.png">
    <title>Edit</title>



    <!--CSS STYLES-->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/conf.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/FRAMEWORK/bootstrap.css">
    <!--CSS STYLES-->

    <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOX-ICONS-->

    <!--FRAMEWORK BOOTSTRAP-->
    <script src="../JS/FRAMEWORK/bootstrap.js"></script>
    <script src="../JS/FRAMEWORK/jquery.js"></script>
    <script src="../JS/FRAMEWORK/bootstrap_ii.js"></script>
    <!--FRAMEWORK BOOTSTRAP-->


    <!-- SCRIPT SEARCH-->
    <script src="../JS/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- SCRIPT SEARCH-->
</head>
<body style="background-image: url(../images/spencer-davis-ilQmlVIMN4c-unsplash.jpg);">
                            

                    <div class="container-form-r">
                        <div class="container-edit">
                        <?php
                            include "../CONTROLLER/modification_r.php";

                            while($datos=$sql->fetch_object()){ ?>

                            <form action="" method="POST">
                                                
                            <div class="mb-3">

                                <input type="hidden" name="id" class="form-control" id="id" placeholder="Ingrese su Nombre" value="<?= $_GET['id']?>">

                                <label for="recipient-name" class="col-form-label">Cedula</label>
                                <input type="number" name="CI" class="form-control" id="ci" value="<?= $datos->CI?>" required>
                            </div>


                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre</label>
                                <input type="text" name="name" class="form-control" id="name" value="<?= $datos->name?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Apellido</label>
                                <input type="text" name="surname" class="form-control" id="surname" value="<?= $datos->surname?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cliente</label>
                                <input type="text" name="customer" class="form-control" id="customer" value="<?= $datos->customer?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?= $datos->email?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cargo</label>
                                <input type="text" name="cargo" class="form-control" id="cargo" value="<?= $datos->cargo?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">DTP</label>
                                <input type="text" name="departamento" class="form-control" id="departamento" value="<?= $datos->departamento?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Clave</label>
                                <input type="password" name="password" class="form-control" id="password" value="<?= $datos->password?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Roll</label>
                                <select name="roll" id="roll" class="form-select form-select-lg mb-3" aria-label="Large select example" required>
                                    <option></option>
                                    <option value="operator">Operador</option>
                                    <option value="administrator">Administrador</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Localidad</label>
                                <input type="text" name="location" class="form-control" id="location" value="<?= $datos->location?>" required>
                            </div>


                                <?php
                                    }
                                ?>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="../registro.php">Volver</a></button>
                                <button type="submit" name="edit" class="btn btn-primary" value="submit">Modificar</button>
                            </div>

                        </div>
                        </form>
                    </div>



</body>
</html>