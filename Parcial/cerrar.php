<?php
session_start();
session_destroy();
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sesión Cerrada</title>
     <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
     <script src="libs/jquery/jquery.min.js" charset="utf-8"></script>
     <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
   </head>
   <body class="bg-secondary">
     <div class="container bg-dark text-white rounded-lg">
       <h1 style="margin-top:2rem">Sesión Cerrada</h1>
       <h3>Lista de personas registradas durante la sesión</h3><table class="table">
            <table class="table table-striped table-dark">
             <thead class="thead-light">
               <tr>
                 <th scope="col">Nombre</th>
                 <th scope="col">Apellido</th>
                 <th scope="col">Fecha de Nacimiento</th>
               </tr>
             </thead>
             <tbody>
               <?php
               $personas = $_SESSION['personas'];
               foreach ($personas as $key => $value) {
                   echo "<tr><th scope='row'>".$value['nombre']."</th><td>".$value['apellido']."</td><td>".$value['fecha']."</td></tr>";
               }
               ?>
             </tbody>
           </table>
       <a class="btn btn-primary" href="formulario.php" style="margin-bottom:1rem">Volver al Formulario</a>
     </div>
   </body>
 </html>
