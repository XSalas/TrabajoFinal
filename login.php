<?php
session_start();
$_SESSION["current_page"] = 1;

if (
  isset($_SESSION["respuesta1"]) && $_SESSION["respuesta1"] == "admin" &&
  isset($_SESSION["respuesta2"]) && $_SESSION["respuesta2"] == "1234"
) {
  header("Location: validao.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Página de inicio de sesión</title>
  <link rel="stylesheet" type="text/css" href="ASTIL.css">
</head>
<body>
  <h1>Iniciar sesión</h1>
  <form method="post" action="procesar.php">
    <label for="respuesta1">Usuari:</label>
    <input type="text" id="respuesta1" name="respuesta1">

    <label for="respuesta2">contrasenya:</label>
    <input type="password" id="respuesta2" name="respuesta2">

    <input type="submit" value="Iniciar">
  </form>
</body>
</html>









