eliminarC.php 

<?php
//requiero la conexion de .php:
include 'conexion.php';
$id=$_GET['id'];
$eliminar="DELETE FROM categoria WHERE idCategoria='$id'";

$resultado=mysqli_query($conexion,$eliminar);
if($resultado){
    header("location:ELICAT.php");
}
else{
    echo "<script>
            alert('No se pudo eliminar el archivo');
            window.history.go(-1);
            </script>";
}
