<html>

<head>
  <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
  <header>
    <h1>CLIENTES</h1>
  </header>
  <main>
    <a class="btn" href="index.php">IR A INICIO</a>
    <a class="btn" href="?controller=clientes&function=create">CREAR CLIENTE</a>
    <table>
      <caption>  
        <a class="btn" href="?controller=clientes&function=index&orden=asc">ASC</a>
        <a class="btn" href="?controller=clientes&function=index&orden=desc">DESC</a>
      </caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Dni</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
        ClientesController::mostrar();
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