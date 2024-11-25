<?php
// loguear.php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$query = "SELECT COUNT(*) as contar FROM sesion WHERE usuario='$usuario' AND clave='$clave'";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {
    $_SESSION['username'] = $usuario;
    header("location: HOMEadmin.html");
} else {
    echo "<div style='text-align:center; color: red; margin-top: 20px;'>
            <p>DATOS INCORRECTOS</p>
            <a href='login.html' style='color: #007BFF;'>Intentar de nuevo</a>
          </div>";
}
?>