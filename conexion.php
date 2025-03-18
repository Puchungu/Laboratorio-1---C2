<?php
//Nombre del servidor, usuario, contraseña y nombre de la base de datos
$conexion = new mysqli("localhost", "root", "", "empresa");
if (mysqli_connect_errno()) {
    echo "Error al conectar a la base de datos";
} else {
    echo "Conexión exitosa";
}
?>