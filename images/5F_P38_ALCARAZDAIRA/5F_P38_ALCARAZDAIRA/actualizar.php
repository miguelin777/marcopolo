<?php
    include('conexion.php');
    $id=$_GET["id"];
    $empleados="SELECT * FROM empleado WHERE idEmpleado='$id'";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Daira">
    <title>Practica 38</title>
    <link rel="stylesheet" href="style.css">
    <script languaje="javascript" type="text/javascript">
        function calcularSueldo(form1)
        {
            var hTra=form1.horaT.value;
            var cuoH=form1.cuotaH.value;
            form1.sueldo.value=hTra*cuoH;
            return true;
        }
    </script>
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

        <h2>ACTUALIZAR DATOS</h2>
        
        <form id="form1" method="post" action="procesarActualizar.php">
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
                        <input type="hidden" value="<?php echo $row['idEmpleado'];?>" name="id">
                        <td><input type="text" value="<?php echo $row['nombre'];?>" name="nombre"></td>
                        <td><input type="text" value="<?php echo $row['horaT'];?>" name="horaT"></td>
                        <td><input type="text" value="<?php echo $row['cuotaH'];?>" name="cuotaH"></td>
                        <td><input type="text" value="<?php echo $row['sueldo'];?>" name="sueldo"></td>
                        <td><input type="text" value="<?php echo $row['imagen'];?>" name="imagen"></td>
                    </tr> 
                <?php } mysqli_free_result($resultado);?>
                <tr>
                    <td colspan="6">
                        <div class="form-buttons">
                            <button type="submit">Actualizar</button>
                            <button type="button" onclick="calcularSueldo(this.form)">Calcular</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
