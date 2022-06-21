<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Codificacion de la página y compatibilidad -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Titulo -->
    <title>Visualizar productos</title>

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

    <!-- CSS y favicon-->
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="form.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Javascript -->
    <script src="checker.js"></script>
  </head>
  <body>
    <!-- Título -->
    <header>
      <h1>Visualizar productos</h1>
    </header>
    <!-- Navbar (Links) -->
    <main>
      <?php
        include 'menu.php';
      ?>
      <!-- Contenido -->
      <section id="formSection">
        <div>
          <!-- Formulario -->
          <form action="VisualizarProdT.php" method="post" id="form" class="formulario">
            <table>
              <tr>
                <th>
                  <label for="origen">Origen:</label>
                </th>
                <td>
                  <!-- Opcion de filtro de origen -->
                  <select name="origen" id="or">
                    <option value="0">-Todos los orígenes-</option>
                    <option value="USA">USA</option>
                    <option value="China">China</option>
                    <option value="Alemania">Alemania</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>
                  <label for="categoria">Categoría:</label>
                </th>
                <td>
                  <!-- Opcion de filtro de categorías -->
                  <select name="categorias" id="cat">
                    <option value="0">-Todas las categorias-</option>
                    <!-- Cargar las categorías -->
                    <?php
                        include 'Categorias.php';
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td colspan="2" class="tdButtons">
                  <!-- Enviar el formulario -->
                  <input id="tdButtons" type="submit" value="Filtrar"> 
                  <!-- En caso de no querer ver la tabla, volver a la página principal -->
                  <input id="tdButtons" type="button" value="Volver" onclick="getBack('index.php');">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </section>
    </main>
  </body>
</html>