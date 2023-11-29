<?php

// Se incluyen los controladores 
require_once 'controller/ClientesController.php';
require_once 'controller/JuegosController.php';
require_once 'controller/ComprasController.php';
require_once 'db/datos.php';

// Se establecen variables globales para los datos del archivo datos.php
$GLOBALS['clientes'] = $datos['Clientes'];
$GLOBALS['juegos'] = $datos['Juegos'];
$GLOBALS['compras'] = $datos['Compras'];

// Se verifica si existen parámetros 'controller' y 'function' en la URL
if (isset($_GET['controller']) && isset($_GET['function'])) {

    // Se obtienen los valores de 'controller' y 'function' de la URL
    $controller = $_GET['controller'];
    $controller = $controller . 'Controller'; // Se agrega "Controller" al nombre del controlador
    $controller = ucfirst($controller); // Se convierte la primera letra a mayúscula

    $function = $_GET['function']; // Se obtiene el nombre de la función a llamar

    // Se verifica si la clase del controlador existe
    if (class_exists($controller)) {

        // Se verifica si la función dentro del controlador existe
        if (method_exists($controller, $function)) {

            // Si hay un parámetro 'id' en la URL, se obtiene y se pasa a la función
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                call_user_func($controller . '::' . $function, $id);
            } else {
                // Si no hay 'id', simplemente se llama a la función sin parámetros
                call_user_func($controller . '::' . $function);
            }
        } else {
            // Si la función no existe, se muestra un mensaje de error y se incluye una página 404
            include('view/error/404.php');
            echo 'ERROR: no existe la función que buscas en el controlador. Revisa tu proyecto';
        }
    } else {
        // Si la clase del controlador no existe, se muestra un mensaje de error y se incluye una página 404
        echo 'ERROR: No existe el controlador que buscas. Revisa tu proyecto';
        include('view/error/404.php');
    }
} else {
    // Si no hay parámetros 'controller' y 'function' en la URL, se incluye la página de inicio
    include('view/index.php');
}

?>
