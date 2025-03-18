<?php include 'conexion.php'; 
$id = $_GET['id'];
$resultado = $conexion -> query("SELECT * FROM tbldatos WHERE id=$id");
$empleado = $resultado -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar un nuevo usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            margin-bottom:190px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="date"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        a button {
            background-color: #dc3545;
        }
        a button:hover {
            background-color: #c82333;
        }
    </style>

</head>
<body>
    <?php include 'header.php'; ?>
    <form action="" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $empleado['nombre'] ?>">
        <br>
        <label>Carnet:</label>
        <input type="text" name="carnet" value="<?php echo $empleado['carnet'] ?>">
        <br>
        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha" value="<?php echo $empleado['fechanac'] ?>">
        <br>
        <button type="submit">Actualizar registro</button>
        <a href="index.php"><button>Cancelar</button></a>
    </form>

    <?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombre = $_POST['nombre'];
                $carnet = $_POST['carnet'];
                $fecha_nacimiento = $_POST['fecha'];
                $insercion = $conexion ->prepare("UPDATE tbldatos SET nombre=?, carnet=?, fechanac=? WHERE id=$id");
                $insercion->bind_param("sss", $nombre, $carnet, $fecha_nacimiento);
                $insercion->execute();
                header('Location: index.php');
            }
        ?>
        <?php include 'footer.php'; ?>
</body>
</html>