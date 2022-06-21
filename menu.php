<?php
  // Devolver el menú armado
  echo '<nav>
        <table class="tableN">
          <tr>
            <th class="thN" rowspan="2">
              <a class="navLinks thT" href="index.php">Inicio</a>
            </th>
            <th class="thN"><span class="thT">Productos</span></th>
            <td class="tdN">
              <a class="navLinks" href="AgregarProd.php">Agregar</a>
            </td>
            <td class="tdN">
              <a class="navLinks" href="ActualizarProd.php">Actualizar</a>
            </td>
            <td class="tdN">
              <a class="navLinks" href="EliminarProd.php">Eliminar</a>
            </td>
            <td class="tdN">
              <a class="navLinks" href="VisualizarProdF.php">Visualizar</a>
            </td>
          </tr>
          <tr>
            <th class="thN"><span class="thT">Categorías</span></th>
            <td class="tdN" colspan="2">
              <a class="navLinks" href="AgregarCategorias.php">Agregar</a>
            </td>
            <td class="tdN" colspan="2">
              <a class="navLinks" href="ActualizarCategorias.php">Actualizar</a>
            </td>
            
          </tr>
        </table>
      </nav>';
?>