<?php

  include 'conex.php';

  $idForm = $_POST["idForm"];

  $sql = "SELECT * FROM Productos WHERE idP=$idForm";

  $resultado = mysqli_query($con, $sql);

  if(mysqli_num_rows($resultado) == 0) {

      header("Location: errorPage.php?MSG=No se ha encontrado el ID.");

  } else {
    $registro = mysqli_fetch_array($resultado);
    $idDB = $registro["idP"];
    $marca = $registro["marP"];
    $descripcion = $registro["descP"];
    $origen = $registro["orP"];
    $precio = $registro["preP"];
    $categoria = $registro["catP"];
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
    <title>Actualizar productos</title>

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
      <h1>Actualizar productos</h1>
    </header>
    <!-- Navbar (Links) -->
    <main>  
      <?php
            include 'menu.php';
      ?>
      <!-- Contenido -->
      <section id="formSection">
        <form action="ActualizarFormSend.php" method="POST" id="Form" class="formulario">
          <table>
            <tr>
              <th>
                <label for="idForm">ID:</label>
              </th>
              <td>
                <input type="text" name="idForm" id="idForm" <?php echo "value='$idForm'";?> readonly/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="marca">Marca:</label>
              </th>
              <td>
                <input type="text" name="marca" id="mar" <?php echo "value='$marca'";?> title="Máximo 25 carácteres" maxlength="25" onkeypress="return checkInput(event)"/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="descripcion">Descripción:</label>
              </th>
              <td>
                <input type="text" name="descripcion" id="desc" <?php echo "value='$descripcion'";?> title="Máximo 100 carácteres" maxlength="100" onkeypress="return checkInput(event)"/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="origen">Origen:</label>
              </th>
              <td>
                <select name="origen" id="or" >
                  <?php

                    $ALEMANIA = "Alemania";  
                    $CHINA = "China";
                    $USA = "USA";

                    if ($origen == $ALEMANIA) {
                      echo "
                        <option value='Alemania' selected>Alemania</option>
                        <option value='China'>China</option>
                        <option value='USA'>USA</option>
                    ";
                    }

                    if ($origen == $CHINA) {
                      echo "
                        <option value='Alemania'>Alemania</option>
                        <option value='China' selected>China</option>
                        <option value='USA'>USA</option>
                    ";
                    }
                  
                    if ($origen == $USA) {
                      echo "
                        <option value='Alemania'>Alemania</option>
                        <option value='China'>China</option>
                        <option value='USA' selected>USA</option>
                    ";
                    }

                  ?>
                </select>
              </td>
            </tr>
            <tr>
              <th>
                <label for="precio">Precio (En USD):</label>
              </th>
              <td>
                <input type="text" name="precio" id="pre" <?php echo "value='$precio'";?> title="Máximo 10 números" maxlength="10" onkeypress="return checkNumber(event)"/>
              </td>
            </tr>
            <tr>
              <th>
                <label for="categoria">Categoría:</label>
              </th>
              <td>
                <select name="categoria" id="cat" > 
                    <?php
                      
                      $sql = "SELECT * FROM Categorias ORDER BY nomC";

                      $result = mysqli_query($con, $sql);

                      while($registroC = mysqli_fetch_array($result)){
                        $idC = $registroC["idC"];
                        $nomC = $registroC["nomC"];

                        if ($idC == $categoria) {
                          echo "<option value='$idC' selected>$nomC</option>\n";
                        } else {
                          echo "<option value='$idC'>$nomC</option>\n";
                        }

                      }
                    ?>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="tdButtons">
                <input id="tdButtons" type="button" value="Actualizar" onclick="checkForm()" />
                <input id="tdButtons" type="button" value="Volver" onclick="getBack('ActualizarProd.php')"/>
              </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
