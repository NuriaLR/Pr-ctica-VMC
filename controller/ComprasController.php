<?php
require_once 'Controller.php';
require_once 'db/datos.php';

class ComprasController implements Controller
{

    public static function index()
    {
        $compras = $GLOBALS['compras'];
        
        include 'view/Compras/index.php';
    }
   
    public static function mostarCompra(){
        
        $clientes = $GLOBALS['clientes'];
        $juegos = $GLOBALS['juegos'];
        $compras = $GLOBALS['compras'];

        // busca coincidencias entre las compras y los juegos para mostrarlo en la tabla.
        //recorre juegos
        foreach ($juegos as $value) {
            foreach ($value as $value2) {
                //obtengo el ID del juego actual
                $juegoId = $value2['id'];
                //recorro clientes
                foreach ($clientes as $id => $value) {
                    //obtengo el dni de cliente
                    $clienteDni = $value['dni'];
                    //compraro si el DNI del cliente y el ID del juego en la compra coinciden con el DNI
                    //del cliente y el ID del juego actual. 
                    //cuando coincide se genera la tabla.
                    foreach ($compras as $id => $compra) {
                        if ($compra['cliente_dni'] == $clienteDni && $compra['juego_id'] == $juegoId) {
                            echo '<tr>';
                            echo '<td>' . $id . '</td>';
                            echo '<td>' . $compra['cliente_dni'] . '</td>';
                            echo '<td>' . $value['nombre'] . '</td>';
                            echo '<td>' . $compra['juego_id'] . '</td>';
                            echo '<td>' . $value2['nombre'] . '</td>';
                            echo '<td>' . $compra['precio'] . '</td>';
                            echo '<td>' . $compra['cantidad'] . '</td>';
                            //muestra la suma total de los juegos comprados
                            echo '<td>' . $compra['precio'] * $compra['cantidad'] . '</td>';
                            echo '<td>' . $compra['fecha'] . '</td>';
                            echo '<td>
                                    <a href="?controller=Compras&function=edit&id=' . $id . '">Editar</a>
                                    <a href="?controller=Compras&function=destroy&id=' . $id . '&dni=' . $compra['cliente_dni'] . '">Eliminar</a></td>';
                            echo '</tr>';
                        }
                    }
                }
            }
        }
    }
    public static function create()
    {
        include 'view/Compras/create.php';
    }
    public static function save()
    {
        //Crear idJuego  Cantidad precio y fecha

        if (isset($_POST)) {
            $compra = array(
                'cliente_dni' => $_POST['cliente_dni'],
                'juego_id' => $_POST['juego_id'],
                'precio' => $_POST['precio'],
                'cantidad' => $_POST['cantidad'],
                'fecha' => $_POST['fecha'],

            );
            $compraExiste = false;
            foreach ($GLOBALS['compras'] as $id => $value) {
                if ($value['cliente_dni'] == $compra['cliente_dni'] && $value['juego_id'] == $compra['juego_id']) {
                    $compraExiste = true;
                }
            }
            if (!$compraExiste) {
                array_push($GLOBALS['compras'], $compra);
            } else {
                echo 'Compra existente';
            }

            ComprasController::index();
        }
    }
    public static function update($id){
        $id = $_GET['id'];
        if (isset($GLOBALS['compras'][$id])) {
            $cliente_dni = $_POST['cliente_dni'];
            $juego_id = $_POST['juego_id'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio'];
            $fecha = $_POST['fecha'];


            $compraActualizada = array(
                'cliente_dni' => $cliente_dni,
                'precio' => $precio,
                'juego_id' => $juego_id,
                'cantidad' => $cantidad,
                'fecha' => $fecha
            );
            $GLOBALS['compras'][$id] = $compraActualizada;
            var_dump($GLOBALS['compras'][$id]);

            ComprasController::index();
        }
    }
    public static function edit($id)
    {
        $compra = $GLOBALS['compras'];
        $id = $_GET['id'];

        echo '<label for="cliente_dni">cliente_dni</label>';
        echo '<input value="' . $compra[$id]['cliente_dni'] . '" type="text" id="cliente_dni" name="cliente_dni" readonly><br>';
        echo '<label for="juego_id">juego_id</label>';
        echo '<input value="' . $compra[$id]['juego_id'] . '" type="text" id="juego_id" name="juego_id" readonly><br>';
        echo '<label for="cantidad">cantidad</label>';
        echo '<input value="' . $compra[$id]['cantidad'] . '" type="number" id="cantidad" name="cantidad" min="1" required><br>';
        echo '<label for="precio">precio</label>';
        echo '<input value="' . $compra[$id]['precio'] . '" type="number" step="0.01" id="precio" name="precio" required><br>';
        echo '<label for="fecha">fecha</label>';
        echo '<input value="' . $compra[$id]['fecha'] . '" type=datetime-local step="1"  min="2011-02-20T20:20" max="2031-02-20T20:20" id="fecha" name="fecha" required><br>';
        echo '<br>';
        echo '<button id="editar">Editar</button>';
    
        include 'view/Compras/edit.php';
    }
    public static function destroy($id)
    {
        $dni = $_GET['dni'];

        if ($dni == $GLOBALS['compras'][$id]['cliente_dni']) {
            unset($GLOBALS['compras'][$id]);
        } else {
            $GLOBALS['error'] = "No hay Compra";
        }

        ComprasController::index();
    } 
}