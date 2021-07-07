<?php

  include("logica/conexion.php");

  $buscar = $_POST['buscar'];

  $SQL_SEARCH = "SELECT Id, nombreR, nombreE, telefono, sectorT, correo, mensaje, fecha FROM formulario WHERE fecha = '$buscar'"; 

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
<div class="container box">

                  <center><img src="asunclog.jpg"></center>
                  <div class="form-group">
                  <form class="menu" action="mostrar_solicitud.php">
                    <input type="submit" value="Volver">
                  </form>
                </div>
              
      <table class="table">
          <thead class="thead-dark">
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
          </thead>
  <?php
      $sql_query = mysqli_query($conectar, $SQL_SEARCH);

      while ($row = mysqli_fetch_array($sql_query)) {?>
          <tbody class="tbody-striped">
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
          </tbody>
  <?php } ?>
</table>
</div>