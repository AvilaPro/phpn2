<?php

// cerramos sesion y redirigimos al login
session_start();

session_destroy();
header("location:login.php");