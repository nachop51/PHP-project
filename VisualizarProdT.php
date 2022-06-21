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
    <link rel="stylesheet" href="visualizar.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
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
      <section id="visualizar">
        <?php
        
        // Conectarse a la base de datos y elegir la base de datos
        include 'conex.php';
        
        // Guardar los filtros y corroborar si vienen por get o por post
        if (isset($_POST["origen"])) {
          $filtroOrigen = $_POST["origen"];
        } else {
          $filtroOrigen = $_GET["FILTRO"];
        }
        if (isset($_POST["categorias"])) {
          $filtroCategorias = $_POST["categorias"];
        } else {
          $filtroCategorias = $_GET["FILTRO2"];
        }

        // Corroborar si los resultados son 0
        if ($filtroOrigen == "0") {
          $filtro = " ";
        } else {
          $filtro = " AND orP='$filtroOrigen'";
        }
        if ($filtroCategorias == 0) {
          $filtro2 = " ";
        } else {
          $filtro2 = " AND catP=$filtroCategorias";
        }
        
        // Comprobar si existe la variable ORD y si no, poner un valor predeterminado
        if (isset($_GET["ORD"])) {
          $orden = $_GET["ORD"];
        } else {
          $orden = "idP";
        }

        // Si existe guardamos el orden anterior, para ver como viene ordenada la tabla
        if (isset($_GET["ordenanterior"])) {
          $ordenanterior = $_GET["ordenanterior"];
        }
        // Si no existe, lo seteamos vacío
        else {
          $ordenanterior = "";
        }

        // Si no existe la variable $get_["sort"] en el link, a $sort lo ponemos ASC
        if(!isset($_GET['sort'])){
          $sort = "ASC";
        }
        // En caso de que exista, $sort = $get_["sort"]
        else {
          $sort = $_GET['sort'];
        }

        // Entonces, si el orden es distinto del orden anterior, $sort = ASC
        if($orden != $ordenanterior) {
          $sort = "ASC";
        }


        // Crear la petición
        $sql = "SELECT p.idP,p.marP,p.descP,p.orP,p.preP,c.nomC
                FROM Productos AS p 
                INNER JOIN Categorias AS c
                ON p.catP=c.idC
                WHERE 1 $filtro $filtro2
                ORDER BY $orden $sort
                ";

        // Enviar la petición y guardar el resultado en una variable
        $result = mysqli_query($con, $sql);

        // Corroborar que la petición devuelva algo
        if(mysqli_num_rows($result) == 0) {
          // En caso de que no devuelva nada, redirigir a la página de error
          header("Location: errorPage.php?MSG=No se han encontrado registros con esos filtros.");
        }

        // Si $sort viene ASC lo seteamos DESC
        if($sort == "ASC") {
          $sort = "DESC";
        }
        // En caso de que venga DESC lo seteamos ASC
        else {
          $sort = "ASC";
        }



        // Crear la cabecera de la tabla, con sus respectivas posibles peticiones
        echo "
          <table>
            <tr>
              <th class='idTH'  ><a href='VisualizarProdT.php?ORD=idP&FILTRO=$filtroOrigen&FILTRO2=$filtroCategorias&sort=$sort&ordenanterior=$orden'>ID</a></th>
              <th class='marTH' ><a href='VisualizarProdT.php?ORD=marP&FILTRO=$filtroOrigen&FILTRO2=$filtroCategorias&sort=$sort&ordenanterior=$orden'>Marca</a></th>
              <th class='descTH'><a href='VisualizarProdT.php?ORD=descP&FILTRO=$filtroOrigen&FILTRO2=$filtroCategorias&sort=$sort&ordenanterior=$orden'>Descripción</a></th>
              <th class='orTH'  ><a href='VisualizarProdT.php?ORD=orP&FILTRO=$filtroOrigen&FILTRO2=$filtroCategorias&sort=$sort&ordenanterior=$orden'>Origen</a></th>
              <th class='preTH' ><a href='VisualizarProdT.php?ORD=preP&FILTRO=$filtroOrigen&FILTRO2=$filtroCategorias&sort=$sort&ordenanterior=$orden'>Precio(USD)</a></th>
              <th class='catTH' ><a href='VisualizarProdT.php?ORD=nomC&FILTRO=$filtroOrigen&FILTRO2=$filtroCategorias&sort=$sort&ordenanterior=$orden'>Categoría</a></th>
            </tr>
        ";

        // Variable para definir los colores de la lista
        $fila = "1";

        // While que genera la tabla, trayendo los resultados de la petición
        while ($registro = mysqli_fetch_array($result)) {

          //Simplificar variables
          $id          = $registro["idP"];
          $marca       = $registro["marP"];
          $descripcion = $registro["descP"];
          $origen      = $registro["orP"];
          $precio      = $registro["preP"];
          $categoria   = $registro["nomC"];
            
          // Corroborar si es par o impar la fila siguiente para poder definir su color
          if ($fila % 2 == 0) {
            echo "
            <tr class='par'>
              <td class='idP'>$id</td>
              <td>$marca</td>
              <td>$descripcion</td>
              <td>$origen</td>
              <td>$precio</td>
              <td>$categoria</td>
            </tr>
          ";
          } else {
            echo "
            <tr class='impar'>
              <td class='idP'>$id</td>
              <td>$marca</td>
              <td>$descripcion</td>
              <td>$origen</td>
              <td>$precio</td>
              <td>$categoria</td>
            </tr>
          ";
          }
          // Aumentar el valor de la variable
          $fila ++;
        }

        ?>
      </section>
    </main>
  </body>
</html>