<html>
    <head>
    <link rel="stylesheet" href="asset/css/style.css">
    </head>
    <body>
        <header>
            <h1>JUEGOS</h1>
          </header>
        <main>
          <caption>
              <a class="btn" href="index.php">IR A INICIO</a>
              <a class="btn" href="?controller=juegos&function=create">CREAR JUEGO</a>
              <br>
              <a class="btn" href="?controller=juegos&function=index&orden=menor">MENOR PRECIO</a>
              <a class="btn" href="?controller=juegos&function=index&orden=mayor">MAYOR PRECIO</a>
          </caption>
          <form action="" method="post">
              <label for="accion">Acción</label>
              <input type="radio" name="selector" value="Accion" id="accion">

              <label for="aventuras">Aventura</label>
              <input type="radio" name="selector" value="Aventura" id="aventuras">

              <label for="deportes">Deportes</label>
              <input type="radio" name="selector" value="Deportes" id="deportes">

              <label for="todos">Todos</label>
              <input type="radio" name="selector" value="" id="todos">

              <button class="btn" type="submit">FILTRAR</button>
          </form>
              <table>
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                    JuegosController::filtrarTipoPrecio();
                  ?>
                  </tbody>
                </table>
                <?php
                  if (isset($GLOBALS['error'])) {
                    echo '<h3>'.$error.'</h3>';
                  }
                ?>
    </body>
</html>