<?php

// crear
function crear_usuario($conn, $nombre, $usuario,$contrasena,$correo)
{
  $sql="INSERT INTO usuarios (id, nombre, usuario, contrasena, correo, administrador)
  VALUES (NULL, '".$nombre."', '".$usuario."', '".$contrasena."', '".$correo."',0)";
  //echo $sql;
  $filas=$conn->query($sql);
}
// modificar
function modificar_datos($conn, $nombre, $correo)
{
  $id=$_SESSION['id'];
  $usuario=$_SESSION['usuario'];
  $contrasena=$_SESSION['contrasena'];
  $admin=$_SESSION['administrador'];

  $consulta = "SELECT * FROM ususarios WHERE id = $id";
  $consulta=$conn->query($consulta);
  if (empty(!$_POST['usuario'])){
    if(empty(!$_POST['correo'])){
      $sql="UPDATE usuarios SET nombre = '$nombre', usuario='$usuario',
      contrasena='".$contrasena."', correo='".$correo."', administrador=$admin WHERE id = $id";
      //VALUES ($id, '".$nombre."', '".$usuario."', '".$contrasena."', '".$correo."',$admin)";
      //echo $sql;
      $filas=$conn->query($sql);
      header('Location:index.php');
    }
  }
}

// borrar

// cambiar password
function cambiar_pass($conn, $actual, $nuevo, $repeticion)
{
  $id=$_SESSION['id'];
  $nombre=$_SESSION['nombre'];
  $usuario=$_SESSION['usuario'];
  $correo=$_SESSION['correo'];
  $admin=$_SESSION['administrador'];

  $consulta = "SELECT * FROM ususarios WHERE id = $id";
  $consulta=$conn->query($consulta);
  if ($_POST['new_contra']==$_POST['new_contra_control'])//(empty(!$_POST['usuario'])){
    if ($_POST['contra_actual']==($consulta['contrasena'])//(empty(!$_POST['correo'])){
          $sql = "UPDATE usuarios SET nombre = '".$nombre."', usuario = '".$usuario."', contrasena = '".$nuevo."', correo = '".$correo."', administrador = .$admin WHERE id =" .$id;// usuarios (id, nombre, usuario, contrasena, correo, administrador)
          //VALUES ($id, '".$nombre."', '".$usuario."', '".$nuevo."', '".$correo."',$admin)";
          //VALUES ($id, '".$nombre."', '".$usuario."', '".$contrasena."', '".$correo."',$admin)";
          //echo $sql;
          $filas=$conn->query($sql);
          header('Location:index.php');
          }else{
          print_r('tu contraseña no coincide con la registrada');
        }
      }else{
    print_r('Las nuevas contraseñas no coinciden entre sí');
  }
}
//  {
//   $id = $_SESSION['id'];
//   $nombre = $_SESSION['nombre'];
//   $usuario = $_SESSION['usuario'];
//   $correo = $_SESSION['correo'];
//   $admin = $_SESSION['administrador'];
//
//   $consulta = "SELECT * FROM ususarios WHERE id = $id";
//   $consulta=$conn->query($consulta);
//   if ($_POST['new_contra']==$_POST['new_contra_control']){
//     if ($_POST['contra_actual']==($consulta['contrasena']){
//       $sql = "UPDATE usuarios SET nombre = $'$nombre', usuario='$usuario', contrasena='$nuevo', correo='$correo', administrador=$admin WHERE id =$id";
//       //VALUES ($id, '".$nombre."', '".$usuario."', '".$nuevo."', '".$correo."' ,$admin)";
//       //echo $sql;
//       $filas=$conn->query($sql);
//       print_r('Datos actualizados exitosamente');
//       header('Location:index.php');
//     }else{
//     print_r('tu contraseña no coincide con la registrada');
//     }
//   }else{
//   print_r('Las nuevas contraseñas no coinciden entre sí');
//   }
// }
 ?>
