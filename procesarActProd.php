<?php
//requiero la conexion de .php:
include 'conexion.php';

//recibo los valores:
$id=$_POST['id'];
$idMarca=$_POST["idMarca"];
$idCategoria=$_POST["idCategoria"];
$nombre=$_POST["nombre"];
$descr=$_POST["descr"];
$precio=$_POST["precio"];
$imagen=$_POST["imagen"];

//actualizar los datos:
$actualizar="UPDATE producto SET idMarca='$idMarca',idCategoria='$idCategoria',
            nombre='$nombre',descr='$descr',precio='$precio',imagen='$imagen' WHERE idProducto='$id'";
$resultado=mysqli_query($conexion,$actualizar);
if($resultado){
    echo "<script>
            alert('Se han guardado los cambios correctamente');
            window.location='MODP.php';
            </script>";
}
else{
    echo "<script>
            alert('No se pudo actualizar los datos');
            window.location='MODP.php';
            </script>";
}

