<?php
  // Conectarse a la base de datos
  include 'conex.php';

  // Obtener el ID enviado por el formulario anterior
  $idForm = $_POST["idForm"];

  // Crear la petición con la variable
  $sql = "DELETE FROM Productos WHERE idP=$idForm";

  // Enviar la petición
  mysqli_query($con, $sql);

  // Redirigir a la página de eliminar
  header('Location: EliminarProd.php');
?>