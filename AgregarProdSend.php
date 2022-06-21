<?php

  // Conectarse a la base de datos y elegir la tabla
  include 'conex.php';

  // Setear la variable error como falso
  $error = false;

  // Obtener los datos del formulario anterior
  $marca       = $_POST["marca"];
  $descripcion = $_POST["descripcion"];
  $origen      = $_POST["origen"];
  $precio      = $_POST["precio"];
  $categoria   = $_POST["categoria"];

  // Crear la petición
  $sql = "SELECT * FROM Categorias WHERE idC=$categoria";

  // Guardar el resultado de la petición en una variable
  $resultado = mysqli_query($con, $sql);

  // Corroborar si la petición es válida
  if(mysqli_num_rows($resultado) == 0) {
    // En caso de no serlo, mostrar un error
    $error = true;
  }

  // Crear la petición con los datos
  if (!$error) {
    $sql2 = "INSERT INTO Productos (idP, marP, descP, orP, preP, catP) VALUES (null, '$marca', '$descripcion', '$origen', $precio, $categoria)";
    // Enviar la peticion a la base de datos
    mysqli_query($con, $sql2);
  }
  
  // Redirigir a página de error en caso de que $error = true;
  if ($error) {
    header('Location: errorPage.php?MSG=Categoría inválida');
  } 
  // Volver a la página para seguir agregando productos
  else {
    header('Location: AgregarProd.php');
  }
  
?>