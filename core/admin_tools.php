<?php
// Este php es para imprimir las acciones de cada herramienta por ID
include "config.php";
$mostrar = mysql_query("select * from ".$tabla_h, $conex) or die("Ha ocurrido un error".mysql_error());
while ($fila = mysql_fetch_assoc($mostrar)){
//Modal ha mostrar Antes de borrar
    //He Imprimida en HTML para CADA herramienta con su identificador
    //Ya que cada herramienta imprime su propio modal, el ajax sabra distinguirlo
    echo '<div id="confirm-borrado-'.$fila["id_herramientas"].'" class="modal fade" tabindex=-1 role="dialog" aria-labelledby="Confirmar-borrado">';
    echo '    <div class="modal-dialog modal-sm" role="document">';
    echo '               <div class="modal-content text-center">';
    echo '                 <div class="modal-header">';
    echo '                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '                            <h2 class="modal-title text-danger">¿Seguro?</h2>';
    echo '                    </div>';
    echo '            <div class="modal-body">';
    echo '                    <button id="yes-borrado'.$fila["id_herramientas"].'" class="btn btn-danger"> Sí</button>';
    echo '                    <button class="btn btn-default" data-dismiss="modal"> No</button>';
    echo '                </div>';
    echo '            </div>';
    echo '   </div>';
    echo '</div>';
//Acciones del JS
    echo '<script>';
    echo '$("#btn-borrar'.$fila["id_herramientas"].'").click(function(){';
//Abrir Modal
    echo '   $("#confirm-borrado-'.$fila["id_herramientas"].'").modal("show");';
     //Si se hace click en "Si" manda con un Ajax POST 
    //el id de la herramienta a borrar
    echo '   $("#yes-borrado'.$fila["id_herramientas"].'").click(function(){';
    echo '      $("#h_'.$fila["id_herramientas"].'").hide();';
    echo '      $.post("../core/borrar.php",{herramienta:'.$fila["id_herramientas"].'},function(result,status){';
    //Cierra el modal
    echo '          $("#confirm-borrado-'.$fila["id_herramientas"].'").modal("hide");';
    //Aviso de que se ha borrado con exito
    echo '    $.notify({';
    echo '        icon:"glyphicon glyphicon-ok",';
    echo '        message:"Se ha borrado con exito"';
    echo '    },';
    echo '    {';
    echo '        type:"success",';
    echo '        placement:{';
    echo '            from:"top",';
    echo '            align:"center"}';
                echo '});';
            echo '});';
        echo '});';
    echo '});';
//Acciones del Editar
echo '$("#btn-editar'.$fila["id_herramientas"].'").click(function(){';
//Abrir Modal
echo '    $("#confirm-editar").modal("show");';
//Ajax para solicitar los nombres
echo '    $.post("../core/editar.php",{herramienta:'.$fila["id_herramientas"].'},function(result,status){';
echo '        resultado=JSON.parse(result);';
echo '        $("#name_h").attr("value",resultado[1]);';
echo '        $("#number_h").attr("value",resultado[2]);';
echo '        document.getElementById("status_h").selectedIndex = resultado[3];';
echo '        $("#serial_h").attr("value",resultado[4])';
echo '    });';
echo '});';
    echo '</script>';
}
mysql_free_result($mostrar);
mysql_close($conex);
?>
