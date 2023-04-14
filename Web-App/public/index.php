<?php

require_once '../config/config.php';
require_once '../routes/Router.php';

$conn = retornarConn();

$rutas = new Router();

$rutas->setConnection($conn);

// obtener la URL de la petición

if (empty($_SERVER['PATH_INFO'])) {
    require_once '../resources/views/home.html';
} else {
    $url = $_SERVER['PATH_INFO'];
    //$response = $rutas->dispatch($url);
    $rutas->dispatch($url);
    //echo $response;
}
// validar el método HTTP
/*if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405); // método no permitido
    echo 'Método no permitido';
    exit;
}

// despachar la petición
$response = $rutas->dispatch($url);

echo $response;*/

?>