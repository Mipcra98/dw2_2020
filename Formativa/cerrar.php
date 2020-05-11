<?php
session_start();
session_destroy();
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Finalizado</title>
   </head>
   <body>
     <div class="container">
       <h3>Registro</h3>
          <?php
          $Correo0 = "";
          $Correo1 = "";
          $Select = "";
          $personas = $_SESSION['personas'];
          foreach ($personas as $key => $value) {
            $Correo0 = $value['cor0'];
            $Correo1 = $value['cor1'];
            $Select = $value['select'];
            echo $Correo0."<br>";
            if ($Correo0 == $Correo1){
              echo "Ambos correo son iguales<br>";
              if ($Select == "..."){
                echo "No has seleccionado si deseas recibir notificaciones<br>";
              }else {
                if ($Select == "Si deseo"){
                  echo "Desde ahora recibiras notificaciones en tu correo electrónico de esta página<br>";
                }else{
                  echo "No recibirás notificaciones de esta página<br>";
                }
              }
            }else{
              echo "Los correos son distintos<br>";
              echo "Necesitas los correos iguales para recibir notificaciones<br>";
            }
          }
          ?>
       <a class="btn btn-primary" href="formativa.php" style="margin-bottom:1rem">Volver al Formulario</a>
     </div>
   </body>
 </html>
