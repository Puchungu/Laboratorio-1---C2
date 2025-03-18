<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion Base de datos</title>
</head>
<body>
    <h1>Lista de Empleados</h1>
    <a href='registrar.php'><button>Registrar</button></a>


    <?php 
        $resultado = $conexion -> query("SELECT * FROM tblempleados");

    echo ('
        <table> 
            <thead> 
                <tr>
                    <th>Nombre</th>
                    <th>Carnet</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>');
            while ($row = $resultado -> fetch_assoc()) {
                echo ("
                    <tr>
                        <td>{$row['nombre']}</td>
                        <td>{$row['carnet']}</td>
                        <td>{$row['fechanac']}</td>
                        <td><a href='eliminar.php?id={$row['id']}' onclick='return confirm(\"¿Eliminar registro?\")'><button>Eliminar</button></a></td>
                        <td><a href='editar.php?id={$row['id']}'><button>Editar</button></a></td>
                    </tr>  
                ");
            }
        echo (
            "</tbody>
        </table>"
        );
    ?>
</body>
</html>