<?php
    include 'conexion.php';
    $id = $_REQUEST['clave'];
    echo $id;

    $sql="SELECT * FROM table_file WHERE id='$id'";
    $resultado = mysqli_query($conexion,$sql);
    $mostrar = mysqli_fetch_array($resultado);

    $nombre = $mostrar['nombre'];
    if ($nombre =="") {
        # code...
        echo "No hay archivos";
    }else{
        $archivo = "../archivos/exportacion".$nombre;
        echo '<center> <iframe src="'.$archivo.'" width="800" height="500"></iframe> </center>';
    }
?>