<?php
include "config.php";
if(isset($_POST["herramienta"])){
   $id_h=$_POST["herramienta"];
   $borrar="delete from ".$tabla_h." where id_herramientas=".$id_h;
   $borrarsql=mysql_query($borrar,$conex) or die("ERROR!".mysql_error());
}

?>
