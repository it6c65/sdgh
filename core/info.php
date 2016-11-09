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
    <link rel="icon" href="../imgs/favicon.png">
    <title>Documentacion del S.D.G.H</title>
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
<!--Boton solo visible en dispositivos moviles -->
 <div class="hidden-md hidden-lg visible-sm-12 visible-xs-12">
        <button class="btn-slider btn btn-menu btn-lg " data-toggle="offcanvas" data-target="#menu-principal" data-canvas="body">
            Volver <span class="glyphicon glyphicon-share-alt"></span>
        </button>
    </div>
    <!-- Menu vertical -->
</a>
<ul class="nav navmenu-nav">
<li><a href="home.php"> <span class="glyphicon glyphicon-record"></span> Home </a></li>
<li class="active"><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span> Informacion</a></li>
<li><a href="gestion_herramientas.php"><span class="glyphicon glyphicon-wrench"></span> Herramientas</a></li>
<li><a href="gestion_materiales.php"><span class="glyphicon glyphicon-book"></span> Materiales</a></li>
<li><a href="exit.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
</ul>
</nav>
   </div>
  <!-- Columna 2-->
 <div class=" col-md-9">
     <!--Boton responsive -->
 <div class="hidden-md hidden-lg visible-sm-12 visible-xs-12">
        <button class="btn btn-menu btn-lg " data-toggle="offcanvas" data-target="#menu-principal" data-canvas="body">
            <span class="glyphicon glyphicon-th"></span>
        </button>
    </div>
<div class="page-header text-center">
    <h1>Documentación</h1>
</div>
<div class="row text-center">
  <div class="col-md-4 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"><strong>Manual de Usuario</strong></h2>
        </div>
        <div class="panel-body">
            <p>Aqui va alguna descripcion</p>
            <a href="#" class="btn btn-primary btn-labeled"> Descargar <span class="btn-label btn-label-right"><i class="glyphicon glyphicon-arrow-down"></i></span></a>
        </div>
    </div>
</div>

<div class="col-md-4 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"><strong>Manual del Administrador</strong></h2>
        </div>
        <div class="panel-body">
            <p>Aqui va alguna descripcion</p>
            <a href="#" class="btn btn-primary btn-labeled"> Descargar <span class="btn-label btn-label-right"><i class="glyphicon glyphicon-arrow-down"></i></span></a>
        </div>
    </div>
</div>

   </div>
</div>
</div>

<!--Declaraciones Javascript -->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/notify.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jasny-bootstrap.min.js"></script>
</body>
</html>
