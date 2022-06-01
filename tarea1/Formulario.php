<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />

  <title>DATOS</title>
  </head>
  <body>
    <form action="registro.php" method="POST">

      <h3>Añadir Usuarios</h3>
    <form action="registroproducto.php" method="POST">
        <div class="mb-3">
            <label class="from-lable">Ingrese su nombre: </label>
            <input type="text" class="form-control" name="Nombre" required/>
        </div>

      <div class="mb-3">
            <label class="from-lable">Ingrese su Apellido Paterno: </label>
            <input type="text" class="form-control" name="ApePaterno" required/>
        </div>

      <div class="mb-3">
        <label for="form-label">Ingrese su apellido Materno:</label>
        <input type="text" class="form-control" name="ApeMaterno" required/>
      </div>

      <div class="mb-3">
        <label for="form-label">Ingrese su numero telefonico:</label>
        <input type="text" class="form-control" name="Telefono" required/>
      </div>

      <div class="mb-3">
        <label for="form-label">Ingrese su correo:</label>
        <input type="text" class="form-control" name="Correo" required/>
      </div>

      <div class="mb-3">
        <label for="form-label">ingrese su usuario:</label>
        <input type="text" class="form-control" name="Usuario" required/>
      </div>

      <div class="mb-3">
        <label for="form-label">ingrese su contraseña:</label>
        <input type="text" class="form-control" name="Contra" required/>
      </div>

      <button type="submit" name="enviar" class="btn btn-primary"value="añade usuario">Añadir usuario
      </button>
    </form>
      <!-- inicio de la tabla -->
  <table class="table">
    <thead>
      <tr>
        <th scope="row">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Usuario</th>
        <th scope="col">Password</th>

      </tr>
    </thead>
    <tbody>
<?php  
  include('Conec.php');
  $consulta = "SELECT * FROM Datos";

  $resultado = mysqli_query($conexion,$consulta);
  while($fila = mysqli_fetch_array($resultado)){
  ?>
  <tr>
  <th scope="row"><?php echo $fila ['Codigo'] ?></th>
  <td><?php echo $fila ['Nombre'] ?></td>
  <td><?php echo $fila ['ApePaterno'] ?></td>
  <td><?php echo $fila ['ApeMaterno'] ?></td>
  <td><?php echo $fila ['Telefono'] ?></td>
  <td><?php echo $fila ['Correo'] ?></td>
  <td><?php echo $fila ['Usuario'] ?></td>
  <td><?php echo $fila ['Contra'] ?></td>

  <?php } ?>

</tbody>
        <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"
    ></script>
  </body>
</html>