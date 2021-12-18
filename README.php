<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        
        header("location: ../cuerpo/principal.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PySA</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css"/>    
</head>
<body>
    <main>
        <div class="contenedor">
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Y tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn_Iniciar_Sesion"> Iniciar Sesion</button>
                </div>
                <div class="caja_trasera_registro">
                    <h3>¿Aun no tienes cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn_Registrar">Registrarse</button>
                </div>
            </div>
            <!--Formulario de login y registro-->
            <div class="contenedor_Login-Registro">
                <!--Loging-->
                <form action="../php/login_usuario.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Entrar</button>
                </form>
                <!--Registrarse-->
                <form action="../php/registro_usuario.php" method="POST" class="formulario_registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo" required>
                    <input type="text" placeholder="Correo Electronico" name="correo" required>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../cuerpo/script.js"> </script>
</body>
</html>
