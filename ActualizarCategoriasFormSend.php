<?php
  // Conectarse a la base de datos
  include 'conex.php';

  // Obtener las variables de ActualizarForm.php
  $idCategoria  = $_POST["idC"];
  $nomCategoria = $_POST["categoria"];

  // Crear la petición que hace la modificación
  $sql = "UPDATE Categorias SET nomC='$nomCategoria' WHERE idC='$idCategoria'";

  // Enviar la petición a la base de datos
  mysqli_query($con, $sql);

  // Volver a la página para Aatualizar alguna otra categoría
  header('Location: ActualizarCategorias.php');
?>