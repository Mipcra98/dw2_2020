<?php
session_start();
if (!$_SESSION['personas']){
  $_SESSION['personas']=[];
}

if($_POST){
  array_push($_SESSION['personas'],
  [
    "cor0"=> $_POST['correo0'],
    "cor1"=> $_POST['correo1'],
    "select"=> $_POST['seleccion'],
  ]);
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formativa</title>
  </head>
  <body>
    <div class="container">
      <h3 style="margin-top:2rem">Registro</h3>
      <form action="formativa.php" method="post">
        <div>
          <label>Ingrese su correo:</label>
          <input type="text" name="correo0" placeholder="pepito@hotmail.com">
        </div>
        <div class="form-group">
          <label>Vuelva a ingresar su correo:</label>
          <input type="text" name="correo1" placeholder="pepito@hotmail.com">
        </div>
        <div class="form-group">
          <label>Desea recibir notificaciones?:</label>
          <select name="seleccion">
          <option>...</option>
          <option>Si deseo</option>
          <option>No deseo</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" name="enviar" style="float:left">Enviar Datos</button>
          <a href="cerrar.php">Cerrar Sesión</a>
        </div>
      </form>
    </div>
  </body>
</html>
