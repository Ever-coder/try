<?php
include('logica/conexion.php');

if (isset($_POST['usuario'])) {
    // code...
    
}
/*$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conectar,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:mostrar_solicitud.php");

}else{
    ?>
    <?php
    include("login_so.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);*/
?>
