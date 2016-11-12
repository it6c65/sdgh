<?php
include "config.php";
if(isset($_POST["herramienta"])){
   $borrar="delete from ".$tabla_h." where id_herramienta=".$id_h;
}
?>
