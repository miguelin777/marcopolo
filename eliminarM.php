eliminarM.php 

<?php
//requiero la conexion de .php:
include 'conexion.php';
$id=$_GET['id'];
$eliminar="DELETE FROM marca WHERE idMarca='$id'";

$resultado=mysqli_query($conexion,$eliminar);
if($resultado){
    header("location:ELIMARCA.php");
}
else{
    echo "<script>
            alert('No se pudo eliminar el archivo');
            window.history.go(-1);
            </script>";
}
