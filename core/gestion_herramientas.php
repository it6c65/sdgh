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
 <div class="col-md-9">
     <!--Boton reponsive -->
 <div class="hidden-md hidden-lg visible-sm-12 visible-xs-12">
        <button class="btn btn-menu btn-lg " data-toggle="offcanvas" data-target="#menu-principal" data-canvas="body">
            <span class="glyphicon glyphicon-th"></span>
        </button>
    </div>
<div class="page-header text-center">

 <h1>Herramientas</h1>
</div>
<header class="text-right row">
<div class="input-group col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-7">
<input type="text" class="form-control input-sm" placeholder="Buscar...">
<div class="input-group-btn">
<button class="btn btn-info btn-sm"><strong>Buscar</strong> <span class="glyphicon glyphicon-search"></span></button>
</div>
</div>

 </header>
&copy;

</div>
</div>

<!--Declaraciones Javascript -->
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/notify.min.js"></script>
<script src="../js/list.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jasny-bootstrap.min.js"></script>
</body>
</html>
