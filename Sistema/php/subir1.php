<?php
    include ("../php/conexion.php");

    $carpeta = '../archivos/importacion';

    $nombre = $_FILES['file']['name'];
    $ruta = $_FILES['file']['tmp_name'];
    $destino = $carpeta.$nombre;

    if(copy($ruta, $destino)){
        //echo "Se guardo correctamente el archivo";
        
        $sql = "INSERT INTO table_file_impo(nombre)values('$nombre')";
        $resultado = mysqli_query($conexion,$sql);
        if ($resultado) 
        {
            echo " se guardo correctamente";
        }    
    }
?>