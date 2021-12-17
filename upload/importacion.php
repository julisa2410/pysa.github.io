<?php
    session_start();
     if(!isset($_SESSION['usuario'])){
         echo'
             <script>
                 alert("Por favor debes iniciar sesion");
                 window.location = "../cuerpo/index.php";
                 </script>
         ';
         session_destroy();
         die();
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PySA-Importacion</title>
    <script src="https://kit.fontawesome.com/cb9a66dabc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css2/estilos1.css"/>    


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="../upload/funciones_impo.js"></script>

</head>
<body id="body">    
    <header>
        <div class="icon_menu" >
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu_side" id="menu__side">

        <div class="name_page">
            <i class="fab fa-youtube"></i>
            <h4>PySA</h4>
        </div>

        <div class="options_menu">

            <a href="../cuerpo/principal.php">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                        <h4>Inicio</h4>
                </div>
            </a>

            <a href="exportacion.php" >
                <div class="option">
                    <i class="fas fa-file" title="Portafolio de Exportacion"></i>
                        <h4>Exportacion</h4>
                </div>
            </a>

            <a href="../upload/importacion.php" class="select">
                <div class="option" >
                    <i class="fas fa-file" title="Portafolio de Importacion"></i>
                        <h4>Importacion</h4>
                </div>
            </a>
            
            <a href="../contenido/contacto.php">
                <div class="option">
                    <i class="fas fa-id-badge" title="Contacto"></i>
                        <h4>Contacto</h4>
                </div>
            </a>
            
            <a href="../php/cerrar_sesion.php">
                <div class="option">
                    <i class="fas fa-window-close" title="Cerrar"></i>
                        <h4>Cerrar</h4>
                </div>
            </a>
        </div>    
    </div>

<main>
<div class="container"> <br> <br> <br> <br>
<h3>Guardar pedimetos de importacion:</h3> <br> <br>
        <div class="col-md-5 col-md-offset-2">
            <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="col-md-5">
            <button  class="btn btn-success" id="aceptar" >
            <a href="../upload/importacion.php"><font COLOR="white">Aceptar</font> </a>
            </button>
        </div>
    </div><br> <br> <br>
    <div class="col-md-7 col-md-offset-2" id="cargar"></div>

</main>

    <script src="../cuerpo/scripts.js"></script>
</body>
</html>