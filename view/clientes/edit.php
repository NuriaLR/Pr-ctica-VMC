<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITA CLIENTE</title>
</head>
<body>
    <main>
    <a href="?controller=clientes&function=index">ATRAS</a>
        <form method="post" action="?controller=clientes&function=update&id=<?php echo $id ?>">
        <label for="nombre">nombre</label>
        <input value="<?php echo $cliente['nombre']; ?>" type="text" id="nombre" name="nombre"><br>
        <label for="dni">dni</label>
        <input value="<?php echo $cliente['dni']; ?>" type="text" id="dni" name="dni"><br>
        <label for="telefono">telefono</label>
        <input value="<?php echo $cliente['telefono']; ?>" type="text" id="telefono" name="telefono"><br>
        <label for="correo">correo</label>
        <input value="<?php echo $cliente['correo']; ?>" type="text" id="correo" name="correo"><br>
        <br>
        <button id="editar">Editar</button>
        </form>

        <div id="clientes">
        </div>
    </main>
</body>
</html>