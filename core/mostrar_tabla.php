<?php
include "config.php";
$mostrar = mysql_query("select * from ".$tabla_h, $conex) or die("Ha ocurrido un error".mysql_error());
$total_h = mysql_num_rows($mostrar);
//Abrir tabla
echo "<table class='table'>";
//Encabezado de tabla
echo " <thead>
          <!--Titulo de la tabla-->
          <tr>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Estado</th>
            <th>Serial</th>
            <th></th>
        </tr>
    </thead>        
";
 echo '<tbody class="list">';
    while ($fila = mysql_fetch_assoc($mostrar)){
        print '<tr id=h_'.$fila["id_herramientas"].'>';
//Nombre de la herramienta
                echo '<td class="nombre">'.$fila["nombre_herramienta"].'</td>
                <td class="cantidad"> <span class="badge">'.$fila["num_herramientas"].'</span></td>'; //Cantidad de Herramientas

//Estados de la herramienta
             if($fila["num_herramientas"]==0){
                echo '<td class="disponibilidad"> <span class="label label-danger">No disponible </span></td>';
//Disponible
             }else if($fila["estado"]==0){
                echo '<td class="disponibilidad"> <span class="label label-success">Disponible </span></td>';
//Dañado
             }else if($fila["estado"]==1){
                echo '<td class="disponibilidad"> <span class="label label-warning">Dañado</span></td>';
//Prestada
             }else if($fila["estado"]==2){
                echo '<td class="disponibilidad"> <span class="label label-info">Prestado</span></td>';
             }
//Numero de Serial de la herramienta
            echo '<td> #'.$fila["num_serial"].'</td>';
//Botones de Accion (Editar y Borrar) de la tabla
            echo '<td> <button class="btn btn-labeled btn-purple btn-sm"><span class="btn-label"><span class="glyphicon glyphicon-edit"></span></span> Editar </button>
<button id="btn-borrar'.$fila["id_herramientas"].'" class="btn btn-labeled btn-danger btn-sm"> <span class="btn-label"><span class="glyphicon glyphicon-remove"></span></span> Eliminar </button>
                </td>';
        }
        print "</tr>";
echo '</tbody>
    </table>
    <!--Paginacion dinamica con JS -->
    <div class="text-center"><ul class="pagination pagination-sm"></ul></div> 
    </div>';
?>
