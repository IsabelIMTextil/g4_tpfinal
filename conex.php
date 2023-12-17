<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Oradores_textiles";*/


$servername = "localhost";
$username = "id21667679_isabel";
$password = "Isa1234.";
$dbname = "id21667679_oradores_textiles";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}




$sql = "SELECT * FROM oradores";
$result = $conn->query($sql);

/* if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>";
        echo "Campo1: " . $row["id_orador"]. " - Campo2: " . $row["nombre"]. " - Campo2: " . $row["apellido"]. " - Campo2: " . $row["mail"]. " - Campo2: " . $row["telefono"]. " - Campo2: " . $row["tema"]. "<br>";
    }
} else {
    echo "0 resultados";
} */

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center">Oradores</h1> 
<div class="container">
        <div class="row">
            <div clas="col-lg-12">
<table class="table  table-border table-hover">
<thead>
<tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Mail</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Tema</th>
  
    </tr>
</thead>

<?php 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       
        ?> 
       
       <div class="container">
        <div class="row">
            <div clas="col-lg-12">
    <table class="table  table-border table-hover text-left">
  <tbody>
 
    <tr>
      <th class="col-2"><?= $row['id_orador'] ?></th>
      <td class="col-2"><?= $row['nombre'] ?></td>
      <td class="col-2"><?= $row['apellido'] ?></td>
      <td class="col-2"><?= $row['mail'] ?></td>
      <td class="col-2"><?= $row['telefono'] ?></td>
      <td class="col-2"><?= $row['tema'] ?></td>
      <!-- <td><button >editar</button></td>
      <td><button>actualizar</button></td> -->
      
    </tr>
   
  </tbody>
</table>
</table>
</div>
        </div>
       </div> 
            </div>
        </div>
       </div> 

<?php 
}
}
?>   
</body>
</html>