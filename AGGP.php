<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Daira">
    <title>Agregar Producto</title>
</head>
<body>
    <?php
        //Requiero la comexión de .php
        include 'conexion.php';
        //Comenzar con la sesión:
        session_start();
        //Recibo los valores:
        $idMarca=$_POST["idMarca"];
        $idCategoria=$_POST["idCategoria"];
        $nombre=$_POST["nombre"];
        $descr=$_POST["descr"];
        $precio=$_POST["precio"];
        $imagen=$_POST["imagen"];

         //Consulta para insertar:
         $insertar="INSERT INTO producto(idMarca,idCategoria,nombre,descr,precio,imagen) VALUES('$idMarca','$idCategoria','$nombre','$descr','$precio','$imagen')";


        $verificar_nombre=mysqli_query($conexion, "SELECT * FROM producto WHERE nombre='$nombre'");
        //Indica la cantidad de nombres iguales:
        if(mysqli_num_rows($verificar_nombre)>0){
            echo("El producto ya está registrado");
            //Para que salga:
            exit;
        }

       
        //Ejecutar consulta:
        $resultado=mysqli_query($conexion,$insertar);
        if(!$resultado){
            echo("Error al registrar");
        }
        else{
            echo("Producto registrado correctamente");
        }
        mysqli_close($conexion);
    ?>
</body>
</html>