<?php
//requiero la conexion de .php:
include 'conexion.php';
$id=$_GET['id'];
$eliminar="DELETE FROM producto WHERE idProducto='$id'";

$resultado=mysqli_query($conexion,$eliminar);
if($resultado){
    header("location:ELIPROD.php");
}
else{
    echo "<script>
            alert('No se pudo eliminar el archivo');
            window.history.go(-1);
            </script>";
}
