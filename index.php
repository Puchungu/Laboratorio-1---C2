<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion Base de datos</title>
    <style> 
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        a button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
            text-align: center;
        }
        a button:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow-y: auto;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tbody {
            display: block;
            max-height: 400px;
            overflow-y: auto;
        }
        thead, tbody tr {
            display: table;
            width: 100%;
            table-layout: fixed;
        }
    </style>

    </style>
        
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Lista de estudiantes registrados</h1>
    <a href='registrar.php'><button>Registrar</button></a>


    <?php 
        $resultado = $conexion -> query("SELECT * FROM tbldatos");

    echo ('
        <table border="1"> 
            <thead> 
                <tr>
                    <th>id</th>
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
                        <td>{$row['id']}</td>
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
    <?php include 'footer.php'; ?>
</body>
</html>