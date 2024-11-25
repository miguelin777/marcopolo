<?php
    include('conexion.php');
    $empleados="SELECT * FROM empleado";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Daira">
    <title>Practica 38</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <br>
        <br>
        <h1>Nomina Empleados</h1>
        <br>
        <br>
        <div class="menu">
            <div class="submenu">
                <button>Altas</button>
                <div class="submenu-content">
                    <a href="altaEmpleado.html">Empleados</a>
                </div>
            </div>
            <div class="submenu">
                <button>Consultas</button>
                <div class="submenu-content">
                    <a href="consulta.php">General</a>
                </div>
            </div>
            <div class="submenu">
                <button>Bajas | Modificar</button>
                <div class="submenu-content">
                    <a href="modificarEmpleado.php">Empleados</a>
                </div>
            </div>
        </div>

        <h2>CONSULTAS GENERALES</h2>
        
            <table>
                <tr>
                    <th>Nombre:</th>
                    <th>Horas Trabajadas:</th>
                    <th>Cuota por Hora:</th>
                    <th>Sueldo:</th>
                    <th>Archivo de Imagen</th>
                </tr>
                <?php
                    $resultado=mysqli_query($conexion,$empleados);
                    while ($row=mysqli_fetch_assoc($resultado)){?>
                    <tr>
                        <td><?php echo $row['nombre'];?></td>
                        <td><?php echo $row['horaT'];?></td>
                        <td><?php echo $row['cuotaH'];?></td>
                        <td><?php echo $row['sueldo'];?></td>
                        <td><?php echo $row['imagen'];?></td>
                    </tr> 
                <?php } ?>
            </table>
    </div>

</body>
</html>
