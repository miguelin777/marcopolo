<?php
include ('conexion.php');
$empleados="SELECT * FROM empleado";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Modificar</title>
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

        <h2>MODIFICAR | ELIMINAR</h2>
        
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
                while ($row=mysqli_fetch_assoc($resultado)) { ?>
                    <tr align="center">
                        <td><?php echo $row["nombre"];?></td>
                        <td><?php echo $row["horaT"];?></td>
                        <td><?php echo $row["cuotaH"];?></td>
                        <td><?php echo $row["sueldo"];?></td>
                        <td><?php echo $row["imagen"];?></td>
                        <td>
                            <a href="actualizar.php?id=<?php echo $row["idEmpleado"]; ?>" class="table__item__link">Editar</a>
                            <a href="eliminar.php?id=<?php echo $row["idEmpleado"]; ?>" class="table_item_link_eliminar">Eliminar</a>
                        </td>
                    </tr>
                  <?php }mysqli_free_result($resultado); ?>

                </table>
                <script src="confirmacion.js"></script>
    
</body>
</html>