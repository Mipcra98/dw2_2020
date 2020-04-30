<?php
session_start();
if (!$_SESSION['personas']){
  $_SESSION['personas']=[];
}

if($_POST){
  array_push($_SESSION['personas'],
  [
    "nombre"=> $_POST['nombre'],
    "apellido"=> $_POST['apellido'],
    "fecha"=> $_POST['fenac']
  ]);
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tarea Nº 10</title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <script src="libs/jquery/jquery.min.js" charset="utf-8"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body class="bg-secondary">
    <div class="container bg-dark text-white">
      <h3 style="margin-top:2rem">Ingrese su perfil</h3>
      <form action="formulario.php" method="post">
        <div class="form-group">
          <label>Nombre:</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese un nombre">
        </div>
        <div class="form-group">
          <label>Apellido:</label>
          <input type="text" name="apellido" class="form-control" placeholder="Ingrese un Apellido">
        </div>
        <div class="form-group">
          <label>Fecha de Nacimiento:</label>
          <input type="date" name="fenac" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="enviar" class="btn btn-success" style="float:left">Enviar Datos</button>
          <a class="btn btn-primary" href="cerrar.php" style="margin-left:1rem;margin-bottom:1rem">Cerrar Sesión</a>
        </div>
      </form>
    </div>
  </body>
</html>
