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
    <link rel="stylesheet" href="./CSS/navigation.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
    <!--CSS STYLES-->

    <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOX-ICONS-->

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





        <!-- Blog Start -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2">
                    <h1 style="color: #fff;" class="mb-4"><?php echo $_SESSION['name']; ?>, Bienvenido al portal de Socios XDV</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-5">
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

                    <div class="col-md-6 mb-4">
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
                            <p style="color: #fff;">Lleva un control de entradas y salidas con esta asistencia virtual, conoce la hora, fecha y ubicacion en tiempo real mediante coordenadas generadas por GPS.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- end header section -->


        <!-- start search filter -->
        <div class="search">
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
                <div class="btn-drop-m">
                    <button type="submit" name="drop" class="btn btn-primary" value="enviar">
                        limpiar datos <i class='bx bx-brush-alt'></i>
                    </button>
                </div>
            </form>


            <div class="btn-export">
                <form action="" method="POST">
                    <button name="export" class="btn btn-primary">
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
                    $SQL = "SELECT m_uload.ci, m_uload.name, m_uload.surname, m_uload.customer, m_uload.status,
                        m_uload.date, m_uload.time, m_uload.location, m_Uload.cargo, m_uload.credenciales, m_uload.departamento FROM m_uload
                        ";
                    $dato = mysqli_query($conexion, $SQL);

                    if ($dato->num_rows > 1) {
                        while ($fila = mysqli_fetch_array($dato)) {

                    ?>
                            <tr>
                                <td><?php echo $fila['ci']; ?></td>
                                <td><?php echo $fila['name']; ?></td>
                                <td><?php echo $fila['surname']; ?></td>
                                <td><?php echo $fila['customer']; ?></td>
                                <td><?php echo $fila['status']; ?></td>
                                <td><?php echo $fila['date']; ?></td>
                                <td><?php echo $fila['time']; ?></td>
                                <td><?php echo $fila['location']; ?></td>
                                <td><?php echo $fila['cargo']; ?></td>
                                <td><?php echo $fila['credenciales']; ?></td>
                                <td><?php echo $fila['departamento']; ?></td>
                            </tr>


                        <?php
                        }
                    } else {

                        ?>
                        <tr class="text-center">
                            <td colspan="16">No existen registros</td>
                        </tr>

                    <?php

                    }

                    ?>

                </tbody>
            </table>


        </div>

        <!--SECTION VISTAS MOVIL ADMINISTRATOR-->
        <?php
        include "./CONTROLLER/conexion.php";
        $SQL = "SELECT m_uload.ci, m_uload.name, m_uload.surname, m_uload.customer, m_uload.status,
        m_uload.date, m_uload.time, m_uload.location, m_Uload.cargo, m_uload.credenciales, m_uload.departamento FROM m_uload ";
        $dato = mysqli_query($conexion, $SQL);

        if ($dato->num_rows > 1) {
            while ($fila = mysqli_fetch_array($dato)) {

        ?>
                <br>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">CI</div>
                            <div class="contenido"><?php echo $fila['ci']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Nombre</div>
                            <div class="contenido"><?php echo $fila['name']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Apellido</div>
                            <div class="contenido"><?php echo $fila['surname']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Cliente</div>
                            <div class="contenido"><?php echo $fila['customer']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Status</div>
                            <div class="contenido"><?php echo $fila['status']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Fecha</div>
                            <div class="contenido"><?php echo $fila['date']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Tiempo</div>
                            <div class="contenido"><?php echo $fila['time']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Localidad</div>
                            <div class="contenido"><?php echo $fila['location']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Cargo</div>
                            <div class="contenido"><?php echo $fila['cargo']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">Credenciales</div>
                            <div class="contenido"><?php echo $fila['credenciales']; ?></div>
                        </div>
                    </div>
                </div>

                <div class="container-table-movil">
                    <div class="fila">
                        <div class="columna">
                            <div class="header">DPT</div>
                            <div class="contenido"><?php echo $fila['departamento']; ?></div>
                        </div>
                    </div>
                </div>

            <?php
            }
        } else {

            ?>
            <tr class="text-center">
                <td colspan="16">No existen registros</td>
            </tr>

        <?php
        }
        ?>
        <!--SECTION VISTAS MOVIL ADMINISTRATOR-->




        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
            <div class="row pt-5">
                <div class="col-lg-3 col-md-6 mb-5">
                    <a href="" class="navbar-brand">
                        <h1 class="text-primary"><span class="text-white">GRUPO XDV</span></h1>
                    </a>
                    <p>
                        Somos XDV, nos enfocamos con calidad, excelencia y gran entusiasmo para lograr los retos propuestos y alcanzar la satisfacción tanto de nuestros clientes internos y externos,
                        a través de nuestra tecnología, nuestra experiencia y nuestro servicio profecional, que permite que su negocio funcione de un modo
                        más inteligente, facil y rapido sea cual sea su situación.
                    </p>
                    <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">SIGUENOS</h6>
                    <div class="d-flex justify-content-start">
                        <p class="btn btn-outline-primary btn-square mr-2"><i class='bx bxl-facebook'></i></p>
                        <p class="btn btn-outline-primary btn-square mr-2"><i class='bx bxl-instagram'></i></p>
                        <p class="btn btn-outline-primary btn-square"><i class='bx bxl-whatsapp'></i></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Acceso Directo</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="./panel.php"><i class="fa fa-angle-right mr-2"></i>Panel</a>
                        <a class="text-white-50 mb-2" href="./control_asistencia.php"><i class="fa fa-angle-right mr-2"></i>Control de Asistencia</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5"></div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contacto</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Av. Ávila, Caracas 1060, Miranda, Venezuela</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+58 05009376934</p>
                    <p><i class="fa fa-envelope mr-2"></i>cac@grupoxven.com</p>

                    <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Agrega tus Comentarios!</h6>
                    <div class="w-100">
                        <div class="input-group">
                            <div class="input-group-append">

                                <!--moddal comentarios-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                                    Agregar Comentario
                                </button>

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title text-dark fs-5" id="exampleModalLabel">Nuevo Comentario</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <form method="POST">
                                                    <?php include './CONTROLLER/Uload_comentario.php'; ?>

                                                    <div class="mb-3">
                                                        <p for="recipient-name" class="text-dark col-form-label">Hola <b><?php echo $_SESSION['name']; ?></b>, queremos tu opinión sobre nuestro Programa!</p>
                                                        <input type="hidden" name="ci" id="ci" value="<?php echo $_SESSION['CI']; ?>">
                                                        <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['name']; ?>">
                                                        <input type="hidden" name="surname" id="surname" value="<?php echo $_SESSION['surname']; ?>">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text" class="col-form-label text-dark ">Message:</label>
                                                        <textarea class="form-control" name="message" id="message" placeholder="Ingrese un Comentario..."></textarea>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                <button name="btn-comen" type="submit" value="submit" class="btn btn-primary">Enviar Comentario</button>
                                            </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--moddal comentarios-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="row">
                <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white-50">Virtual Assistance &copy; <a href="" style="color: red;">XDV</a>. Todos los derechos reservados. XDV®</a>
                    </p>
                </div>
                <div class="col-lg-6 text-center text-md-right">
                    <p class="m-0 text-white-50">Designed by <a href="" style="color: red;">JE</a>
                    </p>
                </div>
            </div>
        </div>
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

</body>

</html>