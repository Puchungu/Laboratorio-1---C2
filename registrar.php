<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar un nuevo usuario</title>
</head>
<body>
    <form action="registrar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label>Carnet:</label>
        <input type="text" name="carnet">
        <br>
        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha">
        <br>
        <button type="submit">Registrar usuario</button>
        <a href="index.php"><button>Cancelar</button></a>

        <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombre = $_POST['nombre'];
                $carnet = $_POST['carnet'];
                $fecha_nacimiento = $_POST['fecha'];

                $insercion = $conexion ->prepare("INSERT INTO tblempleados(nombre, carnet, fechanac) VALUES (?, ?, ?)");
                $insercion->bind_param("sss", $nombre, $carnet, $fecha_nacimiento);
                $insercion->execute();
                header('Location: index.php');
            }
        ?>
</body>
</html>