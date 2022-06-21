<?php
  include 'conex.php';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Codificacion de la página y compatibilidad -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Titulo -->
    <title>Agregar productos</title>

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
      <h1>Agregar productos</h1>
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
          action="AgregarProdSend.php"
          method="POST"
          id="Form"
          class="formulario"
        >
        <!-- Tabla que ordena el formulario -->
          <table>
            <tr>
              <th>
                <label for="idForm">ID:</label>
              </th>
              <td>
                <!-- Deshabilitar el ID ya que no es necesario -->
                <input type="text" name="idForm" id="idForm" disabled/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="marca">Marca:</label>
              </th>
              <td>
                <!-- Input para la marca -->
                <input type="text" name="marca" id="mar" title="Máximo 25 carácteres" maxlength="25" onkeypress="return checkInput(event)"/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="descripcion">Descripción:</label>
              </th>
              <td>
                <!-- Input para la descripción -->
                <input type="text" name="descripcion" id="desc" title="Máximo 100 carácteres" maxlength="100" onkeypress="return checkInput(event)"/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="origen">Origen:</label>
              </th>
              <td>
                <!-- Opciones para el origen -->
                <select name="origen" id="or">
                  <option value="">-Seleccione origen-</option>
                  <option value="USA">USA</option>
                  <option value="China">China</option>
                  <option value="Alemania">Alemania</option>
                </select>
              </td>
            </tr>
            <tr>
              <th>
                <label for="precio" >Precio (En USD):</label>
              </th>
              <td>
                <!-- Input para el precio -->
                <input type="text" name="precio" id="pre" title="Máximo 10 números" maxlength="10" onkeypress="return checkNumber(event)"/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="categoria">Categoría:</label>
              </th>
              <td>
                <!-- Opciones para las categorías -->
                <select name="categoria" id="cat">
                  <option value="0">-Seleccione categoria-</option>
                  <?php
                      include 'Categorias.php';
                    ?>
                </select>
              </td>
            </tr>
            <tr>
              <!-- Checkear el formulario y enviarlo -->
              <td colspan="2" class="tdButtons">
                <input
                  id="tdButtons"
                  type="button"
                  value="Agregar"
                  onclick="checkForm()"
                />
                <!-- Borrar todos los datos -->
                <input id="tdButtons" type="reset" value="Cancelar" />
              </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
