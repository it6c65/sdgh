<?php 
include "config.php";
if(isset($_POST["herramienta"])){
   $id_h=$_POST["herramienta"];
   $buscar=mysql_query("select * from $tabla_h where id_herramientas=$id_h");
   $herramienta=mysql_fetch_row($buscar);
   $info_h=array($id_h,$herramienta[1],$herramienta[2],$herramienta[3],$herramienta[4]);
   echo json_encode($info_h);
}
if(isset($_POST["quiero_editar"])){
   $id_h=$_POST["herramienta"];
   $nom_h=$_POST["nomb_h"];
   $cantidad=$_POST["cantidad_h"];
   $num_serial=$_POST["seriales_h"];
   $status=$_POST["estado_h"];
   $editar="update $tabla_h nombre_herramienta=$nomb_h num_herramientas=$cantidad estado=$status num_serial=$num_serial set where id_herramientas=".$id_h;
   $editarsql=mysql_query($editar,$conex) or die("ERROR!".mysql_error());
}


?>
