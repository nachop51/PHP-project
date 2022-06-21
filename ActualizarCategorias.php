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
    <!-- Contenido -->
    <main>
    <!-- Navbar (links) -->
      <?php
        include 'menu.php';
      ?>
      <!-- Contenedor del formulario -->
      <section id="formSection">
        <!-- Formulario -->
        <form
          action="ActualizarCategoriasForm.php"
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
                <label for="categoria">Categoría:</label>
              </th>
              <td>
                <!-- Opciones de las categorías -->
                <select name="categoria" id="nomC">
                  <option value="0">-Seleccione una categoría-</option>
                  <?php
                  // Cargar las categorías
                    include 'Categorias.php';
                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="tdButtons">
                <!-- Checkear el formulario y enviarlo -->
                <input
                  id="tdButtons"
                  type="button"
                  value="Enviar"
                  onclick="checkCatAct()"
                />
                <!-- En caso de no querer actualizar, volver a la página principal -->
                <input id="tdButtons" type="button" value="Volver" onclick="getBack('index.php')"/>
              </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
