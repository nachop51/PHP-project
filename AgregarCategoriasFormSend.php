<?php

  // Conectarse a la base de datos
  include 'conex.php';

  // Obtener el valor de la categoría por el formulario anterior
  $nomCategoria = $_POST["nombre"];
  
  // Crear la petición con la variable
  $sql = "INSERT INTO Categorias (idC, nomC)
          VALUES (null, '$nomCategoria')";

  // Enviar la petición
  mysqli_query($con, $sql);

  // Redirigir a la página 
  header('Location: AgregarCategorias.php');
?>