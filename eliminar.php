<?php include 'conexion.php'; 
$id = $_GET['id'];
$conexion -> query("DELETE FROM tblempleados WHERE id=$id");
header('Location: index.php');

?>

