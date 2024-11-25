<?php
//requiero la conexion de .php:
include 'conexion.php';

//recibo los valores:
$id=$_POST['id'];
$nombre=$_POST["nombre"];
$horaT=$_POST["horaT"];
$cuotaH=$_POST["cuotaH"];
$sueldo=$_POST["sueldo"];
$imagen=$_POST["imagen"];

//actualizar los datos:
$actualizar="UPDATE empleado SET nombre='$nombre',horaT='$horaT',
            cuotaH='$cuotaH',sueldo='$sueldo',imagen='$imagen' WHERE idEmpleado='$id'";
$resultado=mysqli_query($conexion,$actualizar);
if($resultado){
    echo "<script>
            alert('Se han guardado los cambios correctamente');
            window.location='modificarEmpleado.php';
            </script>";
}
else{
    echo "<script>
            alert('No se pudo actualizar los datos');
            window.location='modificarEmpleado.php';
            </script>";
}
