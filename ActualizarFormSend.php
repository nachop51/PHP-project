<?php
  // Conectarse a la base de datos
  include 'conex.php';

  // Guardar las variables que vienen de formulario anterior
  $idForm       = $_POST["idForm"];
  $marca        = $_POST["marca"];
  $descripcion  = $_POST["descripcion"];
  $origen       = $_POST["origen"];
  $precio       = $_POST["precio"];
  $categoria    = $_POST["categoria"];

  // Crear la petición usando las variables
  $sql = "UPDATE Productos 
          SET marP='$marca', descP='$descripcion', orP='$origen', preP=$precio, catP=$categoria
          WHERE idP=$idForm
  ";

  // Enviar la petición
  mysqli_query($con, $sql);

  // Redirigir a la página de actualizar
  header('Location: ActualizarProd.php');
?>