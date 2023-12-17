<?php


require "./panel/conexion.php";



$id = $_GET['id'];


//eliminar algun registro de mi tabla de la BD

$queryEliminar = "DELETE FROM oradores WHERE id_orador = '$id'";

$deleteRegistro = mysqli_query($conexion,$queryEliminar);

header("location: adminpanel.php");


echo "<h2> Se ha eliminado el registro!!!! </h2>";

?>


