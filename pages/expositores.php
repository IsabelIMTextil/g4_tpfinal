<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Oradores_textiles";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}




$sql = "SELECT * FROM oradores";
$result = $conn->query($sql);



$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><link rel="stylesheet" href="../css/styles.css">
    <title>Expositores</title>
</head>
<body>

<header>
           
  <nav class="navbar navbar-expand-md navbar-light bg-light navbar-fixed-top">

    <div class="container-fluid">
      
      <a href="../index.php"><img src="../imagenes/logo.png" alt="Logo" width="150" height="70" class="d-inline-block align-text-top"></a>
      

      <a class="navbar-brand m-1" href="#"><strong>Charlas y talleres</strong></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 bg-light text-center">
          <li class="nav-item">
            <a class="nav-link" href="#nuevo">Lugar y fecha</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#charlas">Charlas y vídeos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#talleres">Talleres: reservá tu lugar</a>
          </li>
          
          <li class="nav-4">
            <a class="nav-link active" aria-current="page" href="#presentacion">Dar una charla</a>
          </li>
          <!-- <li> <a  class="nav-link active" href="tickets.php"  target="_parent">Tickets</a></li> -->
               
        </ul>
       
      </div>
    </div>
</nav> 

</header>
<!--  termina  nav  -->

<br><br>
<div>
<h1 class="text-center">Lista de Expositores</h1>
</div>
<?php 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       
        ?>        

    
    <div class="row">
        <div class="col-12">
<table class="table table-border table-hover text-center">
  <thead class="bg-warning">
    <tr class="bg-warning-subtle">
    <th class="col-1">#</th>
          <th class="col-2">Nombre</th>
          <th class="col-2">Apellido</th>
          <th class="col-3">Tema</th>
          <th class="col-2"></th>
    </tr>
  </thead>
  </table>
  </div>
    </div>

    <div>
            <table class="table table-border table-hover text-center">
    <tbody>
        <tr>
          <th class="col-1"><?= $row['id_orador'] ?></th>
          <td class="col-2"><?= $row['nombre'] ?></td>
          <td class="col-2"><?= $row['apellido'] ?></td>
          <td class="col-3"><?= $row['tema'] ?></td>
          <td class="col-2">
          <div class="col">
        </div>
          </td> 
        </tr>
      </tbody>
    </table>

</div>
</div>
<?php 
}
}
?>   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
   <!-- <footer "">
   <?php
 require "footer.php"
 ?>


</body>
</html>