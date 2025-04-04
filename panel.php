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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./images/x.png">
  <title>Monitoring</title>


  <!--CSS STYLES-->
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/navigation.css">
  <link rel="stylesheet" href="./CSS/question.css">
  <link rel="stylesheet" href="./CSS/responsive.css">
  <link rel="stylesheet" href="./CSS/FRAMEWORK/bootstrap.css">
  <link rel="stylesheet" href="./CSS/FRAMEWORK/aos.css">
  <!--CSS STYLES-->

  <!--BOX-ICONS-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!--BOX-ICONS-->





</head>

<body style="background:rgb(36, 36, 37);">


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

    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-right" data-aos-duration="1500">
            <div class="detail-box">
              <h2>
                Monitoring
              </h2>
              <h1 style="color: #b4b4b4f3;">
                Virtual <br />
                Assistance
              </h1>
              <div>
                <!--     <a style="text-decoration: none;" href="">
                  Echar un Vistazo
                </a>   -->
              </div>
            </div>
          </div>
          <div class="col-md-5">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="img-box" data-aos="fade-left" data-aos-duration="1500">
                  <img src="./images/supervision.png" alt="" />
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    </div>


    <!--Preguntas Frecuentes-->
    <div class="container-preguntas-frecuentes" >
      <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Preguntas Frecuentes</p>
      <section data-aos="fade-up" data-aos-duration="1500">

        <!--#01-->
        <details>
          <summary>¿Que es Virtual Assistance?</summary>
          <p style="font-size: 18px;">Virtual assistance es una interfaz desarrollada con el fin de llevar un control de asistencia
            "Entradas y Salidas" de tu personal.
          </p>
        </details>
        <!--#01-->

        <!--#02-->
        <details>
          <summary>¿Como hago mi registro?</summary>
          <p style="font-size: 18px;">Luego de iniciar sesión dirijase al Control de Asistencia, una vez alli el programa ejecutara
            los servicios "GEO" donde debera aceptar los permisos posteriormente de click en el boton Cargar
            Asistencia y defina su Status actual en el campo <b>"Status"</b> para finalizar el registro de click en el boton <b>"Cargar"</b>
            tambien puede consultar la guia: <a href="./Guia_operador.pdf">Guia_operador.pdf</a></p>
        </details>
        <!--#02-->

      </section>
    </div>
    <!--Preguntas Frecuentes-->

    <!-- close sesion administrator -->
  <?php
  }
  ?>

  <div class="container-comentarios">
    <section>

    </section>
  </div>

  <!-- panel habilitado para administradores end -->



  <!-- control de sesiones operator nav start -->
  <!-- panel habilitado para operator start -->
  <?php
  if ($_SESSION['roll'] == "operator") {  ?>

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

    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-right" data-aos-duration="1500">
            <div class="detail-box">
              <h2>
                Monitoring
              </h2>
              <h1 style="color: #b4b4b4f3;">
                Virtual <br />
                Assistance
              </h1>
              <div>
                <!--     <a style="text-decoration: none;" href="">
                  Echar un Vistazo
                </a>   -->
              </div>
            </div>
          </div>
          <div class="col-md-5">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="img-box" data-aos="fade-left" data-aos-duration="1500">
                  <img src="./images/supervision.png" alt="" />
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    </div>

    <!--Preguntas Frecuentes-->
    <div class="container-preguntas-frecuentes" >
      <p data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Preguntas Frecuentes</p>
      <section data-aos="fade-up" data-aos-duration="1500">

        <!--#01-->
        <details>
          <summary>¿Que es Virtual Assistance?</summary>
          <p style="font-size: 18px;">Virtual assistance es una interfaz desarrollada con el fin de llevar un control de asistencia
            "Entradas y Salidas" de tu personal.
          </p>
        </details>
        <!--#01-->

        <!--#02-->
        <details>
          <summary>¿Como hago mi registro?</summary>
          <p style="font-size: 18px;">Luego de iniciar sesión dirijase al Control de Asistencia, una vez alli el programa ejecutara
            los servicios "GEO" donde debera aceptar los permisos posteriormente de click en el boton Cargar
            Asistencia y defina su Status actual en el campo <b>"Status"</b> para finalizar el registro de click en el boton <b>"Cargar"</b>
            tambien puede consultar la guia: <a href="./Guia_operador.pdf">Guia_operador.pdf</a></p>
        </details>
        <!--#02-->

      </section>
    </div>
    <!--Preguntas Frecuentes-->
    
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



          <!--Comentarios-->
          <div class="section-comentarios">
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
          <!--Comentarios-->


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

</body>

</html>