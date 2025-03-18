<?php include 'conexion.php'; 
$id = $_GET['id'];
$resultado = $conexion -> query("SELECT * FROM tblempleados WHERE id=$id");
$empleado = $resultado -> fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar un nuevo usuario</title>
</head>
<body>
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
                $insercion = $conexion ->prepare("UPDATE tblempleados SET nombre=?, carnet=?, fechanac=? WHERE id=$id");
                $insercion->bind_param("sss", $nombre, $carnet, $fecha_nacimiento);
                $insercion->execute();
                header('Location: index.php');
            }
        ?>
</body>
</html>