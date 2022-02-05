<?php

    session_start();

    if (!isset($_SESSION['is_admin']))
    {
        if (!isset($_SESSION['is_member']))
        {
            header("Location: login/login.html");
        }
    }

?>