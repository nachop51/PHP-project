<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Codificacion de la página y compatibilidad -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Titulo -->
    <title>Página de error</title>

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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
  </head>
  <body>
    <!-- Título -->
    <header>
      <h1>WebMarketCam</h1>
    </header>
    <!-- Navbar (Links) -->
    <main>
      <?php

        include 'menu.php';

        // Obtener la variable del error
        $msg = $_GET["MSG"];

      ?>
      <section>
        <!-- Mostrar el error -->
        <div class="errorPage">
          <?php
            echo "<p class='errorPageP'>$msg</p>"
          ?>
        </div>
      </section>
    </main>
  </body>
</html>