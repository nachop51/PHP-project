<?php
  // Conectarse a la base de datos
  include 'conex.php';

  // Obtener la variable enviada en el formulario anterior
  $idForm = $_POST["idForm"];

  // Crear la petición con la variable obtenida
  $sql = "SELECT * FROM Productos WHERE idP=$idForm";

  // Enviar la petición y guardarla en una variable
  $resultado = mysqli_query($con, $sql);

  // Corroborar que sea un resultado válido
  if(mysqli_num_rows($resultado) == 0) {
      // En caso de no ser válido redirigir a la página de error
      header("Location: errorPage.php?MSG=No se ha encontrado el ID.");

  }
  // En caso de ser válida, obtener todas las variables de la base de datos
  else {
    // Guardar las variables en un array
    $registro = mysqli_fetch_array($resultado);
    // Extraer las variables del array de forma ordenada
    $idDB        = $registro["idP"];
    $marca       = $registro["marP"];
    $descripcion = $registro["descP"];
    $origen      = $registro["orP"];
    $precio      = $registro["preP"];
    $categoria   = $registro["catP"];
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Codificacion de la página y compatibilidad -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Titulo -->
    <title>Eliminar productos</title>

    <!-- Fuentes de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <!-- Javascript -->
    <script src="checker.js"></script>

    <!-- CSS y favicon-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="form.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  
  </head>
  <body>
    <!-- Título -->
    <header>
      <h1>Eliminar productos</h1>
    </header>
    <!-- Navbar (Links) -->
    <main>  
      <?php
            include 'menu.php';
      ?>
      <!-- Contenido -->
      <section id="formSection">
        <!-- Tabla que ordena el formulario -->
        <form action="EliminarFormSend.php" method="POST" id="Form" class="formulario">
          <table>
            <tr>
              <th>
                <label for="idForm">ID:</label>
              </th>
              <td>
                <!-- ID de solo lectura, que no nos interesa que el usuario modifique el ID, pero si enviarlo -->
                <input type="number" name="idForm" id="idForm" <?php echo "value='$idForm'";?> readonly/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="marca">Marca:</label>
              </th>
              <td>
                <!-- Marca de solo lectura, que no nos interesa que el usuario modifique la marca, pero si enviarla -->
                <input type="text" name="marca" id="mar" <?php echo "value='$marca'";?> readonly/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="descripcion">Descripción:</label>
              </th>
              <td>
                <!-- Descripción de solo lectura, que no nos interesa que el usuario modifique el ID, pero si enviarla -->
                <input type="text" name="descripcion" id="desc" <?php echo "value='$descripcion'";?> readonly/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="origen">Origen:</label>
              </th>
              <td>
                <!-- Origen de solo lectura, que no nos interesa que el usuario modifique el origen, pero si enviarlo -->
                  <?php
                      echo "<input type='text' name='origen' id='or' value='$origen' readonly>\n";
                  ?>
              </td>
            </tr>
            <tr>
              <th>
                <label for="precio">Precio (En USD):</label>
              </th>
              <td>
                <!-- Precio de solo lectura, que no nos interesa que el usuario modifique el precio, pero si enviarlo -->
                <input type="text" name="precio" id="pre" <?php echo "value='$precio'";?> readonly/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="categoria">Categoría:</label>
              </th>
              <td>
                <!-- Categoría de solo lectura, que no nos interesa que el usuario modifique la categoría, pero si enviarla -->
                    <?php
                      // Crear la petición para obtener las categorías
                      $sql2 = "SELECT * FROM Categorias ORDER BY nomC";
                      // Enviar la petición y guardarla en una variable
                      $result = mysqli_query($con, $sql2);
                      // Función loop que recorre las categorías
                      while($registroC = mysqli_fetch_array($result)){
                        // Obtener todas las categorias y su ID, y guardarlos en variables una a la vez
                        $idC  = $registroC["idC"];
                        $nomC = $registroC["nomC"];
                        // Con la variable del formulario anterior comparar si el ID obtenido 
                        // es igual a alguno de la base de datos, en caso de serlo marcar opción como seleccionada
                        if ($idC == $categoria) {
                          echo "<input type='text' name='categoria' id='cat' value='$nomC' readonly>\n";
                        } 
                      }
                    ?>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="tdButtons">
                <!-- Checkear el formulario y enviarlo -->
                <input id="tdButtons" type="button" value="Eliminar" onclick="checkDelId()" />
                <!-- En caso de no querer eliminar, volver a la página principal de eliminar -->
                <input id="tdButtons" type="button" value="Volver" onclick="getBack('EliminarProd.php')"/>
              </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
