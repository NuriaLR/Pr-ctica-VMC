<html>
<head>
  <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
  <header>
    <h1>COMPRAS</h1>
  </header>
  <main>
    <a class="btn" href="index.php">IR A INICIO</a>
    <a class="btn" href="?controller=compras&function=create">CREAR COMPRA</a>
    <table>    
      <thead>
        <tr>
          <th>Id</th>
          <th>DNI</th>
          <th>Nombre Cliente</th>
          <th>Juego Id</th>
          <th>Nombre Juego</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Total</th>
          <th>Fecha</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
       ComprasController::mostarCompra();
        ?>
      </tbody>
    </table>
    <?php
    if (isset($GLOBALS['error'])) {
      echo '<h3>' . $error . '</h3>';
    }
    ?>
  </body>
</html>