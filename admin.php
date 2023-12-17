<?php

require "./pages/header.php";

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
  </head>
  <body>
    <div class="center">
      
      <form method="POST" action="./panel/loguear.php">
        <div class="txt_field">
          <input type="text" name="usuario" required>
          <span></span>
          <label>Usuario</label>
        </div>
        <div class="txt_field">
          <input type="password" name="clave" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Olvidó su contraseña?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          No es miembro? <a href="#">Registrarse</a>
        </div>
      </form>
    </div>
    <div class="espacio">

    </div>
  </body>
</html>

<?php
require "./pages/footer.php";
?>