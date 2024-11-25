<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Daira">
    <title>Altas</title>
</head>
<body>
    <?php
        //Requiero la comexión de .php
        include 'conexion.php';
        //Comenzar con la sesión:
        session_start();
        //Recibo los valores:
        $nombre=$_POST["nombre"];
        $horaT=$_POST["horaT"];
        $cuotaH=$_POST["cuotaH"];
        $sueldo=$_POST["sueldo"];
        $imagen=$_POST["imagen"];

         //Consulta para insertar:
         $insertar="INSERT INTO empleado(nombre,horaT,cuotaH,sueldo,imagen) VALUES('$nombre','$horaT','$cuotaH','$sueldo','$imagen')";


        $verificar_nombre=mysqli_query($conexion, "SELECT * FROM empleado WHERE nombre='$nombre'");
        //Indica la cantidad de nombres iguales:
        if(mysqli_num_rows($verificar_nombre)>0){
            echo("El nombre del empleado ya está registrado");
            //Para que salga:
            exit;
        }

       
        //Ejecutar consulta:
        $resultado=mysqli_query($conexion,$insertar);
        if(!$resultado){
            echo("Error al registrarse");
        }
        else{
            echo("Usuario registrado correctamente");
        }
        mysqli_close($conexion);
    ?>
</body>
</html>