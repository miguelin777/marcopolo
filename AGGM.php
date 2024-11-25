<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Daira">
    <title>Agregar Marca</title>
</head>
<body>
    <?php
        //Requiero la comexión de .php
        include 'conexion.php';
        //Comenzar con la sesión:
        session_start();
        //Recibo los valores:
        $nombre=$_POST["nombre"];
        $imagen=$_POST["imagen"];

         //Consulta para insertar:
         $insertar="INSERT INTO marca(nombre,imagen) VALUES('$nombre','$imagen')";


        $verificar_nombre=mysqli_query($conexion, "SELECT * FROM marca WHERE nombre='$nombre'");
        //Indica la cantidad de nombres iguales:
        if(mysqli_num_rows($verificar_nombre)>0){
            echo("La marca ya está registrada");
            //Para que salga:
            exit;
        }

       
        //Ejecutar consulta:
        $resultado=mysqli_query($conexion,$insertar);
        if(!$resultado){
            echo("Error al registrar");
        }
        else{
            echo("Marca registrada correctamente");
        }
        mysqli_close($conexion);
    ?>
</body>
</html>