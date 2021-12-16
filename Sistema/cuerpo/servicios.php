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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PySA</title>    
    <script src="https://kit.fontawesome.com/cb9a66dabc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css2/estilos1.css"/>    

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

            <a href="#" class="select">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                        <h4>Inicio</h4>
                </div>
            </a>

            <a href="../upload/exportacion.php">
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
        <div style="width:30%; height:30%" id="cont">
            <ul id="menu">
                <li><a href="principal.php" <? if ($actual == "principal.php") echo "class="actual""; ?>¿Quienes somos?</a></li>
                <li><a href="servicios.php" <? if ($actual == "servicios.php") echo "class="actual""; ?>Servicios</a></li>
                <li><a href="clientes.php"<? if ($actual == "clientes.php") echo "class="actual""; ?>Clientes</a></li>
            </ul>  
        </div>
        
        <div class="container-cover">
           
        
        </div>
        
        <div class="container-content">
            <article style="text-align: justify">
                <h1>Servicios y Trámites Aduanales</h1>
                <p><b>
                En años recientes, el Comercio Internacional en México ha crecido de forma
                considerable gracias a la firma de varios tratados de comercio con diversos 
                países alrededor del mundo. Esto ha permitido a muchas empresas mexicanas la 
                habilidad de Importar y Exportar productos específicos a su industria. Sin 
                embargo, ésta expansión en el Comercio Exterior de México ha forzado a las 
                Autoridades Aduaneras a actualizar el marco regulatorio para la Importación 
                y Exportación de productos. Éstos cambios han provocado que los tramites 
                aduanales se hayan vuelto más complejos y requieran mayores recursos de 
                esfuerzo, tiempo y dinero para cumplirlos.
                </b></p><br>
                <p><b>
                Es por ello que, a pesar de que la Importación y Exportación de productos sea 
                relativamente "sencilla", es muy recomendable contar con la guía y el apoyo de 
                un Agente Aduanal para asegurar que el proceso de Importación o Exportación se 
                realizará de forma eficiente y sin contratiempos. EN RH Shipping tenemos una 
                amplia red de Agentes Aduanales altamente capacitados que lo apoyarán a realizar 
                todos los trámites aduanales requeridos para el envío, transporte y recepción de 
                sus productos en México o en cualquier país del mundo. Nuestro staff de Agentes 
                Aduanales le proporcionará un servicio de alta calidad y eficiencia que le brindará 
                una ventaja competitiva a su empresa.
                </b></p><br>
                <p><b>
                    Brindando asi los siguentes servicios aduanales:
                </b></p>
                <p><b><font size=4>
                <li type="square">Revision de documentos.</li>
                <li type="square">Solicitud de anticipo.</li>
                <li type="square">Revisión de la mercancía.</li>
                <li type="square">Clasificación Arancelaria, cálculo de impuestos y derechos para la importación y exportación de sus mercancías.</li>
                <li type="square">Copia de pedimentos vía correo y sistema.</li>
                <li type="square">Asesoría técnica, legal y fiscal para efectos aduanales.</li>
                <li type="square">Staff dedicado para sus operaciones de exportación.</li>
                <li type="square">Tarifas Flat.</li>
                <li type="square">Servicio de Comercializadora.</li>
                <li type="square">Actualización y notificación sobre cambios en información de impuestos y aranceles.</li>
                <li type="square">Manejo de cualquier tipo de mercancía incluyendo peligrosos y perecederos.</li>
                <li type="square">Seguros y Fianzas aduanales.</li>
              
                </font></b></p>
                </article>
        </div>       
    </main>


    <script src="../cuerpo/scripts.js"></script>
</body>
</html>