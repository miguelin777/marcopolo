<?php
//requiero la conexion de .php:
include 'conexion.php';
$id=$_GET['id'];
$eliminar="DELETE FROM empleado WHERE idEmpleado='$id'";

$resultado=mysqli_query($conexion,$eliminar);
if($resultado){
    header("location:modificarEmpleado.php");
}
else{
    echo "<script>
            alert('No se pudo eliminar el archivo');
            window.history.go(-1);
            </script>";
}
