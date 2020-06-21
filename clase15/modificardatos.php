<?php
session_start();
require_once("libs/conex.php");
require_once("libs/usuarios.lib.php");
require_once("libs/setup.lib.php");
if ($_POST)
  {
    $errores=[];
    if ( !filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL ))
    {
      array_push($errores, "Direccion de correo inválida");
    }
    if (empty($_POST['correo']))
    {
      array_push($errores, "Direccion de correo vacío");
    }
    if (empty($_POST['nombre']))
    {
      array_push($errores, "El campo Nombre está vacío");
    }
    if (count($errores)<1) {
    modificar_datos($conn, $_POST['nombre'], $_POST['correo']);
  }else{ ?>
    <h4>Errores</h4>
    <ul>
      <?php foreach ($errores as $e) { ?>
        <li><?php echo $e; ?></li>
        <?php
      } ?>
    </ul>

  <?php }
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php //include("navbar.php"); ?>
    <div class="container">
      <h3>Registro de usuario</h3>
<form class="" action="modificardatos.php" method="post">
  <input class="form-control" type="text" name="nombre" value="<?php $_SESSION['nombre']; ?>" placeholder="Ingrese su nombre"> <br>
  <input class="form-control"  type="text" name="correo" value="<?php $_SESSION['correo']; ?>" placeholder="Ingrese su correo"> <br>
  <button class="btn btn-primary "  type="submit" name="button">Actualizar</button>
</form>
<div >
  <a href="index.php" class="btn">Volver a inicio</a>
</div>

</body>
</html>
