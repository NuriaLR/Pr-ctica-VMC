<?php

require_once 'Controller.php';
require_once 'db/datos.php';

class JuegosController implements Controller{

    public static function index(){

        include 'view/juegos/index.php';
    }

    /*
    Función que filtra según el tipo de juego marcado en el selector.
    Cuando está en todos te permite ordenarlos de mayor a menor precio y viceversa.
    */
    public static function filtrarTipoPrecio(){
      
        $juegos = $GLOBALS['juegos'];

        //si existe el selector del filtro y no esta vacio, muestra la categoria
        if (isset($_POST['selector']) && !empty($_POST['selector'])) {
            $categoria = $_POST['selector'];
            foreach ($juegos[$_POST['selector']] as $key => $valor) {
                echo '<td>' . $valor['id'] . '</td>';
                echo '<td>' . $valor['nombre'] . '</td>';
                echo '<td>' . $valor['descripcion'] . '</td>';
                echo '<td>' . $valor['stock'] . '</td>';
                echo '<td>' . $valor['precio'] . '</td>';
                echo '<td>' . $_POST['selector'] . '</td>';
                echo '<td>
                     <a href="?controller=Juegos&function=edit&id=' . $valor['id'] . '&categoria=' . $categoria . '">Editar</a>
                     <a href="?controller=Juegos&function=destroy&id=' .  $key . '&categoria=' . $categoria . '">Eliminar</a></td>';
                echo '</tr>';
            }
            // si esiste 'orden' en la URL
        } elseif (isset($_GET['orden'])) {         
            if (isset($_GET['orden'])) {

                //creo un array $precios para almacenar solo los precios de los juegos 
                $precios = array();
                foreach ($juegos as $categoria => $value) {
                    foreach ($value as $key => $valor) {
                        $precios[] = $valor['precio'];
                    }
                }
            }
            // orden de los precios segun sea mayor o menor
            if ($_GET['orden'] == 'mayor') {
                rsort($precios);
            } elseif ($_GET['orden'] == 'menor') {
                sort($precios);
            }
            // recorre el array de $precios y de $juegos buscando y comparando el precio del juego con el juego para que se muestren cuando coincidan.
            foreach ($precios as $precio) {
                foreach ($juegos as $categoria => $value) {
                    foreach ($value as $key => $valor) {
                        if ($valor['precio'] == $precio) {
                            echo '<tr>';
                            echo '<td>' . $valor['id'] . '</td>';
                            echo '<td>' . $valor['nombre'] . '</td>';
                            echo '<td>' . $valor['descripcion'] . '</td>';
                            echo '<td>' . $valor['stock'] . '</td>';
                            echo '<td>' . $valor['precio'] . '</td>';
                            echo '<td>' . $categoria . '</td>';
                            echo '<td>
                            <a href="?controller=Juegos&function=edit&id=' . $valor['id'] . '&categoria=' . $categoria . '">Editar</a>
                            <a href="?controller=Juegos&function=destroy&id='  . $key . '&categoria=' . $categoria . '">Eliminar</a></td>';
                            echo '</tr>';
                        }
                    }
                }
            }
        } else {
            // En caso de que no haya selector ni orden especificado
            // Mostrar todos los juegos sin ordenar
            foreach ($juegos as $categoria => $value) {
                foreach ($value as $key => $valor) {
                    echo '<tr>';
                    echo '<td>' . $valor['id'] . '</td>';
                    echo '<td>' . $valor['nombre'] . '</td>';
                    echo '<td>' . $valor['descripcion'] . '</td>';
                    echo '<td>' . $valor['stock'] . '</td>';
                    echo '<td>' . $valor['precio'] . '</td>';
                    echo '<td>' . $categoria . '</td>';
                    echo '<td>
                <a href="?controller=Juegos&function=edit&id=' . $valor['id'] . '&categoria=' . $categoria . '">Editar</a>
                <a href="?controller=Juegos&function=destroy&id='  . $key . '&categoria=' . $categoria . '">Eliminar</a></td>';
                    echo '</tr>';
                }
            }
        }
    }



    public static function create(){
        include 'view/juegos/create.php';
    }

    public static function save(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $stock=$_POST['stock'];
        $precio=$_POST['precio'];
        $juegos=array(
                'id' => $id,
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'stock' => $stock,
                'precio' => $precio,
        );
        array_push($GLOBALS['juegos'],$juegos);
        JuegosController::index();
    }
    public static function edit($id) {     
        
        $juegos=null;
        $juegos=$GLOBALS['juegos'];
        foreach ($juegos as $key => $value) {
            if ($key == $id) {
                $juegos=$value;
            }
      
        }

        include 'view/juegos/edit.php';

    }

    public static function destroy($id){

        if(array_key_exists($id, $GLOBALS['juegos'])){
            unset($GLOBALS['juegos'][$id]);
        }else{
            $GLOBALS['error']="No se encuentra el juego";
        }
        JuegosController::index();

    }

    public static function update($id){

        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $stock=$_POST['stock'];
        $precio=$_POST['precio'];

        foreach ($GLOBALS['juegos'] as $key => $value) {
            if ($key== $id) {
                // $GLOBALS['juegos'][$key]['id']=$id;
                $GLOBALS['juegos'][$key]['nombre']=$nombre;
                $GLOBALS['juegos'][$key]['descripcion']=$descripcion;
                $GLOBALS['juegos'][$key]['stock']=$stock;
                $GLOBALS['juegos'][$key]['precio']=$precio;
            }else{
            }
        }
        JuegosController::index();
    }

}


?>