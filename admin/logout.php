<?php
    session_start();

    if(session_destroy())
    {
        header('location: ../../../../Subject_CEI3104/index.php');
    }
?>