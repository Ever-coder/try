<?php

  session_start();

  if (!$_SESSION['usuario']) {
    // code...
    header("location:login_so.php");
  }

  include("logica/conexion.php");

  $usuarios = "Select Id, nombreR, nombreE, telefono, sectorT, correo, mensaje, fecha from formulario"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitudes</title>
    <link rel="stylesheet" href="css/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style type="text/css">
  .box{
    padding: 10px;
    padding-left: 20px;
    margin: 20px auto;
  }
  .menu{
    text-align: right;
  }
</style>
<body>
  <div class="container box">

                  <center><img src="asunclog.jpg"></center>
                <div class="form-group">
                  <form class="menu" action="buscar_solicitud.php" method="post">
                    <input type="text" name="buscar" placeholder="Año Completo-Mes-Día" required="required">
                    <input type="submit" value="Buscar">
                  </form>
                </div>
              
      <table class="table table-dark">
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Fecha</th>
      <th scope="col">Nombre Encargado</th>
      <th scope="col">Nombre Estudiante</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Sector Trabajo</th>
      <th scope="col">Correo</th>
      <th scope="col">Mensaje</th>
    </tr>
  <?php $resultado = mysqli_query($conectar, $usuarios);
      while ($row = mysqli_fetch_assoc($resultado)) {?>
    <tr>
      <td><?php echo $row["Id"];?></td>
      <td><?php echo $row["fecha"];?></td>
      <td><?php echo $row["nombreR"];?></td>
      <td><?php echo $row["nombreE"];?></td>
      <td><?php echo $row["telefono"];?></td>
      <td><?php echo $row["sectorT"];?></td>
      <td><?php echo $row["correo"];?></td>
      <td><?php echo $row["mensaje"];?></td>
      
    </tr>
  <?php } ?>
</table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>