<?php

echo "<h2> Eliminiar!!!! </h2>";

require "./panel/conexion.php";

$id = $_GET['id'];


//eliminar algun registro de mi tabla de la BD

$queryEliminar = "DELETE FROM oradores WHERE id_orador = '$id'";

$deleteRegistro = mysqli_query($conexion,$queryEliminar);

if($deleteRegistro){
header("location: ./adminpanel.php");
}


?>