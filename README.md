# pysa.github.io
<? php
    session_start ();
    if ( isset ( $ _SESSION [ 'usuario' ])) {
        
        encabezado ( "ubicación: ../cuerpo/index.php" );
    }
?>
