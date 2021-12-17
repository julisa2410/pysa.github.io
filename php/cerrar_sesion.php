<?php
    session_start();
    session_destroy();
    header("location: ../cuerpo/index.php");
?>