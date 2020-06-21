<?php
session_start();
require_once("libs/conex.php");
require_once("libs/setup.lib.php");
require_once("libs/sugerencias.lib.php");
if ($_GET[id])
{
  $errores=[];
  if (empty($_POST['telefono']))
  {
    array_push($errores, "El teléfono correo esta vacío");
  }
  if (empty($_POST['sugerencias']))
  {
    array_push($errores, "El campo Sugerencias está vacío");
  }
  if (count($errores)>0){
  ?>
     <h4>Errores</h4>
     <ul>
     <?php foreach ($errores as $e) { ?>
       <li><?php echo $e; ?></li>
  <?php
 } ?>
 </ul>
  }
  $sugerencia=sugerenciaTraerId($conn, $_GET[id]);
  if ($_SESSION['administrador']==1 || $_SESSION['id']==$sugerencia['usuario_id'])
  {
  $titulo="Editar sugerencia #".$sugerencia["id"];
} else
{
  $error="no tiene permiso para realizar la operacion";
  $url="index.php?errores=".$error;
  header("Location:$url");
}


}
else {
    $titulo="  Agregue sugerencia ";
}

 ?>
 <script type="text/javascript">alert('Has podido ingresar exitosamente')</script>
<div class="container">
  <div class="card">
    <div class="card-header card text-white bg-primary">
    <h3><?php echo $titulo; ?></h3>

    </div>
      <div class="card-body">
        <form class="" action="procesar.php" method="post">
          <input type="hidden" name="id" value="<?php echo $sugerencia["id"];  ?>">
          <input type="text" name="telefono" value="<?php echo $sugerencia["telefono"];  ?>" class="form-control" placeholder="Ingrese el telefono"> <br>
          <textarea name="sugerencias" rows="8" cols="80" class="form-control"  placeholder="Ingrese su sugerencia"><?php echo $sugerencia["sugerencias"]; ?></textarea>
          <br>
          <button type="submit" name="button" class="form-control">Enviar</button>
        </form>

      </div>
        </div>
</div>
