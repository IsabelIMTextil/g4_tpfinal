<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Oradores_textiles";

/*$servername = "localhost";
$username = "id21667679_isabel";
$password = "Isa1234.";
$dbname = "id21667679_oradores_textiles";*/



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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- -------Favicon------- -->
    <link rel="icon" type="image/png"  href="../imagenes/logo.png">
    <title>Oradores</title>
</head>
<body>

<header>
           
 <nav class="navbar navbar-expand-lg navbar-light p-1 text-center">
  <a class="p-1" href="../index.php"><img src="../imagenes/logo.png" alt="" style="width:50px; height: 50px;"></a>
  <a class="navbar-brand"><strong>Charlas y talleres</strong></a>
  <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon  text-white"></span>
  </button>
  <div class="collapse navbar-collapse bg-white" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../#arq">Lugar y Fecha</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../#charlas">Charlas y Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../#talleres">Talleres Reserva</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../#talleres">Dar una Charla</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin.php">Login</a>
      </li>
    </ul>
  </div>
</nav>

</header>
<!--  termina  nav  -->

<br><br>
<div>
<h1 class="text-center">Lista de Expositores</h1>
</div>

<div class="row">
        <div class="col-12">
<table class="table table-border table-hover text-center">
  <thead class="bg-warning">
    <tr class="bg-warning-subtle">
      <th >#</th>
      <th >Nombre</th>
      <th >Apellido</th>
      <th >Tema</th>
    </tr>
  </thead>
</div>
</div>

<?php 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       
        ?>        
        
    <!-- <div class="row">
        <div class="col-12">
<table class="table table-border table-hover text-center">
  <thead class="bg-warning">
    <tr class="bg-warning-subtle">
      <th >#</th>
      <th >Nombre</th>
      <th >Apellido</th>
      <th >Tema</th>
    </tr>
  </thead> -->

  <div>
            <table class="table table-border table-hover text-center">
  <tbody>
    <tr>
      <th class="col-1"><?= $row['id_orador'] ?></th>
      <td class="col-2"><?= $row['nombre'] ?></td>
      <td class="col-2"><?= $row['apellido'] ?></td>
      <td class="col-4"><?= $row['tema'] ?></td>
    </tr>
   
  </tbody>
</table>

    </div>

<?php 
}
}
?>   

    

    
    
    
 <?php
 require "footer.php"
 ?>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</body>
</html>