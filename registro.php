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
    <link rel="icon" href="./images/x.png">
    <title>Registros</title>

    <!--CSS STYLES-->
    <link rel="stylesheet" href="./CSS/navigation.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--CSS STYLES-->

    <!--FRAMEWORK BOOTSTRAP-->
    <script src="./JS/FRAMEWORK/bootstrap.js"></script>
    <script src="./JS/FRAMEWORK/jquery.js"></script>
    <script src="./JS/FRAMEWORK/bootstrap_ii.js"></script>
    <!--FRAMEWORK BOOTSTRAP-->


    <!-- SCRIPT SEARCH-->
    <script src="./JS/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- SCRIPT SEARCH-->

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


        <!-- About Start -->
        <section class="public_ii">
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-5">
                            <img class="img-fluid rounded" style="width: 400px;" src="./images/x.png" alt="">
                        </div>
                        <div class="col-lg-7 mt-4 mt-lg-0">
                            <h2 class="mb-4">Bienvenido(@) al modulo de registro XDV</h2>
                            <p>Somos un eficiente grupo empresarial, con la mejor propuesta integral de tecnología, productos, soluciones y servicios, para facilitar la gestión documental, los servicios de artes gráficas y la logística nacional.
                                Representante Exclusivo de la marca Xerox en Venezuela, dedicada a la comercialización y distribución directa e indirecta de productos, tecnologías y soluciones Xerox para el sustento de nuestros clientes en el manejo de sus documentos.
                            </p>
                            <P>Nuestra meta es ayudar a las pequeñas, medianas y grandes empresas a reducir la complejidad, proporcionar un entorno optimizado, reducir la impresión, mejorar sus procesos de negocios, para que puedan centrarse en la innovación de productos. Todo esto se resume en una palabra "Eficiencia" que solo es posible si cuenta con el equipo idóneo y el soporte necesario de Xerox.</P>

                            <!-- Uload registro -->
                            <div class="container-uload-registro">

                                <?php
                                include "./CONTROLLER/Uload-register.php";
                                include "./CONTROLLER/delete.php";
                                ?>

                                <form action="" method="POST">

                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Registro de Personal</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Registro</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Cedula</label>
                                                        <input type="number" name="ci" class="form-control" id="ci" placeholder="Ingrese su documento sin caracteres especiales como '.,-/*' " required>
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Nombre</label>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese su Nombre" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Apellido</label>
                                                        <input type="text" name="surname" class="form-control" id="surname" placeholder="Ingrese su Apellido" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Cliente</label>
                                                        <input type="text" name="customer" class="form-control" id="customer" placeholder="Ingrese nombre de cuenta asignada" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Email</label>
                                                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo;  example.email@grupoxven.com" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Cargo</label>
                                                        <input type="text" name="cargo" class="form-control" id="cargo" placeholder="Ingrese su Cargo" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">DPT</label>
                                                        <input type="text" name="departamento" class="form-control" id="departamento" placeholder="Ingrese su Departamento" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="recipient-name" class="col-form-label">Clave</label>
                                                        <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su Clave" value="" required>
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
                                                        <input type="text" name="location" class="form-control" id="location" placeholder="Ingrese su Localidad" required>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" name="btn-uload" class="btn btn-dark" value="submit">Cargar Datos</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                            <!-- Uload registro -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->





        <!-- start search filter -->
        <div class="search">
            <div class="">
                <form class="d-flex">
                    <input class="form-control me-2 light-table-filter" data-table="table" type="text" placeholder="Buscar...">
                </form>
            </div>
        </div>
        <!-- end search filter -->

        <br>

        <div class="container-tables">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class="col">CI</th>
                        <th class="col">Nombre</th>
                        <th class="col">Apellido</th>
                        <th class="col">Email</th>
                        <th class="col">Cliente</th>
                        <th class="col">Localidad</th>
                        <th class="col">Roll</th>
                        <th class="col"><i class='bx bx-trash-alt'></i></th>
                        <th class="col"><i class='bx bx-edit-alt'></i></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include "./CONTROLLER/conexion.php";

                    $sql = $conexion->query(" SELECT *FROM  m_user_lg ");
                    while ($datos = $sql->fetch_object()) {
                    ?>

                        <tr>
                            <td><?= $datos->CI ?></td>
                            <td><?= $datos->name ?></td>
                            <td><?= $datos->surname ?></td>
                            <td><?= $datos->email ?></td>
                            <td><?= $datos->customer ?></td>
                            <td><?= $datos->location ?></td>
                            <td><?= $datos->roll ?></td>

                            <td>
                                <a href="registro.php?id=<?= $datos->id ?>"><i class='bx bx-trash-alt'></i></a>
                            </td>

                            <td>
                                <a href="./CONTROLLER/edit.php?id=<?= $datos->id ?>"><i class='bx bx-edit-alt'></i></a>
                            </td>
                        </tr>

                    <?php

                    }
                    ?>
                </tbody>

            </table>
        </div>

        <!--Vista para moviles-->
        <?php
        include "./CONTROLLER/conexion.php";
        $sql_m = $conexion->query(" SELECT *FROM m_user_lg ");
        while ($datos_m = $sql_m->fetch_object()) {

        ?>

            <br>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">CI</div>
                        <div class="contenido"><?= $datos_m->CI ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Nombre</div>
                        <div class="contenido"><?= $datos_m->name ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Apellido</div>
                        <div class="contenido"><?= $datos_m->surname ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Email</div>
                        <div class="contenido"><?= $datos_m->email ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Cliente</div>
                        <div class="contenido"><?= $datos_m->customer ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Localidad</div>
                        <div class="contenido"><?= $datos_m->location ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Roll</div>
                        <div class="contenido"><?= $datos_m->roll ?></div>
                    </div>
                </div>
            </div>


        <?php
        }

        ?>
        <!--Vista para moviles-->

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



    <?php
        //CLOSE VIST ADMINISTRATOR
    }
    ?>

    <?php
    if ($_SESSION['roll'] == "operator") { ?>

        <div style="display: flex; justify-content: center; margin-top: 5%;" class="container-restring">
            <img src="./images/restrin.png" alt="">
        </div>
        <br><br>

        <p style="display: flex; justify-content: center; font-size: 30px; font-weight: 600; color: #900C3F; ">You do not have access to this site</p>
    <?php
    }
    ?>



    <script>
        function openNav() {
            document.getElementById("myNav").classList.toggle("menu_width");
            document
                .querySelector(".custom_menu-btn")
                .classList.toggle("menu_btn-style");
        }
    </script>
</body>

</html>