<?php
// Conectar a la base de datos
  $con = mysqli_connect("localhost", "nacho", "nacho");
  
  // Seleccionar base de datos
  $db = mysqli_select_db($con, "WebMarketCam");

  // Corroborar si se pudo conectar a la base
  if(!$con) {
    // En caso de que no se haya podido conectar, redirigir a la página de error
    header('Location: errorPage.php?MSG=No se ha podido establecer conexión con la base de datos');
  }
  // Corroborar si se pudo elegir correctamente la base de datos 
  elseif(!$db) {
    // En caso de que no se haya podido elegir bien la base, redirigir a la página de error
   header('Location: errorPage.php?MSG=No se ha podido elegir correctamente la base de datos');
  }
?>