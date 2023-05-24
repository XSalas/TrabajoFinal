<?php
session_start();

if ($_SESSION["current_page"] == 1) {
  // Pregunta 1
  $respuesta1 = $_POST["respuesta1"];

  // Pregunta 2
  $respuesta2 = $_POST["respuesta2"];

  if ($respuesta1 == "admin" && $respuesta2 == "1234") {
    $_SESSION["respuesta1"] = $respuesta1;
    $_SESSION["respuesta2"] = $respuesta2;
    header("Location: validao.php");
    exit();
  } else {
    // respostes incorrectes
    $_SESSION["error"] = "Las respuestas son incorrectas";
    header("Location: login.php");
    exit();
  }
}
?>

