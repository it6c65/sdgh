<?php 
session_start();
if ($_SESSION["autentificar"]!="tienes acceso")
    header("Location:../index.php?loginstatus=2");
?>
