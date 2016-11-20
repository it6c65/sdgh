<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Llamando Estilos -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="icon" href="../imgs/favicon.png">
    <title>Herramientas en el Sistema</title>
</head>
<body> 
<!-- Contenedor -->
<div class="main container-fluid">
    <div class="row">
         <!-- Columna 1 -->
        <div class="container col-md-3">
<nav class="navmenu navmenu-default navmenu-fixed-left offcanvas-sm" role="navigation" id="menu-principal">
<a class="navmenu-brand text-center" href="#">
<img src="../imgs/iutag-logo.png" alt="logo">
 <div class="hidden-md hidden-lg visible-sm-12 visible-xs-12">
        <button class="btn-slider btn btn-menu btn-lg" data-toggle="offcanvas" data-target="#menu-principal" data-canvas="body">
            Volver <span class="glyphicon glyphicon-share-alt"></span>
        </button>
    </div>
    <!-- Menu vertical -->
</a>
<ul class="nav navmenu-nav">
<li><a href="home.php"> <span class="glyphicon glyphicon-record"></span> Home </a></li>
<li><a href="info.php"><span class="glyphicon glyphicon-exclamation-sign"></span> Informacion</a></li>
<li class="active"><a href="#"><span class="glyphicon glyphicon-wrench"></span> Herramientas</a></li>
<li><a href="gestion_materiales.php"><span class="glyphicon glyphicon-book"></span> Materiales</a></li>
<li><a href="exit.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
</ul>
</nav>
   </div>
  <!-- Columna 2-->
 <div class="col-md-8">
     <!--Boton reponsive -->
 <div class="hidden-md hidden-lg visible-sm-12 visible-xs-12">
        <button class="btn btn-menu btn-lg " data-toggle="offcanvas" data-target="#menu-principal" data-canvas="body">
            <span class="glyphicon glyphicon-th"></span>
        </button>
    </div>
    <!--Encabezado de la pagina -->
<div class="page-header text-center">
    <h1>Listado de Herramientas</h1>
</div>
<div class="row">
    <!--Buscador de herramientas/materiales-->
    <div id="herramientas" class="col-xs-12 col-md-offset-1">
        <div class="input-group col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-7">
        <input type="text" class="search form-control input-sm" placeholder="Buscar...">
        <div class="input-group-btn">
            <button class="btn btn-info btn-sm"><span class="glyphicon glyphicon-search"></span></button>
        </div>
    </div>
    <br>
    <!--Boton de Agregar-->
    <button class="btn btn-labeled btn-success btn-sm" data-toggle="collapse" data-target="#agregar_h" aria-expanded="false" aria-controls="agregar_h"><span class="btn-label"><span class="glyphicon glyphicon-plus"></span></span> <strong>Agregar Herramienta</strong></button>
    <button class="sort btn btn-default btn-sm" data-sort="nombre"> <span class="glyphicon glyphicon-sort"></span> Ordenar por nombre</button>
    <button class="sort btn btn-default btn-sm" data-sort="disponibilidad"> <span class="glyphicon glyphicon-sort"></span> Ordenar por Estado</button>
     <!--Menu de Agregar-->
    <div id="agregar_h" class="collapse">
        <div class="row">
            <form action="" class="bg-success">
                <div class="form-group col-md-6">
                    <label for="nom_h" class="control-label">Nombre: </label>
                    <input type="text" class="form-control input-sm" id="nom_h">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label for="cantidad">Cantidad: </label>
                    <input type="number" class="form-control input-sm" id="cantidad">
                </div>                
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label for="serial">Serial de la Herramienta: </label>
                    <input type="text" class="form-control input-sm" data-mask="wwwwww" id="serial">
                </div>              
                <div class="clearfix"></div>
                <div class="form-group col-md-6">
                    <label for="estado"> Estado de la Herramienta: </label>
                    <select id="estado" name="estado_h" class="form-control input-sm">
                        <option value="0">Excelente estado</option>
                        <option value="1">Reportar herramienta como dañada</option>
                        <option value="2">Anunciar que la herramienta fue dada a otro ente</option>
                    </select>
                </div>        
                <div class="clearfix"></div>
                <div class="form-group col-md-6 text-center">
                    <button class="btn btn-success btn-sm btn-labeled">Enviar<span class="btn-label btn-label-right"><span class="glyphicon glyphicon-send"></span></span></button></div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <!--Tabla de Herramientas -->
<div class="table-responsive">
        <!--<table class="table">-->
          <!--<thead>-->
              <!--[>Titulo de la tabla<]-->
              <!--<tr>-->
                <!--<th>Nombre</th>-->
                <!--<th>Estado</th>-->
                <!--<th>Cantidad</th>-->
                <!--<th>Serial</th>-->
                <!--<th></th>-->
                <!--</tr>-->
            <!--</thead>        -->
             <!--[>Contenido de la tabla (dinámico) <]-->
            <!--<tbody class="list">-->
            <!--<tr>-->
                <!--<td class="nombre"> Destornillador Estrella </td>-->
                <!--<td class="disponibilidad"> <span class="label label-danger">No disponible </span></td>-->
                <!--<td class="cantidad"> <span class="badge">0</span></td>-->
                <!--<td> #124ADSA</td>-->
                <!--<td> <button class="btn btn-labeled btn-purple btn-sm"><span class="btn-label"><span class="glyphicon glyphicon-edit"></span></span> Editar </button>-->
<!--<button class="btn btn-labeled btn-danger btn-sm"> <span class="btn-label"><span class="glyphicon glyphicon-remove"></span></span> Eliminar </button>-->
                <!--</td>-->
            <!--</tr>-->
             <!--<tr>-->
                <!--<td class="nombre"> Martillo </td>-->
                <!--<td class="disponibilidad"> <span class="label label-success"> Disponible </span></td>-->
                <!--<td> <span class="badge">16</span></td>-->
                <!--<td> #124ADSA</td>-->
                <!--<td> <button class="btn btn-labeled btn-purple btn-sm"><span class="btn-label"><span class="glyphicon glyphicon-edit"></span></span> Editar </button>-->
<!--<button class="btn btn-labeled btn-danger btn-sm"> <span class="btn-label"><span class="glyphicon glyphicon-remove"></span></span> Eliminar </button>-->
                <!--</td>-->
            <!--</tr>-->
            <!--<tr>-->
                <!--<td class="nombre"> Llave Inglesa </td>-->
                <!--<td class="disponibilidad"> <span class="label label-warning"> Dañado </span></td>-->
                <!--<td> <span class="badge"></span></td>-->
                <!--<td> #124ADSA</td>-->
                <!--<td> <button class="btn btn-labeled btn-purple btn-sm"><span class="btn-label"><span class="glyphicon glyphicon-edit"></span></span> Editar </button>-->
<!--<button class="btn btn-labeled btn-danger btn-sm"> <span class="btn-label"><span class="glyphicon glyphicon-remove"></span></span> Eliminar </button>-->
                <!--</td>-->
            <!--</tr>-->
              <!--<tr>-->
                <!--<td class="nombre"> Prensa </td>-->
                <!--<td class="disponibilidad"> <span class="label label-info"> Prestado </span></td>-->
                <!--<td> <span class="badge"></span></td>-->
                <!--<td> #124ADSA</td>-->
                <!--<td> <button class="btn btn-labeled btn-purple btn-sm"><span class="btn-label"><span class="glyphicon glyphicon-edit"></span></span> Editar </button>-->
<!--<button class="btn btn-labeled btn-danger btn-sm"> <span class="btn-label"><span class="glyphicon glyphicon-remove"></span></span> Eliminar </button>-->
                <!--</td>-->
            <!--</tr>-->
                 <!--<tr id="h_1">-->
                    <!--<td class="nombre"> Za </td>-->
                    <!--<td class="disponibilidad"> <span class="label label-danger">No disponible </span></td>-->
                    <!--<td> <span class="badge">0</span></td>-->
                    <!--<td> #124ADSA</td>-->
                    <!--<td> <button id="btn-editar" class="btn btn-labeled btn-purple btn-sm"><span class="btn-label"><span class="glyphicon glyphicon-edit"></span></span> Editar </button>-->
<!--<button id="btn-borrar" class="btn btn-labeled btn-danger btn-sm"> <span class="btn-label"><span class="glyphicon glyphicon-remove"></span></span> Eliminar </button>-->
                <!--</td>-->
            <!--</tr>-->

            <!--</tbody>-->
        <!--</table>-->
        <!--Paginacion dinamica con JS -->
       <!-- <div class="text-center"><ul class="pagination pagination-sm"></ul></div> -->
            <?php include "mostrar_tabla.php";?>
        </div>
    </div>
</div>

<div id="confirm-editar" class="modal fade" tabindex=-1 role="dialog" aria-labelledby="Confirmar-borrado">
    <div class="modal-dialog" role="document">
               <div class="modal-content text-center">
                 <div class="modal-header bg-info">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title text-info">Editando Herramienta</h2>
                    </div>
            <div class="modal-body bg-info">
                <form action="" method="post" >
                    <div class="form-group">
                        <label for="nomb_h">Nombre de la Herramienta</label>
                        <input type="text" name="nomb_h" id="name_h" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cantidad_h">Cantidad de Herramientas</label>
                        <input type="number" name="cantidad_h" id="number_h" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="seriales_h">Numero de serial de la herramienta</label>
                        <input type="text" name="seriales_h" id="serial_h" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="estado_h">Estado de la herramienta</label>
                        <select id="status_h" name="estado_h" class="form-control">
                            <option value="0">Excelente Estado</option>
                            <option value="1">Reportar como dañado</option>
                            <option value="2">Anunciar que la herramienta fue dada a otro ente</option>
                        </select>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                    <button id="yes-edit" class="btn btn-primary">Confirmar cambios</button>
                    <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>   
                </form>
                </div>
            </div>
   </div>
</div>


</div>
</div>

<!--Declaraciones Javascript -->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jasny-bootstrap.min.js"></script>
<script src="../js/bootstrap-notify.min.js"></script>
<script src="../js/list.min.js"></script>
<script src="../js/list.pagination.min.js"></script>
<script src="../js/busqueda_herramientas.js"></script>
<?php
include "admin_tools.php";
?>
</body>
</html>
