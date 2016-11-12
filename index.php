<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="icon" href="imgs/favicon.png">
     <!-- Sistema de Gestión de Herramientas del 
     Programa Nacional de Formacion de Mecanica-->
    <title>Acceso al S.D.G.H PNF Mecanica</title>
</head>
<body>
    <!-- Encabezadp del login-->
    <header class="jumbotron text-center">
        <div class="container"><h1 class="hidden-xs">Sistema de Gestion de Herramientas </h1>
            <br>
        <img src="imgs/iutag-logo.png" alt="logo">
        </div>   
    </header>
    <br>
   <div class="container">
       <div class="row">
           <div class="tabpanel col-xs-12 col-xs-offset-0 col-sm-3 col-sm-2 col-md-6 col-md-offset-3">
               <!-- Pestañas del login -->
               <ul class="nav nav-tabs" role="tablist">
                    <!-- Acceso como usuario normal -->
                   <li role="presentation" class="active">
                       <a href="#user" aria-controls="home" role="tab" data-toggle="tab"> 
                           <span class="glyphicon glyphicon-home"></span> Usuario
                       </a>
                   </li>
                   <!-- Acceso como Administrador -->
                   <li role="presentation"><a href="#admin" aria-controls="admin" role="tab" data-toggle="tab"> 
                           <span class="glyphicon glyphicon-cog"> Administrador </span>
                       </a>
                   </li>
               </ul>
               <!-- Contenido de las pestañas del login -->
               <div class="tab-content">
                    <!--Contenido del login de Usuario-->
                   <div class="tab-pane active " id="user">
                       <form action="core/login.php" method="post" >
                            <!-- Input con Icono-->
                           <div class="form-group input-group">
                               <span class="input-group-addon hidden-xs"> <span class="glyphicon glyphicon-user"></span> </span>
                               <input type="text" id="user" name="usuario" class="form-control " placeholder="Usuario">
                            </div>                           
                            <!-- Input con Icono-->
                            <div class="form-group input-group">
                                <span class="input-group-addon hidden-xs"> <span class="glyphicon glyphicon-lock"></span> </span>
                               <input type="password" name="clave" id="pass" class="form-control" placeholder="Contraseña">
                            </div>                      
                            <br> 
                              <div class="form-group text-center">
                                  <button type="submit" class="btn btn-primary">Entrar <span class="glyphicon glyphicon-send"></span> </button>
                              </div>
                       </form>
                   </div>
                    <!-- Contenido del login de Administrador -->
                   <div class="tab-pane" id="admin">
                       <form action="core/login.php" method="post">
                            <input type="hidden" name="usuario" value="admin" readonly>
                            <!-- Input con icono y boton -->
                           <div class="form-group input-group">
                               <span class="input-group-addon hidden-xs"> <span class="glyphicon glyphicon-lock"></span> </span>
                               <input class="form-control" name="clave" type="password" id="pass-admin" placeholder="Contraseña del Administrador">
                               <span class="input-group-btn hidden-xs">
                                   <button type="submit" class="btn btn-primary">
                                       Entrar
                                       <span class="glyphicon glyphicon-send"></span> 
                                   </button>
                               </span>
                           </div>
                           <div class="form-group visible-xs-12 visible-xs-block text-center">
                                       <button type="submit" class="btn btn-primary"> Entrar <span class="glyphicon glyphicon-send"></span></button>
                             </div>

                       </form>
                   
                   </div>
               </div>
            </div>
       </div>
   </div>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jasny-bootstrap.min.js"></script>
<script src="js/bootstrap-notify.min.js"></script>

<?php
if (isset($_GET["loginstatus"])){
    //Define el estado del Acceso:
    // el estado 1: Error en las credenciales de la Sesion
    // el estado 2: Acceso no autorizado
    // el estado 3: Salida con exito del sistema
	$status=$_GET["loginstatus"];
	if ($status==1){
		echo '<script>$.notify("Error en el usuario o contraseña！","danger");</script>';
	}else if ($status==2){
		echo '<script>$.notify("¡Usted no se ha identificado!","warning");</script>';
	}else if ($status==3){
        echo '<script>
    $.notify({
        message:"Has salido con exito"
    },
    {
        type:"success",
        delay:20000,
        timer:10000,
        placement:{
            from:"top",
            align:"center"}
});
         </script>';
	}
}
?>
</body>
</html>
