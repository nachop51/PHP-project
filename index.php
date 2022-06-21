<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Codificacion de la página y compatibilidad -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Titulo -->
    <title>WebMarketCam</title>

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
      ?>
      <!-- Contenido -->
      <section>
        <div class="descDiv">
          <p>
            <strong>WebMarketCam</strong> es una empresa que importa y
            distribuye equipo fotográfico, desde cámaras, trípodes, flashes,
            filtros, y todo tipo de accesorios, destinados a todo público, desde
            principiantes hasta profesionales y de mucha demanda.
          </p>
          <div class="imgDiv">
            <img src="portada.jpg" alt="Imagen de portada de cámaras" title="Cámara y sus accesorios">
          </div>
          <p>
            Principalmente ofreciendo productos provenientes de <strong>USA, Alemania y
            China.</strong>
          </p>
          <p>
            Marcas de alto prestigio, como Nikon, Kodak, y Leica, entre otras
          </p>
        </div>
      </section>
    </main>
  </body>
</html>
