<?php

  // Conectarse a la base de datos
  include 'conex.php';

  // Obtener variable enviada de la página anterior (El ID de la categoría)
  $idCategoria = $_POST["categoria"];

  // Crear la petición a la base de datos con la variable obtenida
  $sql = "SELECT * FROM Categorias WHERE idC=$idCategoria";

  // Enviar la petición y guardar el resultado en una variable
  $result = mysqli_query($con, $sql);

  // Meter el resultado en un array
  $registroC = mysqli_fetch_array($result);

  // Guardar el nombre de la categoría que nos interesa
  $nomC = $registroC["nomC"];

?>

<!-- Crear la página -->

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Codificacion de la página y compatibilidad -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Titulo -->
    <title>Actualizar categorías</title>

    <!-- Fuentes de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap"
      rel="stylesheet"
    />

    <!-- Javascript -->
    <script src="checker.js"></script>

    <!-- CSS y favicon-->
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="form.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <!-- Título -->
    <header>
      <h1>Actualizar categorías</h1>
    </header>
    <!-- Navbar (links) -->
    <main>
      <?php
        include 'menu.php';
      ?>
      <!-- Contenido -->
      <section id="formSection">
      <!-- Formulario -->
        <form
          action="ActualizarCategoriasFormSend.php"
          method="POST"
          id="Form"
          class="formulario"
        >
        <!-- Tabla que ordena el formulario -->
          <table>
            <tr>
              <th>
                <label for="idC">ID:</label>
              </th>
              <td>
                <!-- Crear input con el valor del ID de la categoría seleccionada -->
                <input type='text' name='idC' id='idC' <?php echo "value='$idCategoria'";?> readonly/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="categoria">Categoría:</label>
              </th>
              <td>
                <!-- Crear input con el valor del nombre de la categoría seleccionada -->
                <input type='text' name='categoria' id='nomC' <?php echo "value='$nomC'";?> title="Máximo 25 carácteres" maxlength="25" onkeypress="return checkInput(event)"/>
              </td>
            </tr>
            <tr>
              <!-- Checkear el formulario y enviarlo -->
              <td colspan="2" class="tdButtons">
                <input
                  id="tdButtons"
                  type="button"
                  value="Actualizar"
                  onclick="checkCatAct()"
                />
                <!-- En caso de no querer actualizar, volver a la página anterior -->
                <input id="tdButtons" type="button" value="Volver" onclick="getBack('ActualizarCategorias.php')"/>
              </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
