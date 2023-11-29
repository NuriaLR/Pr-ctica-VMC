<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREAR</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <style>
    /*he puesto aquí el style porque me está dando problemas el archivo.
    No lo detecta*/
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #8ec7e1;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <main>
    <a class="btn" href="?controller=compras&function=index">ATRAS</a>
        <form method="post" action="?controller=compras&function=save">
          <label for="nombre">DNI</label>
          <input type="text" id="cliente_dni" name="cliente_dni"><br>
          <label for="nombre">ID Juego</label>
          <input type="text" id="juego_id" name="juego_id"><br>
          <label for="nombre">Cantidad</label>
          <input type="text" id="stock" name="cantidad"><br>
          <label for="precio">Precio</label>
          <input type="number" step="0.01" id="precio" name="precio" required><br>
          <label for="fecha">Fecha</label>
          <input type=datetime-local step="1"  min="2011-02-20T20:20" max="2031-02-20T20:20" id="fecha" name="fecha" required><br>
          <br>
          <button id="enviar">Enviar</button>
        </form>

    </main>
</body>
</html>