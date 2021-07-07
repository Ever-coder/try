<?php
 require 'conexion.php';
  
 $nombreR  = ucwords($_POST['nombreR']);
 $nombreE  = ucwords($_POST['nombreE']);
 $tel  = $_POST['tel'];
 $email = $_POST['email'];
 $grado = $_POST['grado'];
 $sector = $_POST['sector'];
 $message = $_POST['message'];
 $fecha = $_POST['fecha'];

$insertar = "INSERT INTO formulario(nombreR,nombreE,telefono,sectorT,correo,gradoI,mensaje,fecha) VALUES ('$nombreR','$nombreE','$tel','$sector','$email','$grado','$message','$fecha')";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> 
            if(confirm('Su informacion se ha enviado, Pronto nos comunicaremos... Presione Aceptar si desea llenar otro formulario o Cancelar para volver a Inicio')){
               location.href = '../solicitud_info.php';
            }else{
               location.href = '../index.html';
            }
         </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../solicitud_info.php';
    </script>";
}






?>