<?php
echo "probando la base de datos";
// /*
// echo $_POST["nombre"];
// echo $_GET["apellido"];
// echo $_GET["correo"];
// echo $_GET["telefono"];
// echo $_GET["comentario"];**/

// requiere("phpintegrador1/utiles/conexion.php");

// echo "<br>". "imprimo  imprimirConfig() " . imprimirConfig();
// echo  "<br>"."imprimo  imprimirConexion() " .imprimirConexion();


// require "utiles/conexion.php";
require_once 'pages/conexion.php';

// $archivo = "pages/conexion.php";
// if (file_exists($archivo) && is_readable($archivo)) {
//     include $archivo;
//     // El include fue exitoso, ahora puedes utilizar las funciones y variables definidas en el archivo incluido.
//     echo "<br> Include exitoso";
// } else {
//     // El archivo no existe o no es legible
//     echo "<br>   Error al incluir el archivo";
// }

$nombre= $_POST["nombre"]; 
$apellido=$_POST["apellido"]; ; 
$mail= $_POST["correo"]; ;
$telefono=$_POST["telefono"]; ; 
$tema=$_POST["comentario"]; ;

  $conexion = new conections();
 $conexionMysql = $conexion->conect();
 $consulta= null ; 

 if ($conexionMysql){
     echo "<br>" ." ok coneccion ";
     //id_orador , nombre	, apellido	, mail	, tema, fecha_alta
     $consulta = $conexionMysql->prepare("INSERT INTO oradores ( nombre	, apellido	, mail	, telefono, tema) VALUES (?, ?,?,?,?)");
 
 }else{
     echo "<br>" ."NO ok coneccion  ";
 }

 
  $consulta->bind_param("sssss",  $nombre, $apellido, $mail,$telefono, $tema);
  $resultado = $consulta->execute();

  // Verificar el resultado de la inserción
  if ($resultado) {
      echo "<p>Registro insertado correctamente.</p>";
  } else {
      echo "<p>Error al insertar el registro: " . $consulta->error . "</p>";
  }

  $conexionMysql->close();



 // Redirección a otra página
 header("Location:index.php");
 //exit(); // Asegúrate de detener la ejecución del script después de la redirección

//  echo "<a href=\"\/phpintegrador1\/index.php\"'>Ir a Ejemplo</a>";
 echo "<a href='index.php'> Ir a inicio de index</a>";

 exit(); // Asegúrate de detener la ejecución del script después de la redirección
?>

