<?php
//Declarando constantes de Acceso a la base de datos
define(USER,"root");
define(PASS,"luis23");
define(SERVER,"localhost");
//Declarando variables para facilitar el acceso a la base de datos
$db="SDGH";
$tabla_h="herramientas";
$tabla_m="materiales";
$tabla_u="usuarios";
//Conectando a la base de datos
$conex=mysql_connect(SERVER,USER,PASS);
//Seleccionando Base de datos
mysql_select_db($db,$conex);
?>
