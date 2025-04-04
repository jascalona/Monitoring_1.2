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
    <title>Control de Cuentas</title>

    <!--CSS STYLES-->
    <link rel="stylesheet" href="./CSS/FRAMEWORK/aos.css">
    <link rel="stylesheet" href="./CSS/navigation.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <!--CSS STYLES-->

    <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOX-ICONS-->




</head>

<body style="background:rgb(36, 36, 37);" class="sub_page">


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





        <!-- Blog Start -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2" data-aos="fade-right" data-aos-duration="1500">
                    <h1 style="color: #fff;" class="mb-4"><?php echo $_SESSION['name']; ?>, Bienvenido al portal de Socios XDV</h1>
                </div>
                <div class="row">

                    <div class="col-md-6 mb-5" data-aos="flip-right" data-aos-duration="1500">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="./images/computer_cuentas.avif" alt="">
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                <h4 class="font-weight-bold mb-n1">01</h4>
                            </div>
                        </div>
                        <div class="bg-secondary" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                    <p class="text-muted ml-2" href=""></p>
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="far fa-bookmark text-primary"></i>
                                </div>
                            </div>
                            <h4 style="color: #fff;" class="font-weight-bold mb-3">Monitoreo de Personal</h4>
                            <p style="color: #fff;">Lleva un control ordenado y grafico de su personal; liste 'usuarios', filtrer valores especificos haciendo uso de un search con nuevas tecnologías.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-5" data-aos="flip-left" data-aos-duration="1500">
                        <div class="position-relative">
                            <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15692.935450111461!2d-66.84468849999999!3d10.4822217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1728310897199!5m2!1ses-419!2sve" width="600" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                                style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                                <h4 class="font-weight-bold mb-n1">02</h4>
                            </div>
                        </div>
                        <div class="bg-secondary" style="padding: 25px;">
                            <div class="d-flex mb-3">
                                <div class="d-flex align-items-center">
                                </div>
                                <div class="d-flex align-items-center ml-4">
                                    <i class="far fa-bookmark text-primary"></i>
                                </div>
                            </div>
                            <h4 style="color: #fff;" class="font-weight-bold mb-3">Control de Salidas y Entradas</h4>
                            <p style="color: #fff;">Lleva un control de entradas y salidas con esta asistencia virtual conoce la hora, fecha y ubicacion en tiempo real mediante coordenadas generadas por GPS.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- end header section -->


        <!-- start search filter -->
        <div class="search" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <form class="">
                    <input class="form-control me-2 light-table-filter" data-table="table" type="text" placeholder="Buscar...">
                </form>
            </div>
        </div>
        <!-- end search filter -->


        <div class="container-drop-m">

            <?php include './CONTROLLER/drop_m.php'; ?>
            <form action="" method="POST">
                <div class="btn-drop-m" data-aos="zoom-in-right" data-aos-duration="1000">
                    <button type="submit" name="drop" class="button" value="enviar">
                        <a>limpiar datos <i class='bx bx-brush-alt'></i></a>
                    </button>
                </div>
            </form>


            <div class="btn-export" data-aos="zoom-in-left" data-aos-duration="1000">
                <form action="" method="POST">
                    <button name="export" class="button">
                        <a href="./CONTROLLER/export_data.php">Exportar Datos <i class='bx bx-export'></i></a>
                    </button>
                </form>
            </div>


        </div>



        <?php
        include "./CONTROLLER/conexion.php";
        include "./CONTROLLER/Uload.php";

        ?>
        <br><br>

        <div class="container-tables">
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
            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">CI</div>
                        <div class="contenido"><?= $datos_m->ci ?></div>
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
                        <div class="header">Cliente</div>
                        <div class="contenido"><?= $datos_m->customer ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Status</div>
                        <div class="contenido"><?= $datos_m->status ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Fecha</div>
                        <div class="contenido"><?= $datos_m->date ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Tiempo</div>
                        <div class="contenido"><?= $datos_m->time ?></div>
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
                        <div class="header">Cargo</div>
                        <div class="contenido"><?= $datos_m->cargo ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
                <div class="fila">
                    <div class="columna">
                        <div class="header">Credenciales</div>
                        <div class="contenido"><?= $datos_m->credenciales ?></div>
                    </div>
                </div>
            </div>

            <div class="container-table-movil">
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


    <!--FRAMEWORK BOOTSTRAP-->
    <script src="./JS/FRAMEWORK/aos.js"></script>
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
    <script src="./JS/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- SCRIPT GEOLOCALIZACION -->

</body>

</html>