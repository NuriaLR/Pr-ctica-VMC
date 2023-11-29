<?php

require_once 'Controller.php';
require_once 'db/datos.php';

class ClientesController implements Controller
{

    public static function index()
    {

        include 'view/Clientes/index.php';
    }

    public static function arrReverse($clientes)
    {
        // se obtienen las claves originales y se invierten
        $keys = array_reverse(array_keys($clientes));
        //invierte el orden de los valores asociados a las claves
        $values = array_reverse($clientes);
        //var_dump($values);

        // devuelve la combinacion de las claves invertidas con los valores invertidos.
        return array_combine($keys, $values);
    }

    public static function mostrar()
    {
        $clientes = $GLOBALS['clientes'];

        // ORDEN ASCENDENTE Y DESCENDENTE

        // si existe desc en la URL llama a la funcion arrReverse para invertir el orden.
        if (isset($_GET['orden']) && $_GET['orden'] == 'desc') {
            $clientes = self::arrReverse($clientes);
        } else {
        }
        foreach ($clientes as $id => $value) {
            echo '<tr class="formulario">';
            echo '<td>' . $id . '</td>';
            echo '<td>' . $value['nombre'] . '</td>';
            echo '<td>' . $value['dni'] . '</td>';
            echo '<td>' . $value['telefono'] . '</td>';
            echo '<td>' . $value['correo'] . '</td>';
            echo '<td>
                <a href="?controller=clientes&function=edit&id=' . $id . '">Editar</a>
                <a href="?controller=clientes&function=destroy&id=' . $id . '">Eliminar</a></td>';
            echo '</tr>';
        }

    }

    public static function create()
    {
        include 'view/clientes/create.php';
    }

    public static function save()
    {

        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $cliente = array(
            'nombre' => $nombre,
            'dni' => $dni,
            'telefono' => $telefono,
            'correo' => $correo,
        );
        array_push($GLOBALS['clientes'], $cliente);
        ClientesController::index();
    }

    public static function edit($id)
    {

        $cliente = null;
        $cliente = $GLOBALS['clientes'];
        foreach ($cliente as $key => $value) {
            if ($key == $id) {
                $cliente = $value;
            }
        }

        include 'view/clientes/edit.php';
    }

    public static function destroy($id)
    {
        if (array_key_exists($id, $GLOBALS['clientes'])) {
            unset($GLOBALS['clientes'][$id]);
        } else {
            $GLOBALS['error'] = "No se encuentra el cliente";
        }
        ClientesController::index();

    }

    public static function update($id)
    {

        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        foreach ($GLOBALS['clientes'] as $key => $value) {
            if ($key == $id) {
                $GLOBALS['clientes'][$key]['nombre'] = $nombre;
                $GLOBALS['clientes'][$key]['dni'] = $dni;
                $GLOBALS['clientes'][$key]['telefono'] = $telefono;
                $GLOBALS['clientes'][$key]['correo'] = $correo;
            } else {
            }
        }
        ClientesController::index();
    }

}


?>