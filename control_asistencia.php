<?php
session_start();
if (!empty($_SESSION["CI"])) {
    header("loaction: ./index.php");
} else {
    if ((time() - $_SESSION['time']) > 40) {
        header("location: ./index.php");
    }
}

?>


<?php
include "./CONTROLLER/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencia</title>
    <link rel="icon" href="./images/x.png">


    <!--CSS STYLES-->
    <link rel="stylesheet" href="./CSS/navigation.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/aos.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--CSS STYLES-->



</head>

<body class="sub_page">


    <?php
    if ($_SESSION['roll'] == "administrator") { ?>

        <header>
            <nav>
                <ul class='nav-bar'>

                    <div class="btn-sesion">
                        <div class="btn-group" role="group">
                            <button type="button" class="button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">

                                <?php
                                echo $_SESSION["name"];
                                ?>

                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                    </div>

                    <input type='checkbox' id='check' />
                    <span class="menu">
                        <li><a href="./panel.php">Panel</a></li>
                        <li><a href="./control_asistencia.php">Control de Asistencia</a></li>
                        <li><a href="./control_cuentas.php">Control de Cuentas</a></li>
                        <li><a href="./registro.php">Registros</a></li>



                        <label for="check" class="close-menu"><i class='bx bx-x'></i></label>
                    </span>
                    <label for="check" class="open-menu"><i class='bx bx-menu' style='color:#514f4f'></i></label>
                </ul>
            </nav>

        </header>



        <!-- Features Start -->
        <section style="margin-top: 5%;" class="public_i">
            <div class="container-fluid ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">

                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./images/colaboracion.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./images/analisis.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./images/clasificacion.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-7 py-5 py-lg-0">
                            <h1 class="mb-4">CONTROL DE ASISTENCIA</h1>
                            <p class="mb-4">
                                En el el siguiente modulo usted podra cargar su asitencia. <br> NOTA: solo debera definir su status actual "Entrada o Salida"
                            </p>
                            <ul class="list-inline">
                                <li>
                                    <p><i class="far fa-dot-circle text-primary mr-3"></i>Control de Llegada</p>
                                </li>
                                <li>
                                    <p><i class="far fa-dot-circle text-primary mr-3"></i>Control de Salida</p>
                                </li>
                                <li>
                                    <p><i class="far fa-dot-circle text-primary mr-3"></i>Desarrollo Continuo</p>
                                </li>
                            </ul>


                            <!-- sesion carga modal start-->
                            <div class="carga-modal">
                                <form action="" method="post">



                                    <button id="permiso_geo" type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cargar Asistencia</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 style="color: grey;" class="modal-title fs-5" id="exampleModalLabel">Control de Asistencias</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">CI</label>
                                                        <input type="number" name="ci" id="ci" class="form-control" placeholder="Ingrese su Documento de identidad Ejem. 30836440 " readonly value="<?php echo $_SESSION['CI'] ?>">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Nombre</label>
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su Nombre" readonly value="<?php echo $_SESSION['name'] ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Apellido</label>
                                                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Ingrese su Apellido" readonly value="<?php echo $_SESSION['surname'] ?>">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Cliente</label>
                                                        <input type="text" name="customer" id="customer" class="form-control" readonly value="<?php echo $_SESSION['customer'] ?>">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Cargo</label>
                                                        <input type="text" name="cargo" id="cargo" class="form-control" readonly value="<?php echo $_SESSION['cargo'] ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Credencial</label>
                                                        <input type="text" name="credenciales" id="credenciales" class="form-control" readonly value="<?php echo $_SESSION['credenciales']; ?>">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">DPT</label>
                                                        <input type="text" name="departamento" id="departamento" class="form-control" readonly value="<?php echo $_SESSION['departamento']; ?>">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Cliente</label>
                                                        <input type="text" name="customer" id="customer" class="form-control" readonly value="<?php echo $_SESSION['customer'] ?>">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Status</label>
                                                        <select name="status" id="status" class="form-select form-select-lg mb-3" aria-label="Large select example" required>
                                                            <option></option>
                                                            <option value="Entrada">H/A Entrada</option>
                                                            <option value="Salida">H/A Salida</option>
                                                        </select>

                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Fecha</label>
                                                        <?php
                                                        date_default_timezone_set('America/Caracas');
                                                        $current_date = date("Y-m-d");
                                                        ?>

                                                        <input type="date" name="date" id="date" readonly class="form-control" value="<?php echo $current_date ?>">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Hora de Ingreso</label>
                                                        <?php
                                                        date_default_timezone_set('America/Caracas');
                                                        $current_time = date("H:i:s");
                                                        ?>

                                                        <input type="time" name="time" id="time" readonly class="form-control" value="<?php echo $current_time ?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Localidad</label>
                                                        <input id="geo" type="text" name="location" class="form-control" readonly required>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-dark" name="carga" value="submit">Cargar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </form>
                            </div>
                            <!-- sesion carga modal end-->

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- tables responsive administradores -->

        <?php
        include "./CONTROLLER/conexion.php";
        include "./CONTROLLER/Uload.php";
        ?>

        <div class="container-tables" data-aos="zoom-in-right" data-aos-duration="1500">
            <div class="tables-responsives">
                <table class="table table-bordered">

                    <thead class="table-dark">
                        <tr>
                            <th class="col">CI</th>
                            <th class="col">Nombre</th>
                            <th class="col">Apellido</th>
                            <th class="col">Cliente</th>
                            <th class="col">Status</th>
                            <th class="col">Fecha</th>
                            <th class="col">Tiempo</th>
                            <th class="col">Localidad</th>
                            <th class="col">Cargo</th>
                            <th class="col">Credenciales</th>
                            <th class="col">DPT</th>
                        </tr>

                    </thead>
                    <tbody>


                        <?php
                        include "./CONTROLLER/conexion.php";

                        $sql = $conexion->query(" SELECT *FROM  m_Uload ");
                        while ($datos = $sql->fetch_object()) {
                        ?>

                            <tr>
                                <td><?= $datos->ci ?></td>
                                <td><?= $datos->name ?></td>
                                <td><?= $datos->surname ?></td>
                                <td><?= $datos->customer ?></td>
                                <td><?= $datos->status ?></td>
                                <td><?= $datos->date ?></td>
                                <td><?= $datos->time ?></td>
                                <td><?= $datos->location ?></td>
                                <td><?= $datos->cargo ?></td>
                                <td><?= $datos->credenciales ?></td>
                                <td><?= $datos->departamento ?></td>

                            </tr>

                        <?php

                        }
                        ?>
                    </tbody>
                </table>

            </div>

        </div>

        <!--SECTION VISTAS MOVIL ADMINISTRATOR-->
        <?php
        include './CONTROLLER/conexion.php';
        $sql_m = $conexion->query(" SELECT *FROM m_Uload ");
        while ($datos_m = $sql_m->fetch_object()) {
        ?>

            <br>
            <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">CI</div>
                        <div class="contenido"><?= $datos_m->ci ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-left" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Nombre</div>
                        <div class="contenido"><?= $datos_m->name ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Apellido</div>
                        <div class="contenido"><?= $datos_m->surname ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-left" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Cliente</div>
                        <div class="contenido"><?= $datos_m->customer ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Status</div>
                        <div class="contenido"><?= $datos_m->status ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-left" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Fecha</div>
                        <div class="contenido"><?= $datos_m->date ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Tiempo</div>
                        <div class="contenido"><?= $datos_m->time ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-left" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Localidad</div>
                        <div style="font-size: 10px;" class="contenido"><?= $datos_m->location ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Cargo</div>
                        <div class="contenido"><?= $datos_m->cargo ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-left" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Credenciales</div>
                        <div class="contenido"><?= $datos_m->credenciales ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                <div class="fila">
                    <div class="columna">
                        <div class="header">DPT</div>
                        <div class="contenido"><?= $datos_m->departamento ?></div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
        <!--SECTION VISTAS MOVIL ADMINISTRATOR-->

    <?php
        //CLOSE VIST ADMINISTRATOR
    }
    ?>
    <!-- panel habilitado para administradores end -->



    <!-- control de sesiones operator nav start -->
    <!-- panel habilitado para operator start -->
    <?php

    if ($_SESSION['roll'] == "operator") { ?>

        <header>
            <header>
                <nav>
                    <ul class='nav-bar'>

                        <div class="btn-sesion">
                            <div class="btn-group" role="group">
                                <button type="button" class="button dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">

                                    <?php
                                    echo $_SESSION["name"];
                                    ?>

                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
                                </ul>
                            </div>
                        </div>

                        <input type='checkbox' id='check' />
                        <span class="menu">
                            <li><a href="./panel.php">Panel</a></li>
                            <li><a href="./control_asistencia.php">Control de Asistencia</a></li>

                            <label for="check" class="close-menu"><i class='bx bx-x'></i></label>
                        </span>
                        <label for="check" class="open-menu"><i class='bx bx-menu' style='color:#514f4f'></i></label>
                    </ul>
                </nav>

            </header>


            <!-- Features Start -->
            <section style="margin-top: 5%;" class="public_i">
                <div class="container-fluid ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5">

                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./images/colaboracion.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/analisis.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./images/clasificacion.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-7 py-5 py-lg-0">
                                <h1 class="mb-4">CONTROL DE ASISTENCIA</h1>
                                <p class="mb-4">
                                    En el el siguiente modulo usted podra cargar su asitencia. <br> NOTA: solo debera definir su status actual "Entrada o Salida"
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <p><i class="far fa-dot-circle text-primary mr-3"></i>Control de Llegada</p>
                                    </li>
                                    <li>
                                        <p><i class="far fa-dot-circle text-primary mr-3"></i>Control de Salida</p>
                                    </li>
                                    <li>
                                        <p><i class="far fa-dot-circle text-primary mr-3"></i>Desarrollo Continuo</p>
                                    </li>
                                </ul>


                                <!-- sesion carga modal start-->
                                <div class="carga-modal">
                                    <form action="" method="post">



                                        <button id="permiso_geo" type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cargar Asistencia</button>

                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 style="color: grey;" class="modal-title fs-5" id="exampleModalLabel">Control de Asistencias</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">CI</label>
                                                            <input type="number" name="ci" id="ci" class="form-control" placeholder="Ingrese su Documento de identidad Ejem. 30836440 " readonly value="<?php echo $_SESSION['CI'] ?>">
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Nombre</label>
                                                            <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su Nombre" readonly value="<?php echo $_SESSION['name'] ?>">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Apellido</label>
                                                            <input type="text" name="surname" id="surname" class="form-control" placeholder="Ingrese su Apellido" readonly value="<?php echo $_SESSION['surname'] ?>">
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Cliente</label>
                                                            <input type="text" name="customer" id="customer" class="form-control" readonly value="<?php echo $_SESSION['customer'] ?>">
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Cargo</label>
                                                            <input type="text" name="cargo" id="cargo" class="form-control" readonly value="<?php echo $_SESSION['cargo'] ?>">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Credencial</label>
                                                            <input type="text" name="credenciales" id="credenciales" class="form-control" readonly value="<?php echo $_SESSION['credenciales']; ?>">
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">DPT</label>
                                                            <input type="text" name="departamento" id="departamento" class="form-control" readonly value="<?php echo $_SESSION['departamento']; ?>">
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Cliente</label>
                                                            <input type="text" name="customer" id="customer" class="form-control" readonly value="<?php echo $_SESSION['customer'] ?>">
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Status</label>
                                                            <select name="status" id="status" class="form-select form-select-lg mb-3" aria-label="Large select example" required>
                                                                <option></option>
                                                                <option value="Entrada">H/A Entrada</option>
                                                                <option value="Salida">H/A Salida</option>
                                                            </select>

                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Fecha</label>
                                                            <?php
                                                            date_default_timezone_set('America/Caracas');
                                                            $current_date = date("Y-m-d");
                                                            ?>

                                                            <input type="date" name="date" id="date" readonly class="form-control" value="<?php echo $current_date ?>">
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Hora de Ingreso</label>
                                                            <?php
                                                            date_default_timezone_set('America/Caracas');
                                                            $current_time = date("H:i:s");
                                                            ?>

                                                            <input type="time" name="time" id="time" readonly class="form-control" value="<?php echo $current_time ?>">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Localidad</label>
                                                            <input id="geo" type="hidden" name="location" class="form-control" readonly required>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-dark" name="carga" value="submit">Cargar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </form>
                                </div>
                                <!-- sesion carga modal end-->

                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <?php
            include "./CONTROLLER/conexion.php";
            include "./CONTROLLER/Uload.php";
            ?>

            <div class="container-tables" data-aos="zoom-in-right" data-aos-duration="1500">
                <table class="table table-bordered">

                    <thead class="table-dark">
                        <tr>
                            <th class="col">CI</th>
                            <th class="col">Nombre</th>
                            <th class="col">Apellido</th>
                            <th class="col">Cliente</th>
                            <th class="col">Status</th>
                            <th class="col">Fecha</th>
                            <th class="col">Tiempo</th>
                        </tr>

                    </thead>
                    <tbody>


                        <?php
                        include "./CONTROLLER/conexion.php";
                        include "./CONTROLLER/validar.php";
                        $sql = $conexion->query(" SELECT *FROM  m_Uload WHERE ci= $_SESSION[CI] ");
                        while ($datos = $sql->fetch_object()) {
                        ?>

                            <tr>
                                <td><?= $datos->ci ?></td>
                                <td><?= $datos->name ?></td>
                                <td><?= $datos->surname ?></td>
                                <td><?= $datos->customer ?></td>
                                <td><?= $datos->status ?></td>
                                <td><?= $datos->date ?></td>
                                <td><?= $datos->time ?></td>
                            </tr>

                        <?php

                        }
                        ?>
                    </tbody>
                </table>

            </div>


            <!--SECTION VISTAS MOVIL OPERATOR-->
            <?php
            include './CONTROLLER/conexion.php';
            $sql_m = $conexion->query(" SELECT *FROM m_Uload WHERE ci= $_SESSION[CI] ");
            while ($datos_m = $sql_m->fetch_object()) {
            ?>

                <br>

                <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">CI</div>
                            <div class="contenido"><?= $datos_m->ci ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil" data-aos="fade-left" data-aos-duration="1000">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Nombre</div>
                            <div class="contenido"><?= $datos_m->name ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Apellido</div>
                            <div class="contenido"><?= $datos_m->surname ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil" data-aos="fade-left" data-aos-duration="1000">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Cliente</div>
                            <div class="contenido"><?= $datos_m->customer ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Status</div>
                            <div class="contenido"><?= $datos_m->status ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil" data-aos="fade-left" data-aos-duration="1000">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Fecha</div>
                            <div class="contenido"><?= $datos_m->date ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil" data-aos="fade-right" data-aos-duration="1000">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Tiempo</div>
                            <div class="contenido"><?= $datos_m->time ?></div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
            <!--SECTION VISTAS MOVIL OPERATOR-->

            </div>
            </div>
            </div>
            </div>

        <?php
    }
        ?>
        <!-- panel habilitado para operator end -->

        <!-- Footer Start -->
        <footer>
            <div
                class="container-fluid bg-dark text-white-50 py-3 px-sm- px-lg-5"
                style="margin-top: 90px">
                <div class="row pt-2">
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h5
                            class="text-white text-uppercase mb-3"
                            style="letter-spacing: 5px">
                            recursos
                        </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="https://grupoxdv.com/Partner/"><i class="fa fa-angle-right mr-2"></i>E-elearning</a>
                            <a
                                class="text-white-50 mb-2"
                                href="https://grupoxdv.com/monitoring/"><i class="fa fa-angle-right mr-2"></i>Virtual Assistance</a>
                            <a
                                class="text-white-50 mb-2"
                                href="https://grupoxdv.com/support_kip/"><i class="fa fa-angle-right mr-2"></i>Support Kip</a>
                            <a
                                class="text-white-50 mb-2"
                                href="https://grupoxdv.com/phone_list/"><i class="fa fa-angle-right mr-2"></i>PhoneBook</a>
                        </div>

                        <h6
                            class="text-white text-uppercase mt-4 mb-3"
                            style="letter-spacing: 5px"></h6>
                        <div class="d-flex justify-content-start">
                            <p class="btn btn-outline-primary btn-square mr-2">
                                <i class="bx bxl-facebook"></i>
                            </p>
                            <p class="btn btn-outline-primary btn-square mr-2">
                                <i class="bx bxl-instagram"></i>
                            </p>
                            <p class="btn btn-outline-primary btn-square">
                                <i class="bx bxl-whatsapp"></i>
                            </p>
                        </div>
                    </div>

                    <!--ACCESOS DIRECTOS-->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h5
                            class="text-white text-uppercase mb-3"
                            style="letter-spacing: 5px">
                            Acceso Directo
                        </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="https://mail.grupoxven.com/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fmail.grupoxven.com%2fowa"><i class="fa fa-angle-right mr-2"></i>Enlace Outlook en linea</a>

                            <a class="text-white-50 mb-2" href="http://portalrrhh/nomina/Empleados/Default.asp"><i class="fa fa-angle-right mr-2"></i>Portal Picasso</a>

                            <a class="text-white-50 mb-2" href="https://www.grupoxdv.com/contacto.html"><i class="fa fa-angle-right mr-2"></i>Contacto</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-5"></div>

                    <!--CONTACTO-->
                    <div class="col-lg-3 col-md-6 mb-5">
                        <h5
                            class="text-white text-uppercase mb-4"
                            style="letter-spacing: 5px">
                            Contacto
                        </h5>
                        <p>
                            <i class="fa fa-map-marker-alt mr-2"></i>Av. Ávila, Caracas 1060,
                            Miranda, Venezuela
                        </p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+58 05009376934</p>
                        <p><i class="fa fa-envelope mr-2"></i>cac@grupoxven.com</p>
                        <img src="./image/logo_xerox.png" alt="">
                    </div>
                </div>
            </div>

            <div
                class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
                style="border-color: rgba(256, 256, 256, 0.1) !important">
                <div class="row">
                    <div class="derechos-reservados">
                        <p style="text-align: center" class="m-0 text-white-50">
                            2010 - 2024 &copy; Xerox de Venezuela. Todos los derechos
                            reservados. XDV®
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->



        <script>
            function openNav() {
                document.getElementById("myNav").classList.toggle("menu_width");
                document
                    .querySelector(".custom_menu-btn")
                    .classList.toggle("menu_btn-style");
            }
        </script>


        <!--FRAMEWORK BOOTSTRAP-->
        <script src="./JS/FRAMEWORK/bootstrap.js"></script>
        <script src="./JS/FRAMEWORK/jquery.js"></script>
        <script src="./JS/FRAMEWORK/bootstrap_ii.js"></script>
        <script src="./JS/FRAMEWORK/aos.js"></script>
        <!--FRAMEWORK BOOTSTRAP-->
        <script>
            AOS.init();
        </script>
        <!-- SCRIPT GEOLOCALIZACION -->
        <script src="./JS/geolocalizacion.js"></script>
        <!-- SCRIPT GEOLOCALIZACION -->

</body>

</html>