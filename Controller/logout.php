<?php

    session_start();
    session_destroy();
    header('location: ../View/User Authentication/Login.php');

?>