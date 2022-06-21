<?php
  include 'conex.php'
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Codificacion de la página y compatibilidad -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Titulo -->
    <title>Agregar categorías</title>

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
    <!-- Títutlo -->
    <header>
      <h1>Agregar categorías</h1>
    </header>
    <!-- Navbar (Links) -->
    <main>
      <?php
            include 'menu.php';
      ?>
      <!-- Contenido -->
      <section id="formSection">
        <form
          action="AgregarCategoriasFormSend.php"
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
                <!-- Deshabilitar el ID ya que no es necesario -->
                <input type="text" disabled>
              </td>
            </tr>
            <tr>
              <th>
                <label for="nombre">Categoría:</label>
              </th>
              <td>
                <!-- Input para la categoría -->
                <input type="text" name="nombre" id="nomC" title="Máximo 25 carácteres" maxlength="25" onkeypress="return checkInput(event)"/>
              </td>
            </tr>
            <tr>
              <!-- Checkear el formulario y enviarlo -->
              <td colspan="2" class="tdButtons">
                <input
                  id="tdButtons"
                  type="button"
                  value="Agregar"
                  onclick="checkCatAct()"
                />
                <!-- De no querer agregrar una categoría volver a la página principal -->
                <input id="tdButtons" type="button" value="Volver" onclick="getBack('index.php')"/>
              </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
