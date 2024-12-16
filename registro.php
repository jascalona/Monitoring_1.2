<?php
session_start();
if (!empty($_SESSION["CI"])) {
    header("loaction: ./index.php");
}else{
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
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/conf.css">
    <link rel="stylesheet" href="./CSS/responsive.css">
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

    <?php
    if ($_SESSION['roll'] == "administrator") { ?>


</head>
<body class="sub_page">


    <div style="background: #212F3D;" class="hero_area">
    <!-- header section strats -->
        <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">

            <div class="btn-sesion">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        
                        <?php
                        echo $_SESSION["name"];
                        ?>

                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./CONTROLLER/close.php">Cerrar Sesion</a></li>
                        </ul>
                    </div>
                </div>
                

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a style="color: #FF5733;" href="panel.php">Panel</a>
                <a style="color: #C70039;" href="./control_asistencia.php">Control de Asistencias</a>
                <a style="color: #900C3F;" href="./control_cuentas.php">Control de Cuentas</a>
                <a style="color: #581845;" href="./registro.php">Registros</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <br>
    <!-- end header section -->
    </div>    

     <!-- About Start -->
     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="./images/xven.jpeg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h6 class="text-uppercase">NOSOTROS</h6>
                    <h1 class="text-dark" class="mb-4">Bienvenido(@) al modulo de registro XDV</h1>
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

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Registro de Personal</button>

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
                                <button type="submit" name="btn-uload" class="btn btn-primary" value="submit">Cargar Datos</button>
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

        <div class="container-t-register">
            <div class="table-register">
                <table class="table table-bordered" >    
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
                        
                        $sql=$conexion->query(" SELECT *FROM  m_user_lg ");
                        while($datos = $sql->fetch_object()){ 
                            ?>
                
                            <tr>
                                <td><?= $datos->CI?></td>
                                <td><?= $datos->name?></td>
                                <td><?= $datos->surname?></td>
                                <td><?= $datos->email?></td>
                                <td><?= $datos->customer?></td>
                                <td><?= $datos->location?></td>
                                <td><?= $datos->roll?></td>

                                 <td>
                                    <a href="registro.php?id=<?= $datos->id?>"><i class='bx bx-trash-alt'></i></a>
                                </td>

                                <td>
                                    <a href="./CONTROLLER/edit.php?id=<?=$datos->id?>"><i class='bx bx-edit-alt'></i></a>
                                </td>
                            </tr>
                
                            <?php
                            
                            }
                            ?>
                    </tbody>

                    </table>
                    </div>
                </div>



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