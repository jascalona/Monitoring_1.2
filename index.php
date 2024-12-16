<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/x.png">
    <title>Login_Monitoring</title>
</head>
<body style="background-image: url(./images/spencer-davis-ilQmlVIMN4c-unsplash.jpg);" >


    <!--CSS STYLES-->
    <link rel="stylesheet" href="./CSS/log.css">
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
    <script src="./JS/permisos.js"></script>
    <!--FRAMEWORK BOOTSTRAP-->


  

        <div class="container">

            <form action="" method="POST">
                
                <div class="background-lg">
                    <div class="modal-header">
                        <img src="./images/xdv.png" alt="">
                    </div>

                    <?php
                    include "./CONTROLLER/validar.php";
                    ?>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"><i class='bx bxs-user'></i> User</label>
                            <input type="text" class="form-control" name="user" id="user" placeholder="Ingrese su Correo">
                        </div>

                        <div class="mb-3">
                            <label for="message-text" class="col-form-label"><i class='bx bxs-key'></i>Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su Clave">
                        </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="btn-i" id="" class="btn btn-primary" value="submit">Iniciar</button>
                    </div>

                </div>

            </div>
        </form>

        </div>

</body>
</html>