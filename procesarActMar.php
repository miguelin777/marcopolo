<?php
//requiero la conexion de .php:
include 'conexion.php';

//recibo los valores:
$id=$_POST['id'];
$nombre=$_POST["nombre"];
$imagen=$_POST["imagen"];

//actualizar los datos:
$actualizar="UPDATE marca SET nombre='$nombre',imagen='$imagen' WHERE idMarca='$id'";
$resultado=mysqli_query($conexion,$actualizar);
if($resultado){
    echo "<script>
            alert('Se han guardado los cambios correctamente');
            window.location='MODM.php';
            </script>";
}
else{
    echo "<script>
            alert('No se pudo actualizar los datos');
            window.location='MODM.php';
            </script>";
}
