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
    <title>PySA-Contacto</title>
    <script src="https://kit.fontawesome.com/cb9a66dabc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css2/estilos1.css"/>
    <link rel="stylesheet" href="../contenido/estilosBase.css"/>    
    

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

            <a href="../upload/exportacion.php" >
                <div class="option">
                    <i class="fas fa-file" title="Portafolio de Exportacion"></i>
                        <h4>Exportacion</h4>
                </div>
            </a>

            <a href="../upload/importacion.php">
                <div class="option">
                    <i class="fas fa-file" title="Portafolio de Importacion"></i>
                        <h4>Importacion</h4>
                </div>
            </a>
            
            <a href="contacto.php" class="select">
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
        <div class="container-cover">
            <div class="container-cover-info">
                
            </div>
        <section class="group contact">
            <h2 class="group__title">Contactanos</h2>
            <div class="container container--flex">
                <div class="contact-information  column column--50">
                    <h3 class="column__title">Informacion de Contacto</h3>
                    <p class="column__txt">La infomacion proporcionada es para contactarnos y aclarar dudas.</p><br><br><br>
                    <p class="column__txt">
                        <i class="fas fa-phone-square" title="Contacto"></i>
                        <label for="" class="column__txt">867 593 56 02</label><br> <br>

                        <i class="fas fa-map-marker" title="Direccion"></i>
                        <label for="" class="column__txt">Bolivar 3558 Altos desp. B, <br> Nuevo Laredo, Tamaulipas <br> C.P: 88209</label><br> <br>


                    </p><br><br><br><br><br><br><br><br><br>
                 </div>
                <form action="../contenido/enviar.php" method="post" class="formulario column column--50">
                    <label for="" class="fromulario__label">Nombre:</label><br>
                    <input type="text" class="formulario__input-txt" name="nombre"><br><br>
                    
                    <label for="" class="fromulario__label">Correo:</label><br>
                    <input type="text" class="formulario__input-txt" name="correo"><br><br>
                    
                    <label for="" class="fromulario__label">Telefono:</label><br>
                    <input type="text" class="formulario__input-txt" name="telefono"><br><br>
                    
                    <label for="" class="fromulario__label">Mensaje:</label><br>
                    <textarea name="mensaje" id="" cols="30" rows="10" class="formulario__txtarea"></textarea><br><br>
                    
                    <input type="submit" class="btn formulario__btn" value="Enviar">

                </form>

            </div>
        </section>
    </main>

    <script src="../cuerpo/scripts.js"></script>
</body>
</html>