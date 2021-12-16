<?php
    include 'conexion.php';
    session_start();
    
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario'
        and contrasena ='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        header("location: ../cuerpo/principal.php");
        exit();
    }else{
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos");
                window.location= " ../cuerpo/index.php";
            </script>
        ';
        exit();
    }
?>