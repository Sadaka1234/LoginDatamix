<!DOCTYPE html>
<?php
require("server.php");


?>


<html>
  <head>
  <title>Datamix Login page</title>
  </head>
  <body>
    <li>In this webpage we love Switch Dog</li>
    <div class="card mt-3">
    <div class="card-body">
        <div class="form-group">

            <h4 class="card-title">
                Nombre Usuario:
            </h4>
            <input type="text" class="form-control" placeholder="Nombre Usuario" >

            <h4 class="card-title">
                Email:
            </h4>
            <input type="text" class="form-control" placeholder="Ingrese Email" >

            <h4 class="card-title">
                Contraseña::
            </h4>
            <input type="text" class="form-control" placeholder="Ingrese Contraseña" >

        </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-dark" href="crearUsuario">Registrarse</button>
    </div>
</div>

  </body>
</html>
