<?php
  // Conectarse a la base de datos
  include 'conex.php';

  // Crear la peticion a la base de datos
  $sql = "SELECT * FROM Categorias ORDER BY nomC";

  // Enviar la petición a la base de datos y guardarlo en una variable
  $result = mysqli_query($con, $sql);

  // Función loop que obtiene los datos y crea las opciones que se muestran en pantalla
  while($registro = mysqli_fetch_array($result)){

    // Guardar los datos obtenidos en variables
    // ID de la categoría que se envía
    $idC = $registro["idC"];
    // Nombre de la categoría que se muestra
    $nomC = $registro["nomC"];
    // Crear la opcion con las variables anteriores
    echo "<option value='$idC'>$nomC</option>\n";
  }
?>