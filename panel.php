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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/x.png">
    <title>Monitoring</title>


    <!--CSS STYLES-->
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/question.css">
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




</head>
<body>
    
        
  <div class="hero_area">
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
            

          <!-- control de sesiones administrator nav start -->
          <!-- panel habilitado para administradores start -->

           <?php  
              if ($_SESSION['roll'] == "administrator") { ?>
              
            

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

    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h2>
                Monitoring
              </h2>
              <h1>
                Virtual  <br />
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
                  <div class="img-box">
                    <img src="./images/tablero.png" alt="" />
                  </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </section>
  
    </div>


  <!--Preguntas Frecuentes-->
  <div class="container-preguntas-frecuentes">
      <p>Preguntas Frecuentes</p>
        <section>

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

    <!--

          <div class="sesion-public">
                <i class="text-center">
                  <p><b>L</b>o que sabemos es una gota, lo que ignoramos es un océano!
                  <br>
                  "Isaac Newton"
                  <br><br>
                  Vivimos en un mundo modelado por la tecnología. En nuestra vida
                  cotidiana la tecnología esta omnipresente, la misma marca el ritmo 
                  del progreso en las pautas de la vida
                  La idea del progreso, tal como lo concebimos hoy,
                  está íntimamente asociada a la idea de la
                  tecnología, y por consiguiente a la idea de ciencia y de
                  técnica. Estas tres palabras clave, ciencia,
                  técnica y tecnología, vinculadas a actividades
                  específicas del hombre,
                  están indisolublemente ligadas al mundo en que vivimos, un
                  mundo más artificial que natural, un mundo creado por
                  el hombre en
                  sus ansias de dominar transformar las fuerzas de la naturaleza.
                  </p>
                </i>  

                <img class="" src="./images/img_panel.avif" alt="">
              </div>
          </div>
              -->


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
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class=" slider_section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="detail-box">
              <h2>
                Monitoring
              </h2>
              <h1>
                Monitoring  <br />
                program
              </h1>
              <div>
            <!--    <a style="text-decoration: none;" href="">
                  Echar un Vistazo
                </a> -->
              </div>
            </div>
          </div>
          <div class="col-md-5">
         
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box">
                    <img src="./images/tablero.png" alt="" />
                  </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </section>

    </div>

     <!--Preguntas Frecuentes-->
     <div class="container-preguntas-frecuentes">
      <p>Preguntas Frecuentes</p>
        <section>

       <!--#01-->
       <details>
            <summary>¿Que es Virtual Assistance?</summary>
            <p>Virtual assistance es una interfaz desarrollada con el fin de llevar un control de asistencia 
              "Entradas y Salidas" de tu personal.
            </p>
          </details>
        <!--#01-->

        <!--#02-->
         <details>
            <summary>¿Como hago mi registro?</summary>
            <p>Luego de iniciar sesión dirijase al Control de Asistencia, una vez alli el programa ejecutara 
              los servicios "GEO" donde debera aceptar los permisos posteriormente de click en el boton Cargar 
              Asistencia y defina su Status actual en el campo <b>"Status"</b> para finalizar el registro de click en el boton <b>"Cargar"</b> 
              tambien puede consultar la guia: <a href="./Guia_operador.pdf">Guia_operador.pdf</a></p>
          </details>
        <!--#02-->
        
      </section>
      </div>
    <!--Preguntas Frecuentes-->


    <!--
    <div class="sesion-public">
                <i class="text-center">
                  <p><b>L</b>o que sabemos es una gota, lo que ignoramos es un océano!
                  <br>
                  "Isaac Newton"
                  <br><br>
                  Vivimos en un mundo modelado por la tecnología. En nuestra vida
                  cotidiana la tecnología esta omnipresente, la misma marca el ritmo 
                  del progreso en las pautas de la vida
                  La idea del progreso, tal como lo concebimos hoy,
                  está íntimamente asociada a la idea de la
                  tecnología, y por consiguiente a la idea de ciencia y de
                  técnica. Estas tres palabras clave, ciencia,
                  técnica y tecnología, vinculadas a actividades
                  específicas del hombre,
                  están indisolublemente ligadas al mundo en que vivimos, un
                  mundo más artificial que natural, un mundo creado por
                  el hombre en
                  sus ansias de dominar transformar las fuerzas de la naturaleza.
                  </p>
                </i>  

                <img class="" src="./images/img_panel.avif" alt="">
              </div>
          </div>
          -->

          
    <?php
    }
    ?>
    <!-- panel habilitado para operator end -->
   

    
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

                                    <form method="POST" >
                                    <?php include './CONTROLLER/Uload_comentario.php'; ?>
                                    
                                      <div class="mb-3">
                                        <p for="recipient-name" class="text-dark col-form-label">Hola <b><?php echo $_SESSION['name'];?></b>, queremos tu opinión sobre nuestro Programa!</p>
                                        <input type="hidden" name="ci" id="ci" value="<?php echo $_SESSION['CI'];?>" >
                                        <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['name'];?>" >
                                        <input type="hidden" name="surname" id="surname" value="<?php echo $_SESSION['surname'];?>" >

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
    
        


</body>
</html>