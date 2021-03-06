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
                <li><a href="principal.php" <? if ($actual == "principal.php") echo "class="actual""; ?>??Quienes somos?</a></li>
                <li><a href="servicios.php" <? if ($actual == "servicios.php") echo "class="actual""; ?>Servicios</a></li>
            </ul>  
        </div>
       
        <div class="container-cover">
            <div class="container-cover-info">
                <h1>??El unico modo de hacer un gran trabajo es amar lo que haces!</h1>
                <p>-Steve Jobs</p><br>
            </div>
        
        </div>
        
        <div class="container-content">
            <article style="text-align: justify">
            <strong >??QUIENES SOMOS?</strong><br>  
            <img src="../css2/imagen/quienes.jpg" alt="">
            <p><b>
                Es una empresa dedicada a prestar servicios de Comercio, 
                comprometidos siempre en la satisfacci??n 
                de nuestros clientes basados en valores 
                empresariales que son Calidad, Liderazgo, Certeza Jur??dica 
                e Innovaci??n.</b>
            </p><br>           
            <strong >MISI??N</strong>
                <p ><b>
                    Agrupar a la mayor cantidad de agentes aduanales 
                    ??ticos y profesionales que operan por la Aduana 
                    de Veracruz para que, junto con el Gobierno Federal,
                    hacer que el comercio exterior por esta Aduana sea 
                    de la manera m??s eficiente y confiable. 
                    La actividad prioritaria es promover la dignidad y 
                    sustentabilidad de la profesi??n de sus agremiados; 
                    como segunda actividad es ofrecer servicios especializados 
                    confiables que sean ??tiles y de inter??s com??n para todos 
                    sus miembros.</b>
                </p><br>
                <strong>VISI??N</strong>
                <p><b>
                    Seguir siendo una agrupaci??n estrat??gica y l??der de opini??n 
                    en materia de comercio exterior que identifique macro tendencias 
                    para promover a sus agremiados la conversi??n a la modernidad y a 
                    la mejora continua ayudados de nuevas tecnolog??as y con mejores 
                    pr??cticas en sus organizaciones. Seguir promoviendo ante las 
                    Autoridades Aduaneras y Portuarias la eficiencia en la operaci??n 
                    del Puerto.</b>
                </p><br>
                <strong>C??DIGO DE ??TICA</strong>
                <p><b>
                Este C??digo de ??tica pretende ser un documento que, adem??s de ser 
                vinculado de manera formal con los Estatutos de la Confederaci??n, 
                sirva como instrumento  de respeto a las leyes y el convencimiento 
                del valor que tiene para el desarrollo armonioso de una sociedad y 
                de sus instituciones, el apego a las leyes del Estado y de sus 
                instituciones, as?? como el respeto a las normas que rigen la actividad 
                profesional.
                </b>
                </p>
                <p><b> <font size=4>
                <li type="square">Equipo: Fortalecer nuestro talento.</li>
                <li type="square">Actitud: Lo que hacemos, lo hacemos con pasi??n.</li>
                <li type="square">Respeto: Apreciar nuestras diferencias siendo incluyentes.</li>
                <li type="square">Confianza: Proyectar seguridad.</li>
                <li type="square">Empat??a: Comprometidos con equidad.</li>
                <li type="square">Energ??a: Que suceda depende de nosotros.</li>
                </font></b></p>

            </article>
        </div>       
    </main>


    <script src="../cuerpo/scripts.js"></script>
</body>
</html>